<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal;

use ApiClients\Client\GitHub\Internal\Operator\Actions\AddCustomLabelsToSelfHostedRunnerForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\AddCustomLabelsToSelfHostedRunnerForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Actions\AddRepoAccessToSelfHostedRunnerGroupInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\AddSelectedRepoToOrgSecret;
use ApiClients\Client\GitHub\Internal\Operator\Actions\AddSelectedRepoToOrgVariable;
use ApiClients\Client\GitHub\Internal\Operator\Actions\AddSelfHostedRunnerToGroupForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ApproveWorkflowRun;
use ApiClients\Client\GitHub\Internal\Operator\Actions\CancelWorkflowRun;
use ApiClients\Client\GitHub\Internal\Operator\Actions\CreateEnvironmentVariable;
use ApiClients\Client\GitHub\Internal\Operator\Actions\CreateOrgVariable;
use ApiClients\Client\GitHub\Internal\Operator\Actions\CreateOrUpdateEnvironmentSecret;
use ApiClients\Client\GitHub\Internal\Operator\Actions\CreateOrUpdateOrgSecret;
use ApiClients\Client\GitHub\Internal\Operator\Actions\CreateOrUpdateRepoSecret;
use ApiClients\Client\GitHub\Internal\Operator\Actions\CreateRegistrationTokenForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\CreateRegistrationTokenForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Actions\CreateRemoveTokenForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\CreateRemoveTokenForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Actions\CreateRepoVariable;
use ApiClients\Client\GitHub\Internal\Operator\Actions\CreateSelfHostedRunnerGroupForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\CreateWorkflowDispatch;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DeleteActionsCacheById;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DeleteActionsCacheByKey;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DeleteArtifact;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DeleteEnvironmentSecret;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DeleteEnvironmentVariable;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DeleteOrgSecret;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DeleteOrgVariable;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DeleteRepoSecret;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DeleteRepoVariable;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DeleteSelfHostedRunnerFromOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DeleteSelfHostedRunnerFromRepo;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DeleteSelfHostedRunnerGroupFromOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DeleteWorkflowRun;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DeleteWorkflowRunLogs;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DisableWorkflow;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DownloadArtifact;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DownloadJobLogsForWorkflowRun;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DownloadWorkflowRunAttemptLogs;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DownloadWorkflowRunLogs;
use ApiClients\Client\GitHub\Internal\Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Actions\EnableWorkflow;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ForceCancelWorkflowRun;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GenerateRunnerJitconfigForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GenerateRunnerJitconfigForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetActionsCacheList;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetActionsCacheUsage;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetActionsCacheUsageByRepoForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetActionsCacheUsageForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetAllowedActionsOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetAllowedActionsRepository;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetArtifact;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetCustomOidcSubClaimForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetEnvironmentPublicKey;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetEnvironmentSecret;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetEnvironmentVariable;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetGithubActionsPermissionsOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetGithubActionsPermissionsRepository;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetJobForWorkflowRun;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetOrgPublicKey;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetOrgSecret;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetOrgVariable;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetPendingDeploymentsForRun;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetRepoPublicKey;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetRepoSecret;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetRepoVariable;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetReviewsForRun;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetSelfHostedRunnerForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetSelfHostedRunnerForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetSelfHostedRunnerGroupForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetWorkflow;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetWorkflowAccessToRepository;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetWorkflowRun;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetWorkflowRunAttempt;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetWorkflowRunUsage;
use ApiClients\Client\GitHub\Internal\Operator\Actions\GetWorkflowUsage;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListArtifactsForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListEnvironmentSecrets;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListEnvironmentVariables;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListJobsForWorkflowRun;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListJobsForWorkflowRunAttempt;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListLabelsForSelfHostedRunnerForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListLabelsForSelfHostedRunnerForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListOrgSecrets;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListOrgVariables;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListRepoOrganizationSecrets;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListRepoOrganizationVariables;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListRepoSecrets;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListRepoVariables;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListRepoWorkflows;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListRunnerApplicationsForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListRunnerApplicationsForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListSelectedReposForOrgSecret;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListSelectedReposForOrgVariable;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListSelfHostedRunnerGroupsForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListSelfHostedRunnersForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListSelfHostedRunnersForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListSelfHostedRunnersInGroupForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListWorkflowRunArtifacts;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListWorkflowRuns;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ListWorkflowRunsForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\RemoveSelectedRepoFromOrgSecret;
use ApiClients\Client\GitHub\Internal\Operator\Actions\RemoveSelectedRepoFromOrgVariable;
use ApiClients\Client\GitHub\Internal\Operator\Actions\RemoveSelfHostedRunnerFromGroupForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ReRunJobForWorkflowRun;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ReRunWorkflow;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ReRunWorkflowFailedJobs;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ReviewCustomGatesForRun;
use ApiClients\Client\GitHub\Internal\Operator\Actions\ReviewPendingDeploymentsForRun;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetAllowedActionsOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetAllowedActionsRepository;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetCustomLabelsForSelfHostedRunnerForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetCustomLabelsForSelfHostedRunnerForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetCustomOidcSubClaimForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetGithubActionsPermissionsOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetGithubActionsPermissionsRepository;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetSelectedReposForOrgSecret;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetSelectedReposForOrgVariable;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetSelfHostedRunnersInGroupForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetWorkflowAccessToRepository;
use ApiClients\Client\GitHub\Internal\Operator\Actions\UpdateEnvironmentVariable;
use ApiClients\Client\GitHub\Internal\Operator\Actions\UpdateOrgVariable;
use ApiClients\Client\GitHub\Internal\Operator\Actions\UpdateRepoVariable;
use ApiClients\Client\GitHub\Internal\Operator\Actions\UpdateSelfHostedRunnerGroupForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Activity\CheckRepoIsStarredByAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Activity\DeleteRepoSubscription;
use ApiClients\Client\GitHub\Internal\Operator\Activity\DeleteThreadSubscription;
use ApiClients\Client\GitHub\Internal\Operator\Activity\GetFeeds;
use ApiClients\Client\GitHub\Internal\Operator\Activity\GetRepoSubscription;
use ApiClients\Client\GitHub\Internal\Operator\Activity\GetThread;
use ApiClients\Client\GitHub\Internal\Operator\Activity\GetThreadSubscriptionForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Activity\ListEventsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Activity\ListNotificationsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Activity\ListOrgEventsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Activity\ListPublicEvents;
use ApiClients\Client\GitHub\Internal\Operator\Activity\ListPublicEventsForRepoNetwork;
use ApiClients\Client\GitHub\Internal\Operator\Activity\ListPublicEventsForUser;
use ApiClients\Client\GitHub\Internal\Operator\Activity\ListPublicOrgEvents;
use ApiClients\Client\GitHub\Internal\Operator\Activity\ListReceivedEventsForUser;
use ApiClients\Client\GitHub\Internal\Operator\Activity\ListReceivedPublicEventsForUser;
use ApiClients\Client\GitHub\Internal\Operator\Activity\ListRepoEvents;
use ApiClients\Client\GitHub\Internal\Operator\Activity\ListRepoNotificationsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Activity\ListReposStarredByAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Activity\ListReposStarredByUser;
use ApiClients\Client\GitHub\Internal\Operator\Activity\ListReposWatchedByUser;
use ApiClients\Client\GitHub\Internal\Operator\Activity\ListStargazersForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Activity\ListWatchedReposForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Activity\ListWatchersForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Activity\MarkNotificationsAsRead;
use ApiClients\Client\GitHub\Internal\Operator\Activity\MarkRepoNotificationsAsRead;
use ApiClients\Client\GitHub\Internal\Operator\Activity\MarkThreadAsDone;
use ApiClients\Client\GitHub\Internal\Operator\Activity\MarkThreadAsRead;
use ApiClients\Client\GitHub\Internal\Operator\Activity\SetRepoSubscription;
use ApiClients\Client\GitHub\Internal\Operator\Activity\SetThreadSubscription;
use ApiClients\Client\GitHub\Internal\Operator\Activity\StarRepoForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Activity\UnstarRepoForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\ApiInsights\GetRouteStatsByActor;
use ApiClients\Client\GitHub\Internal\Operator\ApiInsights\GetSubjectStats;
use ApiClients\Client\GitHub\Internal\Operator\ApiInsights\GetSummaryStats;
use ApiClients\Client\GitHub\Internal\Operator\ApiInsights\GetSummaryStatsByActor;
use ApiClients\Client\GitHub\Internal\Operator\ApiInsights\GetSummaryStatsByUser;
use ApiClients\Client\GitHub\Internal\Operator\ApiInsights\GetTimeStats;
use ApiClients\Client\GitHub\Internal\Operator\ApiInsights\GetTimeStatsByActor;
use ApiClients\Client\GitHub\Internal\Operator\ApiInsights\GetTimeStatsByUser;
use ApiClients\Client\GitHub\Internal\Operator\ApiInsights\GetUserStats;
use ApiClients\Client\GitHub\Internal\Operator\Apps\AddRepoToInstallationForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Apps\CheckToken;
use ApiClients\Client\GitHub\Internal\Operator\Apps\CreateFromManifest;
use ApiClients\Client\GitHub\Internal\Operator\Apps\CreateInstallationAccessToken;
use ApiClients\Client\GitHub\Internal\Operator\Apps\DeleteAuthorization;
use ApiClients\Client\GitHub\Internal\Operator\Apps\DeleteInstallation;
use ApiClients\Client\GitHub\Internal\Operator\Apps\DeleteToken;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetAuthenticated;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetBySlug;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetInstallation;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetOrgInstallation;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetRepoInstallation;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetSubscriptionPlanForAccount;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetSubscriptionPlanForAccountStubbed;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetUserInstallation;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetWebhookConfigForApp;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetWebhookDelivery;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListAccountsForPlan;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListAccountsForPlanStubbed;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListInstallationReposForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListInstallationRequestsForAuthenticatedApp;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListInstallations;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListInstallationsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListPlans;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListPlansStubbed;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListReposAccessibleToInstallation;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbed;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListWebhookDeliveries;
use ApiClients\Client\GitHub\Internal\Operator\Apps\RedeliverWebhookDelivery;
use ApiClients\Client\GitHub\Internal\Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ResetToken;
use ApiClients\Client\GitHub\Internal\Operator\Apps\RevokeInstallationAccessToken;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ScopeToken;
use ApiClients\Client\GitHub\Internal\Operator\Apps\SuspendInstallation;
use ApiClients\Client\GitHub\Internal\Operator\Apps\UnsuspendInstallation;
use ApiClients\Client\GitHub\Internal\Operator\Apps\UpdateWebhookConfigForApp;
use ApiClients\Client\GitHub\Internal\Operator\Billing\GetGithubActionsBillingOrg;
use ApiClients\Client\GitHub\Internal\Operator\Billing\GetGithubActionsBillingUser;
use ApiClients\Client\GitHub\Internal\Operator\Billing\GetGithubBillingUsageReportOrg;
use ApiClients\Client\GitHub\Internal\Operator\Billing\GetGithubPackagesBillingOrg;
use ApiClients\Client\GitHub\Internal\Operator\Billing\GetGithubPackagesBillingUser;
use ApiClients\Client\GitHub\Internal\Operator\Billing\GetSharedStorageBillingOrg;
use ApiClients\Client\GitHub\Internal\Operator\Billing\GetSharedStorageBillingUser;
use ApiClients\Client\GitHub\Internal\Operator\Checks\CreateSuite;
use ApiClients\Client\GitHub\Internal\Operator\Checks\GetSuite;
use ApiClients\Client\GitHub\Internal\Operator\Checks\ListAnnotations;
use ApiClients\Client\GitHub\Internal\Operator\Checks\ListForRef;
use ApiClients\Client\GitHub\Internal\Operator\Checks\ListForSuite;
use ApiClients\Client\GitHub\Internal\Operator\Checks\ListSuitesForRef;
use ApiClients\Client\GitHub\Internal\Operator\Checks\RerequestRun;
use ApiClients\Client\GitHub\Internal\Operator\Checks\RerequestSuite;
use ApiClients\Client\GitHub\Internal\Operator\Checks\SetSuitesPreferences;
use ApiClients\Client\GitHub\Internal\Operator\Classroom\GetAClassroom;
use ApiClients\Client\GitHub\Internal\Operator\Classroom\GetAnAssignment;
use ApiClients\Client\GitHub\Internal\Operator\Classroom\GetAssignmentGrades;
use ApiClients\Client\GitHub\Internal\Operator\Classroom\ListAcceptedAssignmentsForAnAssignment;
use ApiClients\Client\GitHub\Internal\Operator\Classroom\ListAssignmentsForAClassroom;
use ApiClients\Client\GitHub\Internal\Operator\Classroom\ListClassrooms;
use ApiClients\Client\GitHub\Internal\Operator\CodeScanning\CreateVariantAnalysis;
use ApiClients\Client\GitHub\Internal\Operator\CodeScanning\DeleteAnalysis;
use ApiClients\Client\GitHub\Internal\Operator\CodeScanning\DeleteCodeqlDatabase;
use ApiClients\Client\GitHub\Internal\Operator\CodeScanning\GetAlert;
use ApiClients\Client\GitHub\Internal\Operator\CodeScanning\GetAnalysis;
use ApiClients\Client\GitHub\Internal\Operator\CodeScanning\GetCodeqlDatabase;
use ApiClients\Client\GitHub\Internal\Operator\CodeScanning\GetDefaultSetup;
use ApiClients\Client\GitHub\Internal\Operator\CodeScanning\GetSarif;
use ApiClients\Client\GitHub\Internal\Operator\CodeScanning\GetVariantAnalysis;
use ApiClients\Client\GitHub\Internal\Operator\CodeScanning\GetVariantAnalysisRepoTask;
use ApiClients\Client\GitHub\Internal\Operator\CodeScanning\ListAlertInstances;
use ApiClients\Client\GitHub\Internal\Operator\CodeScanning\ListAlertsForOrg;
use ApiClients\Client\GitHub\Internal\Operator\CodeScanning\ListAlertsForRepo;
use ApiClients\Client\GitHub\Internal\Operator\CodeScanning\ListCodeqlDatabases;
use ApiClients\Client\GitHub\Internal\Operator\CodeScanning\ListRecentAnalyses;
use ApiClients\Client\GitHub\Internal\Operator\CodeScanning\UpdateAlert;
use ApiClients\Client\GitHub\Internal\Operator\CodeScanning\UpdateDefaultSetup;
use ApiClients\Client\GitHub\Internal\Operator\CodeScanning\UploadSarif;
use ApiClients\Client\GitHub\Internal\Operator\CodeSecurity\AttachConfiguration;
use ApiClients\Client\GitHub\Internal\Operator\CodeSecurity\CreateConfiguration;
use ApiClients\Client\GitHub\Internal\Operator\CodeSecurity\DeleteConfiguration;
use ApiClients\Client\GitHub\Internal\Operator\CodeSecurity\DetachConfiguration;
use ApiClients\Client\GitHub\Internal\Operator\CodeSecurity\GetConfiguration;
use ApiClients\Client\GitHub\Internal\Operator\CodeSecurity\GetConfigurationForRepository;
use ApiClients\Client\GitHub\Internal\Operator\CodeSecurity\GetConfigurationsForOrg;
use ApiClients\Client\GitHub\Internal\Operator\CodeSecurity\GetDefaultConfigurations;
use ApiClients\Client\GitHub\Internal\Operator\CodeSecurity\GetRepositoriesForConfiguration;
use ApiClients\Client\GitHub\Internal\Operator\CodeSecurity\SetConfigurationAsDefault;
use ApiClients\Client\GitHub\Internal\Operator\CodeSecurity\UpdateConfiguration;
use ApiClients\Client\GitHub\Internal\Operator\CodesOfConduct\GetAllCodesOfConduct;
use ApiClients\Client\GitHub\Internal\Operator\CodesOfConduct\GetConductCode;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\AddRepositoryForSecretForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\CheckPermissionsForDevcontainer;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\CodespaceMachinesForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\CreateForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\CreateOrUpdateSecretForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\CreateWithPrForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\CreateWithRepoForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\DeleteCodespacesAccessUsers;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\DeleteForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\DeleteFromOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\DeleteSecretForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\ExportForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetCodespacesForUserInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetExportDetailsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetPublicKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetSecretForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\ListForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\ListInOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\ListInRepositoryForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\ListRepositoriesForSecretForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\ListSecretsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\PreFlightWithRepoForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\PublishForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\RepoMachinesForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\SetCodespacesAccess;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\SetCodespacesAccessUsers;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\SetRepositoriesForSecretForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\StartForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\StopForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\StopInOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\UpdateForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Copilot\AddCopilotSeatsForTeams;
use ApiClients\Client\GitHub\Internal\Operator\Copilot\AddCopilotSeatsForUsers;
use ApiClients\Client\GitHub\Internal\Operator\Copilot\CancelCopilotSeatAssignmentForTeams;
use ApiClients\Client\GitHub\Internal\Operator\Copilot\CancelCopilotSeatAssignmentForUsers;
use ApiClients\Client\GitHub\Internal\Operator\Copilot\CopilotMetricsForEnterprise;
use ApiClients\Client\GitHub\Internal\Operator\Copilot\CopilotMetricsForEnterpriseTeam;
use ApiClients\Client\GitHub\Internal\Operator\Copilot\CopilotMetricsForOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Copilot\CopilotMetricsForTeam;
use ApiClients\Client\GitHub\Internal\Operator\Copilot\GetCopilotOrganizationDetails;
use ApiClients\Client\GitHub\Internal\Operator\Copilot\GetCopilotSeatDetailsForUser;
use ApiClients\Client\GitHub\Internal\Operator\Copilot\ListCopilotSeats;
use ApiClients\Client\GitHub\Internal\Operator\Copilot\ListCopilotSeatsForEnterprise;
use ApiClients\Client\GitHub\Internal\Operator\Copilot\UsageMetricsForEnterprise;
use ApiClients\Client\GitHub\Internal\Operator\Copilot\UsageMetricsForEnterpriseTeam;
use ApiClients\Client\GitHub\Internal\Operator\Copilot\UsageMetricsForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Copilot\UsageMetricsForTeam;
use ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListAlertsForEnterprise;
use ApiClients\Client\GitHub\Internal\Operator\DependencyGraph\CreateRepositorySnapshot;
use ApiClients\Client\GitHub\Internal\Operator\DependencyGraph\DiffRange;
use ApiClients\Client\GitHub\Internal\Operator\DependencyGraph\ExportSbom;
use ApiClients\Client\GitHub\Internal\Operator\Emojis\Get;
use ApiClients\Client\GitHub\Internal\Operator\Gists\CheckIsStarred;
use ApiClients\Client\GitHub\Internal\Operator\Gists\Create;
use ApiClients\Client\GitHub\Internal\Operator\Gists\CreateComment;
use ApiClients\Client\GitHub\Internal\Operator\Gists\Delete;
use ApiClients\Client\GitHub\Internal\Operator\Gists\DeleteComment;
use ApiClients\Client\GitHub\Internal\Operator\Gists\Fork;
use ApiClients\Client\GitHub\Internal\Operator\Gists\GetComment;
use ApiClients\Client\GitHub\Internal\Operator\Gists\GetRevision;
use ApiClients\Client\GitHub\Internal\Operator\Gists\List_;
use ApiClients\Client\GitHub\Internal\Operator\Gists\ListComments;
use ApiClients\Client\GitHub\Internal\Operator\Gists\ListCommits;
use ApiClients\Client\GitHub\Internal\Operator\Gists\ListForks;
use ApiClients\Client\GitHub\Internal\Operator\Gists\ListForUser;
use ApiClients\Client\GitHub\Internal\Operator\Gists\ListPublic;
use ApiClients\Client\GitHub\Internal\Operator\Gists\ListStarred;
use ApiClients\Client\GitHub\Internal\Operator\Gists\Star;
use ApiClients\Client\GitHub\Internal\Operator\Gists\Unstar;
use ApiClients\Client\GitHub\Internal\Operator\Gists\Update;
use ApiClients\Client\GitHub\Internal\Operator\Gists\UpdateComment;
use ApiClients\Client\GitHub\Internal\Operator\Git\CreateBlob;
use ApiClients\Client\GitHub\Internal\Operator\Git\CreateCommit;
use ApiClients\Client\GitHub\Internal\Operator\Git\CreateRef;
use ApiClients\Client\GitHub\Internal\Operator\Git\CreateTag;
use ApiClients\Client\GitHub\Internal\Operator\Git\CreateTree;
use ApiClients\Client\GitHub\Internal\Operator\Git\DeleteRef;
use ApiClients\Client\GitHub\Internal\Operator\Git\GetBlob;
use ApiClients\Client\GitHub\Internal\Operator\Git\GetRef;
use ApiClients\Client\GitHub\Internal\Operator\Git\GetTag;
use ApiClients\Client\GitHub\Internal\Operator\Git\GetTree;
use ApiClients\Client\GitHub\Internal\Operator\Git\ListMatchingRefs;
use ApiClients\Client\GitHub\Internal\Operator\Git\UpdateRef;
use ApiClients\Client\GitHub\Internal\Operator\Gitignore\GetAllTemplates;
use ApiClients\Client\GitHub\Internal\Operator\Gitignore\GetTemplate;
use ApiClients\Client\GitHub\Internal\Operator\Interactions\GetRestrictionsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Interactions\GetRestrictionsForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Interactions\GetRestrictionsForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Interactions\RemoveRestrictionsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Interactions\RemoveRestrictionsForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Interactions\RemoveRestrictionsForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Interactions\SetRestrictionsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Interactions\SetRestrictionsForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Interactions\SetRestrictionsForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Issues\AddAssignees;
use ApiClients\Client\GitHub\Internal\Operator\Issues\AddLabels;
use ApiClients\Client\GitHub\Internal\Operator\Issues\AddSubIssue;
use ApiClients\Client\GitHub\Internal\Operator\Issues\CheckUserCanBeAssigned;
use ApiClients\Client\GitHub\Internal\Operator\Issues\CheckUserCanBeAssignedToIssue;
use ApiClients\Client\GitHub\Internal\Operator\Issues\CreateLabel;
use ApiClients\Client\GitHub\Internal\Operator\Issues\CreateMilestone;
use ApiClients\Client\GitHub\Internal\Operator\Issues\DeleteLabel;
use ApiClients\Client\GitHub\Internal\Operator\Issues\DeleteMilestone;
use ApiClients\Client\GitHub\Internal\Operator\Issues\GetEvent;
use ApiClients\Client\GitHub\Internal\Operator\Issues\GetLabel;
use ApiClients\Client\GitHub\Internal\Operator\Issues\GetMilestone;
use ApiClients\Client\GitHub\Internal\Operator\Issues\ListAssignees;
use ApiClients\Client\GitHub\Internal\Operator\Issues\ListCommentsForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Issues\ListEvents;
use ApiClients\Client\GitHub\Internal\Operator\Issues\ListEventsForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Issues\ListEventsForTimeline;
use ApiClients\Client\GitHub\Internal\Operator\Issues\ListForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Issues\ListForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Issues\ListLabelsForMilestone;
use ApiClients\Client\GitHub\Internal\Operator\Issues\ListLabelsForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Issues\ListLabelsOnIssue;
use ApiClients\Client\GitHub\Internal\Operator\Issues\ListMilestones;
use ApiClients\Client\GitHub\Internal\Operator\Issues\ListSubIssues;
use ApiClients\Client\GitHub\Internal\Operator\Issues\Lock;
use ApiClients\Client\GitHub\Internal\Operator\Issues\RemoveAllLabels;
use ApiClients\Client\GitHub\Internal\Operator\Issues\RemoveAssignees;
use ApiClients\Client\GitHub\Internal\Operator\Issues\RemoveLabel;
use ApiClients\Client\GitHub\Internal\Operator\Issues\RemoveSubIssue;
use ApiClients\Client\GitHub\Internal\Operator\Issues\ReprioritizeSubIssue;
use ApiClients\Client\GitHub\Internal\Operator\Issues\SetLabels;
use ApiClients\Client\GitHub\Internal\Operator\Issues\Unlock;
use ApiClients\Client\GitHub\Internal\Operator\Issues\UpdateLabel;
use ApiClients\Client\GitHub\Internal\Operator\Issues\UpdateMilestone;
use ApiClients\Client\GitHub\Internal\Operator\Licenses\GetAllCommonlyUsed;
use ApiClients\Client\GitHub\Internal\Operator\Licenses\GetForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Markdown\Render;
use ApiClients\Client\GitHub\Internal\Operator\Markdown\RenderRaw;
use ApiClients\Client\GitHub\Internal\Operator\Meta\GetAllVersions;
use ApiClients\Client\GitHub\Internal\Operator\Meta\GetOctocat;
use ApiClients\Client\GitHub\Internal\Operator\Meta\GetZen;
use ApiClients\Client\GitHub\Internal\Operator\Meta\Root;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\CancelImport;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\DeleteArchiveForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\DeleteArchiveForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\DownloadArchiveForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\GetArchiveForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\GetCommitAuthors;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\GetImportStatus;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\GetLargeFiles;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\GetStatusForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\GetStatusForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\ListReposForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\ListReposForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\MapCommitAuthor;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\SetLfsPreference;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\StartForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\StartImport;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\UnlockRepoForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\UnlockRepoForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\UpdateImport;
use ApiClients\Client\GitHub\Internal\Operator\Oidc\GetOidcCustomSubTemplateForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Oidc\UpdateOidcCustomSubTemplateForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\AddSecurityManagerTeam;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\AssignTeamToOrgRole;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\AssignUserToOrgRole;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\BlockUser;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\CancelInvitation;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\CheckBlockedUser;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\CheckMembershipForUser;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\CheckPublicMembershipForUser;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ConvertMemberToOutsideCollaborator;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\CreateInvitation;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\CreateOrUpdateCustomProperties;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\CreateOrUpdateCustomPropertiesValuesForRepos;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\CreateOrUpdateCustomProperty;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\CreateWebhook;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\DeleteWebhook;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\GetAllCustomProperties;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\GetCustomProperty;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\GetMembershipForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\GetMembershipForUser;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\GetOrgRole;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\GetWebhook;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\GetWebhookConfigForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListAppInstallations;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListAttestations;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListBlockedUsers;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListCustomPropertiesValuesForRepos;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListFailedInvitations;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListInvitationTeams;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListMembers;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListMembershipsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListOrgRoles;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListOrgRoleTeams;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListOrgRoleUsers;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListOutsideCollaborators;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListPatGrantRepositories;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListPatGrantRequestRepositories;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListPatGrantRequests;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListPatGrants;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListPendingInvitations;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListPublicMembers;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListSecurityManagerTeams;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ListWebhooks;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\PingWebhook;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\RemoveCustomProperty;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\RemoveMember;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\RemoveMembershipForUser;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\RemoveOutsideCollaborator;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\RemovePublicMembershipForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\RemoveSecurityManagerTeam;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ReviewPatGrantRequest;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\ReviewPatGrantRequestsInBulk;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\RevokeAllOrgRolesTeam;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\RevokeAllOrgRolesUser;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\RevokeOrgRoleTeam;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\RevokeOrgRoleUser;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\SetMembershipForUser;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\SetPublicMembershipForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\UnblockUser;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\UpdateMembershipForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\UpdatePatAccess;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\UpdatePatAccesses;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\UpdateWebhook;
use ApiClients\Client\GitHub\Internal\Operator\Orgs\UpdateWebhookConfigForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Packages\DeletePackageForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Packages\DeletePackageForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Packages\DeletePackageForUser;
use ApiClients\Client\GitHub\Internal\Operator\Packages\DeletePackageVersionForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Packages\DeletePackageVersionForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Packages\DeletePackageVersionForUser;
use ApiClients\Client\GitHub\Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrg;
use ApiClients\Client\GitHub\Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByUser;
use ApiClients\Client\GitHub\Internal\Operator\Packages\GetPackageForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Packages\GetPackageForOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Packages\GetPackageForUser;
use ApiClients\Client\GitHub\Internal\Operator\Packages\GetPackageVersionForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Packages\GetPackageVersionForOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Packages\GetPackageVersionForUser;
use ApiClients\Client\GitHub\Internal\Operator\Packages\ListDockerMigrationConflictingPackagesForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Packages\ListDockerMigrationConflictingPackagesForOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Packages\ListDockerMigrationConflictingPackagesForUser;
use ApiClients\Client\GitHub\Internal\Operator\Packages\ListPackagesForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Packages\ListPackagesForOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Packages\ListPackagesForUser;
use ApiClients\Client\GitHub\Internal\Operator\Packages\RestorePackageForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Packages\RestorePackageForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Packages\RestorePackageForUser;
use ApiClients\Client\GitHub\Internal\Operator\Packages\RestorePackageVersionForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Packages\RestorePackageVersionForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Packages\RestorePackageVersionForUser;
use ApiClients\Client\GitHub\Internal\Operator\Projects\AddCollaborator;
use ApiClients\Client\GitHub\Internal\Operator\Projects\CreateCard;
use ApiClients\Client\GitHub\Internal\Operator\Projects\CreateColumn;
use ApiClients\Client\GitHub\Internal\Operator\Projects\CreateForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Projects\CreateForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Projects\DeleteCard;
use ApiClients\Client\GitHub\Internal\Operator\Projects\DeleteColumn;
use ApiClients\Client\GitHub\Internal\Operator\Projects\GetCard;
use ApiClients\Client\GitHub\Internal\Operator\Projects\GetColumn;
use ApiClients\Client\GitHub\Internal\Operator\Projects\GetPermissionForUser;
use ApiClients\Client\GitHub\Internal\Operator\Projects\ListCards;
use ApiClients\Client\GitHub\Internal\Operator\Projects\ListCollaborators;
use ApiClients\Client\GitHub\Internal\Operator\Projects\ListColumns;
use ApiClients\Client\GitHub\Internal\Operator\Projects\MoveCard;
use ApiClients\Client\GitHub\Internal\Operator\Projects\MoveColumn;
use ApiClients\Client\GitHub\Internal\Operator\Projects\RemoveCollaborator;
use ApiClients\Client\GitHub\Internal\Operator\Projects\UpdateCard;
use ApiClients\Client\GitHub\Internal\Operator\Projects\UpdateColumn;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\CheckIfMerged;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\CreateReplyForReviewComment;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\CreateReview;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\CreateReviewComment;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\DeletePendingReview;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\DeleteReviewComment;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\DismissReview;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\GetReview;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\GetReviewComment;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\ListCommentsForReview;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\ListFiles;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\ListRequestedReviewers;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\ListReviewComments;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\ListReviewCommentsForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\ListReviews;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\RemoveRequestedReviewers;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\RequestReviewers;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\SubmitReview;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\UpdateBranch;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\UpdateReview;
use ApiClients\Client\GitHub\Internal\Operator\Pulls\UpdateReviewComment;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\CreateForCommitComment;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\CreateForIssue;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\CreateForIssueComment;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\CreateForPullRequestReviewComment;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\CreateForRelease;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\CreateForTeamDiscussionCommentInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\CreateForTeamDiscussionCommentLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\CreateForTeamDiscussionInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\CreateForTeamDiscussionLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\DeleteForCommitComment;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\DeleteForIssue;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\DeleteForIssueComment;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\DeleteForPullRequestComment;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\DeleteForRelease;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\DeleteForTeamDiscussion;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\DeleteForTeamDiscussionComment;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\ListForCommitComment;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\ListForIssue;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\ListForIssueComment;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\ListForPullRequestReviewComment;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\ListForRelease;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\ListForTeamDiscussionCommentInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\ListForTeamDiscussionCommentLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\ListForTeamDiscussionInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Reactions\ListForTeamDiscussionLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Repos\AcceptInvitationForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Repos\AddAppAccessRestrictions;
use ApiClients\Client\GitHub\Internal\Operator\Repos\AddStatusCheckContexts;
use ApiClients\Client\GitHub\Internal\Operator\Repos\AddTeamAccessRestrictions;
use ApiClients\Client\GitHub\Internal\Operator\Repos\AddUserAccessRestrictions;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CancelPagesDeployment;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CheckAutomatedSecurityFixes;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CheckCollaborator;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CheckPrivateVulnerabilityReporting;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CheckVulnerabilityAlerts;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CodeownersErrors;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CompareCommits;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateAttestation;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateAutolink;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateCommitComment;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateCommitSignatureProtection;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateCommitStatus;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateDeployKey;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateDeployment;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateDeploymentBranchPolicy;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateDeploymentProtectionRule;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateDeploymentStatus;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateDispatchEvent;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateFork;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateOrgRuleset;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateOrUpdateCustomPropertiesValues;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateOrUpdateEnvironment;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateOrUpdateFileContents;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreatePagesDeployment;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreatePagesSite;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateRelease;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateRepoRuleset;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateTagProtection;
use ApiClients\Client\GitHub\Internal\Operator\Repos\CreateUsingTemplate;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeclineInvitationForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteAccessRestrictions;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteAdminBranchProtection;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteAnEnvironment;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteAutolink;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteBranchProtection;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteCommitComment;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteCommitSignatureProtection;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteDeployKey;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteDeployment;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteDeploymentBranchPolicy;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteFile;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteInvitation;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteOrgRuleset;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeletePagesSite;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeletePullRequestReviewProtection;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteRelease;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteReleaseAsset;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteRepoRuleset;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteTagProtection;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DisableAutomatedSecurityFixes;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DisableDeploymentProtectionRule;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DisablePrivateVulnerabilityReporting;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DisableVulnerabilityAlerts;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DownloadTarballArchive;
use ApiClients\Client\GitHub\Internal\Operator\Repos\DownloadZipballArchive;
use ApiClients\Client\GitHub\Internal\Operator\Repos\EnableAutomatedSecurityFixes;
use ApiClients\Client\GitHub\Internal\Operator\Repos\EnablePrivateVulnerabilityReporting;
use ApiClients\Client\GitHub\Internal\Operator\Repos\EnableVulnerabilityAlerts;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GenerateReleaseNotes;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetAccessRestrictions;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetAdminBranchProtection;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetAllDeploymentProtectionRules;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetAllEnvironments;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetAllStatusCheckContexts;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetAllTopics;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetAppsWithAccessToProtectedBranch;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetAutolink;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetBranch;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetBranchProtection;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetBranchRules;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetClones;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetCodeFrequencyStats;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetCollaboratorPermissionLevel;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetCombinedStatusForRef;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetCommit;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetCommitActivityStats;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetCommitComment;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetCommitSignatureProtection;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetCommunityProfileMetrics;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetContent;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetContributorsStats;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetCustomDeploymentProtectionRule;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetCustomPropertiesValues;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetDeployKey;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetDeployment;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetDeploymentBranchPolicy;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetDeploymentStatus;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetEnvironment;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetLatestPagesBuild;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetLatestRelease;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetOrgRuleset;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetOrgRulesets;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetOrgRuleSuite;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetOrgRuleSuites;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetPages;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetPagesBuild;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetPagesDeployment;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetPagesHealthCheck;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetParticipationStats;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetPullRequestReviewProtection;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetPunchCardStats;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetReadme;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetReadmeInDirectory;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetRelease;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetReleaseAsset;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetReleaseByTag;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetRepoRuleset;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetRepoRulesets;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetRepoRuleSuite;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetRepoRuleSuites;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetStatusChecksProtection;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetTeamsWithAccessToProtectedBranch;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetTopPaths;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetTopReferrers;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetUsersWithAccessToProtectedBranch;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetViews;
use ApiClients\Client\GitHub\Internal\Operator\Repos\GetWebhookConfigForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListActivities;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListAutolinks;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListBranches;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListBranchesForHeadCommit;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListCommentsForCommit;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListCommitCommentsForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListCommitStatusesForRef;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListContributors;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListCustomDeploymentRuleIntegrations;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListDeployKeys;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListDeploymentBranchPolicies;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListDeployments;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListDeploymentStatuses;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListInvitations;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListInvitationsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListLanguages;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListPagesBuilds;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListPullRequestsAssociatedWithCommit;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListReleaseAssets;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListReleases;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListTagProtection;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListTags;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ListTeams;
use ApiClients\Client\GitHub\Internal\Operator\Repos\Merge;
use ApiClients\Client\GitHub\Internal\Operator\Repos\MergeUpstream;
use ApiClients\Client\GitHub\Internal\Operator\Repos\RemoveAppAccessRestrictions;
use ApiClients\Client\GitHub\Internal\Operator\Repos\RemoveStatusCheckContexts;
use ApiClients\Client\GitHub\Internal\Operator\Repos\RemoveStatusCheckProtection;
use ApiClients\Client\GitHub\Internal\Operator\Repos\RemoveTeamAccessRestrictions;
use ApiClients\Client\GitHub\Internal\Operator\Repos\RemoveUserAccessRestrictions;
use ApiClients\Client\GitHub\Internal\Operator\Repos\RenameBranch;
use ApiClients\Client\GitHub\Internal\Operator\Repos\ReplaceAllTopics;
use ApiClients\Client\GitHub\Internal\Operator\Repos\RequestPagesBuild;
use ApiClients\Client\GitHub\Internal\Operator\Repos\SetAdminBranchProtection;
use ApiClients\Client\GitHub\Internal\Operator\Repos\SetAppAccessRestrictions;
use ApiClients\Client\GitHub\Internal\Operator\Repos\SetStatusCheckContexts;
use ApiClients\Client\GitHub\Internal\Operator\Repos\SetTeamAccessRestrictions;
use ApiClients\Client\GitHub\Internal\Operator\Repos\SetUserAccessRestrictions;
use ApiClients\Client\GitHub\Internal\Operator\Repos\TestPushWebhook;
use ApiClients\Client\GitHub\Internal\Operator\Repos\Transfer;
use ApiClients\Client\GitHub\Internal\Operator\Repos\UpdateBranchProtection;
use ApiClients\Client\GitHub\Internal\Operator\Repos\UpdateCommitComment;
use ApiClients\Client\GitHub\Internal\Operator\Repos\UpdateDeploymentBranchPolicy;
use ApiClients\Client\GitHub\Internal\Operator\Repos\UpdateInformationAboutPagesSite;
use ApiClients\Client\GitHub\Internal\Operator\Repos\UpdateInvitation;
use ApiClients\Client\GitHub\Internal\Operator\Repos\UpdateOrgRuleset;
use ApiClients\Client\GitHub\Internal\Operator\Repos\UpdatePullRequestReviewProtection;
use ApiClients\Client\GitHub\Internal\Operator\Repos\UpdateRelease;
use ApiClients\Client\GitHub\Internal\Operator\Repos\UpdateReleaseAsset;
use ApiClients\Client\GitHub\Internal\Operator\Repos\UpdateRepoRuleset;
use ApiClients\Client\GitHub\Internal\Operator\Repos\UpdateStatusCheckProtection;
use ApiClients\Client\GitHub\Internal\Operator\Repos\UpdateWebhookConfigForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Repos\UploadReleaseAsset;
use ApiClients\Client\GitHub\Internal\Operator\Search\Code;
use ApiClients\Client\GitHub\Internal\Operator\Search\Commits;
use ApiClients\Client\GitHub\Internal\Operator\Search\IssuesAndPullRequests;
use ApiClients\Client\GitHub\Internal\Operator\Search\Labels;
use ApiClients\Client\GitHub\Internal\Operator\Search\Repos;
use ApiClients\Client\GitHub\Internal\Operator\Search\Topics;
use ApiClients\Client\GitHub\Internal\Operator\Search\Users;
use ApiClients\Client\GitHub\Internal\Operator\SecretScanning\CreatePushProtectionBypass;
use ApiClients\Client\GitHub\Internal\Operator\SecretScanning\GetScanHistory;
use ApiClients\Client\GitHub\Internal\Operator\SecretScanning\ListLocationsForAlert;
use ApiClients\Client\GitHub\Internal\Operator\SecurityAdvisories\CreatePrivateVulnerabilityReport;
use ApiClients\Client\GitHub\Internal\Operator\SecurityAdvisories\CreateRepositoryAdvisory;
use ApiClients\Client\GitHub\Internal\Operator\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest;
use ApiClients\Client\GitHub\Internal\Operator\SecurityAdvisories\GetGlobalAdvisory;
use ApiClients\Client\GitHub\Internal\Operator\SecurityAdvisories\GetRepositoryAdvisory;
use ApiClients\Client\GitHub\Internal\Operator\SecurityAdvisories\ListGlobalAdvisories;
use ApiClients\Client\GitHub\Internal\Operator\SecurityAdvisories\ListOrgRepositoryAdvisories;
use ApiClients\Client\GitHub\Internal\Operator\SecurityAdvisories\ListRepositoryAdvisories;
use ApiClients\Client\GitHub\Internal\Operator\SecurityAdvisories\UpdateRepositoryAdvisory;
use ApiClients\Client\GitHub\Internal\Operator\Teams\AddMemberLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\AddOrUpdateMembershipForUserInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\AddOrUpdateMembershipForUserLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\AddOrUpdateProjectPermissionsInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\AddOrUpdateProjectPermissionsLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\AddOrUpdateRepoPermissionsInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\AddOrUpdateRepoPermissionsLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\CheckPermissionsForProjectInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\CheckPermissionsForProjectLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\CheckPermissionsForRepoInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\CheckPermissionsForRepoLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\CreateDiscussionCommentInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\CreateDiscussionCommentLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\CreateDiscussionInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\CreateDiscussionLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\DeleteDiscussionCommentInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\DeleteDiscussionCommentLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\DeleteDiscussionInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\DeleteDiscussionLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\DeleteInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\DeleteLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\GetByName;
use ApiClients\Client\GitHub\Internal\Operator\Teams\GetDiscussionCommentInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\GetDiscussionCommentLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\GetDiscussionInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\GetDiscussionLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\GetLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\GetMemberLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\GetMembershipForUserInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\GetMembershipForUserLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\ListChildInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\ListChildLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\ListDiscussionCommentsInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\ListDiscussionCommentsLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\ListDiscussionsInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\ListDiscussionsLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\ListMembersInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\ListMembersLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\ListPendingInvitationsInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\ListPendingInvitationsLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\ListProjectsInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\ListProjectsLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\ListReposInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\ListReposLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\RemoveMemberLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\RemoveMembershipForUserInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\RemoveMembershipForUserLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\RemoveProjectInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\RemoveProjectLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\RemoveRepoInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\RemoveRepoLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\UpdateDiscussionCommentInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\UpdateDiscussionCommentLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\UpdateDiscussionInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\UpdateDiscussionLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Teams\UpdateInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Teams\UpdateLegacy;
use ApiClients\Client\GitHub\Internal\Operator\Users\AddEmailForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\AddSocialAccountForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\Block;
use ApiClients\Client\GitHub\Internal\Operator\Users\CheckBlocked;
use ApiClients\Client\GitHub\Internal\Operator\Users\CheckFollowingForUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\CheckPersonIsFollowedByAuthenticated;
use ApiClients\Client\GitHub\Internal\Operator\Users\CreateGpgKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\CreatePublicSshKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\CreateSshSigningKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\DeleteEmailForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\DeleteGpgKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\DeletePublicSshKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\DeleteSocialAccountForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\DeleteSshSigningKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\Follow;
use ApiClients\Client\GitHub\Internal\Operator\Users\GetById;
use ApiClients\Client\GitHub\Internal\Operator\Users\GetByUsername;
use ApiClients\Client\GitHub\Internal\Operator\Users\GetContextForUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\GetGpgKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\GetPublicSshKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\GetSshSigningKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListBlockedByAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListEmailsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListFollowedByAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListFollowersForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListFollowersForUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListFollowingForUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListGpgKeysForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListGpgKeysForUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListPublicEmailsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListPublicKeysForUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListSocialAccountsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListSocialAccountsForUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListSshSigningKeysForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListSshSigningKeysForUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\SetPrimaryEmailVisibilityForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\Unblock;
use ApiClients\Client\GitHub\Internal\Operator\Users\Unfollow;
use ApiClients\Client\GitHub\Internal\Operator\Users\UpdateAuthenticated;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

final class Operators
{
    private Root|null $meta👷Root                                                                                                                    = null;
    private ListGlobalAdvisories|null $securityAdvisories👷ListGlobalAdvisories                                                                      = null;
    private GetGlobalAdvisory|null $securityAdvisories👷GetGlobalAdvisory                                                                            = null;
    private GetAuthenticated|null $apps👷GetAuthenticated                                                                                            = null;
    private CreateFromManifest|null $apps👷CreateFromManifest                                                                                        = null;
    private GetWebhookConfigForApp|null $apps👷GetWebhookConfigForApp                                                                                = null;
    private UpdateWebhookConfigForApp|null $apps👷UpdateWebhookConfigForApp                                                                          = null;
    private ListWebhookDeliveries|null $apps👷ListWebhookDeliveries                                                                                  = null;
    private GetWebhookDelivery|null $apps👷GetWebhookDelivery                                                                                        = null;
    private RedeliverWebhookDelivery|null $apps👷RedeliverWebhookDelivery                                                                            = null;
    private ListInstallationRequestsForAuthenticatedApp|null $apps👷ListInstallationRequestsForAuthenticatedApp                                      = null;
    private ListInstallations|null $apps👷ListInstallations                                                                                          = null;
    private GetInstallation|null $apps👷GetInstallation                                                                                              = null;
    private DeleteInstallation|null $apps👷DeleteInstallation                                                                                        = null;
    private CreateInstallationAccessToken|null $apps👷CreateInstallationAccessToken                                                                  = null;
    private SuspendInstallation|null $apps👷SuspendInstallation                                                                                      = null;
    private UnsuspendInstallation|null $apps👷UnsuspendInstallation                                                                                  = null;
    private DeleteAuthorization|null $apps👷DeleteAuthorization                                                                                      = null;
    private CheckToken|null $apps👷CheckToken                                                                                                        = null;
    private DeleteToken|null $apps👷DeleteToken                                                                                                      = null;
    private ResetToken|null $apps👷ResetToken                                                                                                        = null;
    private ScopeToken|null $apps👷ScopeToken                                                                                                        = null;
    private GetBySlug|null $apps👷GetBySlug                                                                                                          = null;
    private GetAnAssignment|null $classroom👷GetAnAssignment                                                                                         = null;
    private ListAcceptedAssignmentsForAnAssignment|null $classroom👷ListAcceptedAssignmentsForAnAssignment                                           = null;
    private GetAssignmentGrades|null $classroom👷GetAssignmentGrades                                                                                 = null;
    private ListClassrooms|null $classroom👷ListClassrooms                                                                                           = null;
    private GetAClassroom|null $classroom👷GetAClassroom                                                                                             = null;
    private ListAssignmentsForAClassroom|null $classroom👷ListAssignmentsForAClassroom                                                               = null;
    private GetAllCodesOfConduct|null $codesOfConduct👷GetAllCodesOfConduct                                                                          = null;
    private GetConductCode|null $codesOfConduct👷GetConductCode                                                                                      = null;
    private Get|null $emojis👷Get                                                                                                                    = null;
    private ListCopilotSeatsForEnterprise|null $copilot👷ListCopilotSeatsForEnterprise                                                               = null;
    private CopilotMetricsForEnterprise|null $copilot👷CopilotMetricsForEnterprise                                                                   = null;
    private UsageMetricsForEnterprise|null $copilot👷UsageMetricsForEnterprise                                                                       = null;
    private ListAlertsForEnterprise|null $dependabot👷ListAlertsForEnterprise                                                                        = null;
    private \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\ListAlertsForEnterprise|null $secretScanning👷ListAlertsForEnterprise         = null;
    private CopilotMetricsForEnterpriseTeam|null $copilot👷CopilotMetricsForEnterpriseTeam                                                           = null;
    private UsageMetricsForEnterpriseTeam|null $copilot👷UsageMetricsForEnterpriseTeam                                                               = null;
    private ListPublicEvents|null $activity👷ListPublicEvents                                                                                        = null;
    private GetFeeds|null $activity👷GetFeeds                                                                                                        = null;
    private List_|null $gists👷List_                                                                                                                 = null;
    private Create|null $gists👷Create                                                                                                               = null;
    private ListPublic|null $gists👷ListPublic                                                                                                       = null;
    private ListStarred|null $gists👷ListStarred                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Gists\Get|null $gists👷Get                                                                   = null;
    private Delete|null $gists👷Delete                                                                                                               = null;
    private Update|null $gists👷Update                                                                                                               = null;
    private ListComments|null $gists👷ListComments                                                                                                   = null;
    private CreateComment|null $gists👷CreateComment                                                                                                 = null;
    private GetComment|null $gists👷GetComment                                                                                                       = null;
    private DeleteComment|null $gists👷DeleteComment                                                                                                 = null;
    private UpdateComment|null $gists👷UpdateComment                                                                                                 = null;
    private ListCommits|null $gists👷ListCommits                                                                                                     = null;
    private ListForks|null $gists👷ListForks                                                                                                         = null;
    private Fork|null $gists👷Fork                                                                                                                   = null;
    private CheckIsStarred|null $gists👷CheckIsStarred                                                                                               = null;
    private Star|null $gists👷Star                                                                                                                   = null;
    private Unstar|null $gists👷Unstar                                                                                                               = null;
    private GetRevision|null $gists👷GetRevision                                                                                                     = null;
    private GetAllTemplates|null $gitignore👷GetAllTemplates                                                                                         = null;
    private GetTemplate|null $gitignore👷GetTemplate                                                                                                 = null;
    private ListReposAccessibleToInstallation|null $apps👷ListReposAccessibleToInstallation                                                          = null;
    private RevokeInstallationAccessToken|null $apps👷RevokeInstallationAccessToken                                                                  = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Issues\List_|null $issues👷List_                                                             = null;
    private GetAllCommonlyUsed|null $licenses👷GetAllCommonlyUsed                                                                                    = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Licenses\Get|null $licenses👷Get                                                             = null;
    private Render|null $markdown👷Render                                                                                                            = null;
    private RenderRaw|null $markdown👷RenderRaw                                                                                                      = null;
    private GetSubscriptionPlanForAccount|null $apps👷GetSubscriptionPlanForAccount                                                                  = null;
    private ListPlans|null $apps👷ListPlans                                                                                                          = null;
    private ListAccountsForPlan|null $apps👷ListAccountsForPlan                                                                                      = null;
    private GetSubscriptionPlanForAccountStubbed|null $apps👷GetSubscriptionPlanForAccountStubbed                                                    = null;
    private ListPlansStubbed|null $apps👷ListPlansStubbed                                                                                            = null;
    private ListAccountsForPlanStubbed|null $apps👷ListAccountsForPlanStubbed                                                                        = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Meta\Get|null $meta👷Get                                                                     = null;
    private ListPublicEventsForRepoNetwork|null $activity👷ListPublicEventsForRepoNetwork                                                            = null;
    private ListNotificationsForAuthenticatedUser|null $activity👷ListNotificationsForAuthenticatedUser                                              = null;
    private MarkNotificationsAsRead|null $activity👷MarkNotificationsAsRead                                                                          = null;
    private GetThread|null $activity👷GetThread                                                                                                      = null;
    private MarkThreadAsDone|null $activity👷MarkThreadAsDone                                                                                        = null;
    private MarkThreadAsRead|null $activity👷MarkThreadAsRead                                                                                        = null;
    private GetThreadSubscriptionForAuthenticatedUser|null $activity👷GetThreadSubscriptionForAuthenticatedUser                                      = null;
    private SetThreadSubscription|null $activity👷SetThreadSubscription                                                                              = null;
    private DeleteThreadSubscription|null $activity👷DeleteThreadSubscription                                                                        = null;
    private GetOctocat|null $meta👷GetOctocat                                                                                                        = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Orgs\List_|null $orgs👷List_                                                                 = null;
    private GetGithubBillingUsageReportOrg|null $billing👷GetGithubBillingUsageReportOrg                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Orgs\Get|null $orgs👷Get                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Orgs\Delete|null $orgs👷Delete                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Orgs\Update|null $orgs👷Update                                                               = null;
    private GetActionsCacheUsageForOrg|null $actions👷GetActionsCacheUsageForOrg                                                                     = null;
    private GetActionsCacheUsageByRepoForOrg|null $actions👷GetActionsCacheUsageByRepoForOrg                                                         = null;
    private GetOidcCustomSubTemplateForOrg|null $oidc👷GetOidcCustomSubTemplateForOrg                                                                = null;
    private UpdateOidcCustomSubTemplateForOrg|null $oidc👷UpdateOidcCustomSubTemplateForOrg                                                          = null;
    private GetGithubActionsPermissionsOrganization|null $actions👷GetGithubActionsPermissionsOrganization                                           = null;
    private SetGithubActionsPermissionsOrganization|null $actions👷SetGithubActionsPermissionsOrganization                                           = null;
    private ListSelectedRepositoriesEnabledGithubActionsOrganization|null $actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization         = null;
    private SetSelectedRepositoriesEnabledGithubActionsOrganization|null $actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization           = null;
    private EnableSelectedRepositoryGithubActionsOrganization|null $actions👷EnableSelectedRepositoryGithubActionsOrganization                       = null;
    private DisableSelectedRepositoryGithubActionsOrganization|null $actions👷DisableSelectedRepositoryGithubActionsOrganization                     = null;
    private GetAllowedActionsOrganization|null $actions👷GetAllowedActionsOrganization                                                               = null;
    private SetAllowedActionsOrganization|null $actions👷SetAllowedActionsOrganization                                                               = null;
    private GetGithubActionsDefaultWorkflowPermissionsOrganization|null $actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization             = null;
    private SetGithubActionsDefaultWorkflowPermissionsOrganization|null $actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization             = null;
    private ListSelfHostedRunnerGroupsForOrg|null $actions👷ListSelfHostedRunnerGroupsForOrg                                                         = null;
    private CreateSelfHostedRunnerGroupForOrg|null $actions👷CreateSelfHostedRunnerGroupForOrg                                                       = null;
    private GetSelfHostedRunnerGroupForOrg|null $actions👷GetSelfHostedRunnerGroupForOrg                                                             = null;
    private DeleteSelfHostedRunnerGroupFromOrg|null $actions👷DeleteSelfHostedRunnerGroupFromOrg                                                     = null;
    private UpdateSelfHostedRunnerGroupForOrg|null $actions👷UpdateSelfHostedRunnerGroupForOrg                                                       = null;
    private ListRepoAccessToSelfHostedRunnerGroupInOrg|null $actions👷ListRepoAccessToSelfHostedRunnerGroupInOrg                                     = null;
    private SetRepoAccessToSelfHostedRunnerGroupInOrg|null $actions👷SetRepoAccessToSelfHostedRunnerGroupInOrg                                       = null;
    private AddRepoAccessToSelfHostedRunnerGroupInOrg|null $actions👷AddRepoAccessToSelfHostedRunnerGroupInOrg                                       = null;
    private RemoveRepoAccessToSelfHostedRunnerGroupInOrg|null $actions👷RemoveRepoAccessToSelfHostedRunnerGroupInOrg                                 = null;
    private ListSelfHostedRunnersInGroupForOrg|null $actions👷ListSelfHostedRunnersInGroupForOrg                                                     = null;
    private SetSelfHostedRunnersInGroupForOrg|null $actions👷SetSelfHostedRunnersInGroupForOrg                                                       = null;
    private AddSelfHostedRunnerToGroupForOrg|null $actions👷AddSelfHostedRunnerToGroupForOrg                                                         = null;
    private RemoveSelfHostedRunnerFromGroupForOrg|null $actions👷RemoveSelfHostedRunnerFromGroupForOrg                                               = null;
    private ListSelfHostedRunnersForOrg|null $actions👷ListSelfHostedRunnersForOrg                                                                   = null;
    private ListRunnerApplicationsForOrg|null $actions👷ListRunnerApplicationsForOrg                                                                 = null;
    private GenerateRunnerJitconfigForOrg|null $actions👷GenerateRunnerJitconfigForOrg                                                               = null;
    private CreateRegistrationTokenForOrg|null $actions👷CreateRegistrationTokenForOrg                                                               = null;
    private CreateRemoveTokenForOrg|null $actions👷CreateRemoveTokenForOrg                                                                           = null;
    private GetSelfHostedRunnerForOrg|null $actions👷GetSelfHostedRunnerForOrg                                                                       = null;
    private DeleteSelfHostedRunnerFromOrg|null $actions👷DeleteSelfHostedRunnerFromOrg                                                               = null;
    private ListLabelsForSelfHostedRunnerForOrg|null $actions👷ListLabelsForSelfHostedRunnerForOrg                                                   = null;
    private SetCustomLabelsForSelfHostedRunnerForOrg|null $actions👷SetCustomLabelsForSelfHostedRunnerForOrg                                         = null;
    private AddCustomLabelsToSelfHostedRunnerForOrg|null $actions👷AddCustomLabelsToSelfHostedRunnerForOrg                                           = null;
    private RemoveAllCustomLabelsFromSelfHostedRunnerForOrg|null $actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForOrg                           = null;
    private RemoveCustomLabelFromSelfHostedRunnerForOrg|null $actions👷RemoveCustomLabelFromSelfHostedRunnerForOrg                                   = null;
    private ListOrgSecrets|null $actions👷ListOrgSecrets                                                                                             = null;
    private GetOrgPublicKey|null $actions👷GetOrgPublicKey                                                                                           = null;
    private GetOrgSecret|null $actions👷GetOrgSecret                                                                                                 = null;
    private CreateOrUpdateOrgSecret|null $actions👷CreateOrUpdateOrgSecret                                                                           = null;
    private DeleteOrgSecret|null $actions👷DeleteOrgSecret                                                                                           = null;
    private ListSelectedReposForOrgSecret|null $actions👷ListSelectedReposForOrgSecret                                                               = null;
    private SetSelectedReposForOrgSecret|null $actions👷SetSelectedReposForOrgSecret                                                                 = null;
    private AddSelectedRepoToOrgSecret|null $actions👷AddSelectedRepoToOrgSecret                                                                     = null;
    private RemoveSelectedRepoFromOrgSecret|null $actions👷RemoveSelectedRepoFromOrgSecret                                                           = null;
    private ListOrgVariables|null $actions👷ListOrgVariables                                                                                         = null;
    private CreateOrgVariable|null $actions👷CreateOrgVariable                                                                                       = null;
    private GetOrgVariable|null $actions👷GetOrgVariable                                                                                             = null;
    private DeleteOrgVariable|null $actions👷DeleteOrgVariable                                                                                       = null;
    private UpdateOrgVariable|null $actions👷UpdateOrgVariable                                                                                       = null;
    private ListSelectedReposForOrgVariable|null $actions👷ListSelectedReposForOrgVariable                                                           = null;
    private SetSelectedReposForOrgVariable|null $actions👷SetSelectedReposForOrgVariable                                                             = null;
    private AddSelectedRepoToOrgVariable|null $actions👷AddSelectedRepoToOrgVariable                                                                 = null;
    private RemoveSelectedRepoFromOrgVariable|null $actions👷RemoveSelectedRepoFromOrgVariable                                                       = null;
    private ListAttestations|null $orgs👷ListAttestations                                                                                            = null;
    private ListBlockedUsers|null $orgs👷ListBlockedUsers                                                                                            = null;
    private CheckBlockedUser|null $orgs👷CheckBlockedUser                                                                                            = null;
    private BlockUser|null $orgs👷BlockUser                                                                                                          = null;
    private UnblockUser|null $orgs👷UnblockUser                                                                                                      = null;
    private ListAlertsForOrg|null $codeScanning👷ListAlertsForOrg                                                                                    = null;
    private GetConfigurationsForOrg|null $codeSecurity👷GetConfigurationsForOrg                                                                      = null;
    private CreateConfiguration|null $codeSecurity👷CreateConfiguration                                                                              = null;
    private GetDefaultConfigurations|null $codeSecurity👷GetDefaultConfigurations                                                                    = null;
    private DetachConfiguration|null $codeSecurity👷DetachConfiguration                                                                              = null;
    private GetConfiguration|null $codeSecurity👷GetConfiguration                                                                                    = null;
    private DeleteConfiguration|null $codeSecurity👷DeleteConfiguration                                                                              = null;
    private UpdateConfiguration|null $codeSecurity👷UpdateConfiguration                                                                              = null;
    private AttachConfiguration|null $codeSecurity👷AttachConfiguration                                                                              = null;
    private SetConfigurationAsDefault|null $codeSecurity👷SetConfigurationAsDefault                                                                  = null;
    private GetRepositoriesForConfiguration|null $codeSecurity👷GetRepositoriesForConfiguration                                                      = null;
    private ListInOrganization|null $codespaces👷ListInOrganization                                                                                  = null;
    private SetCodespacesAccess|null $codespaces👷SetCodespacesAccess                                                                                = null;
    private SetCodespacesAccessUsers|null $codespaces👷SetCodespacesAccessUsers                                                                      = null;
    private DeleteCodespacesAccessUsers|null $codespaces👷DeleteCodespacesAccessUsers                                                                = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Codespaces\ListOrgSecrets|null $codespaces👷ListOrgSecrets                                   = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetOrgPublicKey|null $codespaces👷GetOrgPublicKey                                 = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetOrgSecret|null $codespaces👷GetOrgSecret                                       = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Codespaces\CreateOrUpdateOrgSecret|null $codespaces👷CreateOrUpdateOrgSecret                 = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Codespaces\DeleteOrgSecret|null $codespaces👷DeleteOrgSecret                                 = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Codespaces\ListSelectedReposForOrgSecret|null $codespaces👷ListSelectedReposForOrgSecret     = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Codespaces\SetSelectedReposForOrgSecret|null $codespaces👷SetSelectedReposForOrgSecret       = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Codespaces\AddSelectedRepoToOrgSecret|null $codespaces👷AddSelectedRepoToOrgSecret           = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Codespaces\RemoveSelectedRepoFromOrgSecret|null $codespaces👷RemoveSelectedRepoFromOrgSecret = null;
    private GetCopilotOrganizationDetails|null $copilot👷GetCopilotOrganizationDetails                                                               = null;
    private ListCopilotSeats|null $copilot👷ListCopilotSeats                                                                                         = null;
    private AddCopilotSeatsForTeams|null $copilot👷AddCopilotSeatsForTeams                                                                           = null;
    private CancelCopilotSeatAssignmentForTeams|null $copilot👷CancelCopilotSeatAssignmentForTeams                                                   = null;
    private AddCopilotSeatsForUsers|null $copilot👷AddCopilotSeatsForUsers                                                                           = null;
    private CancelCopilotSeatAssignmentForUsers|null $copilot👷CancelCopilotSeatAssignmentForUsers                                                   = null;
    private CopilotMetricsForOrganization|null $copilot👷CopilotMetricsForOrganization                                                               = null;
    private UsageMetricsForOrg|null $copilot👷UsageMetricsForOrg                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListAlertsForOrg|null $dependabot👷ListAlertsForOrg                               = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListOrgSecrets|null $dependabot👷ListOrgSecrets                                   = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetOrgPublicKey|null $dependabot👷GetOrgPublicKey                                 = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetOrgSecret|null $dependabot👷GetOrgSecret                                       = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Dependabot\CreateOrUpdateOrgSecret|null $dependabot👷CreateOrUpdateOrgSecret                 = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Dependabot\DeleteOrgSecret|null $dependabot👷DeleteOrgSecret                                 = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListSelectedReposForOrgSecret|null $dependabot👷ListSelectedReposForOrgSecret     = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Dependabot\SetSelectedReposForOrgSecret|null $dependabot👷SetSelectedReposForOrgSecret       = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Dependabot\AddSelectedRepoToOrgSecret|null $dependabot👷AddSelectedRepoToOrgSecret           = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Dependabot\RemoveSelectedRepoFromOrgSecret|null $dependabot👷RemoveSelectedRepoFromOrgSecret = null;
    private ListDockerMigrationConflictingPackagesForOrganization|null $packages👷ListDockerMigrationConflictingPackagesForOrganization              = null;
    private ListPublicOrgEvents|null $activity👷ListPublicOrgEvents                                                                                  = null;
    private ListFailedInvitations|null $orgs👷ListFailedInvitations                                                                                  = null;
    private ListWebhooks|null $orgs👷ListWebhooks                                                                                                    = null;
    private CreateWebhook|null $orgs👷CreateWebhook                                                                                                  = null;
    private GetWebhook|null $orgs👷GetWebhook                                                                                                        = null;
    private DeleteWebhook|null $orgs👷DeleteWebhook                                                                                                  = null;
    private UpdateWebhook|null $orgs👷UpdateWebhook                                                                                                  = null;
    private GetWebhookConfigForOrg|null $orgs👷GetWebhookConfigForOrg                                                                                = null;
    private UpdateWebhookConfigForOrg|null $orgs👷UpdateWebhookConfigForOrg                                                                          = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Orgs\ListWebhookDeliveries|null $orgs👷ListWebhookDeliveries                                 = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Orgs\GetWebhookDelivery|null $orgs👷GetWebhookDelivery                                       = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Orgs\RedeliverWebhookDelivery|null $orgs👷RedeliverWebhookDelivery                           = null;
    private PingWebhook|null $orgs👷PingWebhook                                                                                                      = null;
    private GetRouteStatsByActor|null $apiInsights👷GetRouteStatsByActor                                                                             = null;
    private GetSubjectStats|null $apiInsights👷GetSubjectStats                                                                                       = null;
    private GetSummaryStats|null $apiInsights👷GetSummaryStats                                                                                       = null;
    private GetSummaryStatsByUser|null $apiInsights👷GetSummaryStatsByUser                                                                           = null;
    private GetSummaryStatsByActor|null $apiInsights👷GetSummaryStatsByActor                                                                         = null;
    private GetTimeStats|null $apiInsights👷GetTimeStats                                                                                             = null;
    private GetTimeStatsByUser|null $apiInsights👷GetTimeStatsByUser                                                                                 = null;
    private GetTimeStatsByActor|null $apiInsights👷GetTimeStatsByActor                                                                               = null;
    private GetUserStats|null $apiInsights👷GetUserStats                                                                                             = null;
    private GetOrgInstallation|null $apps👷GetOrgInstallation                                                                                        = null;
    private ListAppInstallations|null $orgs👷ListAppInstallations                                                                                    = null;
    private GetRestrictionsForOrg|null $interactions👷GetRestrictionsForOrg                                                                          = null;
    private SetRestrictionsForOrg|null $interactions👷SetRestrictionsForOrg                                                                          = null;
    private RemoveRestrictionsForOrg|null $interactions👷RemoveRestrictionsForOrg                                                                    = null;
    private ListPendingInvitations|null $orgs👷ListPendingInvitations                                                                                = null;
    private CreateInvitation|null $orgs👷CreateInvitation                                                                                            = null;
    private CancelInvitation|null $orgs👷CancelInvitation                                                                                            = null;
    private ListInvitationTeams|null $orgs👷ListInvitationTeams                                                                                      = null;
    private ListForOrg|null $issues👷ListForOrg                                                                                                      = null;
    private ListMembers|null $orgs👷ListMembers                                                                                                      = null;
    private CheckMembershipForUser|null $orgs👷CheckMembershipForUser                                                                                = null;
    private RemoveMember|null $orgs👷RemoveMember                                                                                                    = null;
    private GetCodespacesForUserInOrg|null $codespaces👷GetCodespacesForUserInOrg                                                                    = null;
    private DeleteFromOrganization|null $codespaces👷DeleteFromOrganization                                                                          = null;
    private StopInOrganization|null $codespaces👷StopInOrganization                                                                                  = null;
    private GetCopilotSeatDetailsForUser|null $copilot👷GetCopilotSeatDetailsForUser                                                                 = null;
    private GetMembershipForUser|null $orgs👷GetMembershipForUser                                                                                    = null;
    private SetMembershipForUser|null $orgs👷SetMembershipForUser                                                                                    = null;
    private RemoveMembershipForUser|null $orgs👷RemoveMembershipForUser                                                                              = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Migrations\ListForOrg|null $migrations👷ListForOrg                                           = null;
    private StartForOrg|null $migrations👷StartForOrg                                                                                                = null;
    private GetStatusForOrg|null $migrations👷GetStatusForOrg                                                                                        = null;
    private DownloadArchiveForOrg|null $migrations👷DownloadArchiveForOrg                                                                            = null;
    private DeleteArchiveForOrg|null $migrations👷DeleteArchiveForOrg                                                                                = null;
    private UnlockRepoForOrg|null $migrations👷UnlockRepoForOrg                                                                                      = null;
    private ListReposForOrg|null $migrations👷ListReposForOrg                                                                                        = null;
    private ListOrgRoles|null $orgs👷ListOrgRoles                                                                                                    = null;
    private RevokeAllOrgRolesTeam|null $orgs👷RevokeAllOrgRolesTeam                                                                                  = null;
    private AssignTeamToOrgRole|null $orgs👷AssignTeamToOrgRole                                                                                      = null;
    private RevokeOrgRoleTeam|null $orgs👷RevokeOrgRoleTeam                                                                                          = null;
    private RevokeAllOrgRolesUser|null $orgs👷RevokeAllOrgRolesUser                                                                                  = null;
    private AssignUserToOrgRole|null $orgs👷AssignUserToOrgRole                                                                                      = null;
    private RevokeOrgRoleUser|null $orgs👷RevokeOrgRoleUser                                                                                          = null;
    private GetOrgRole|null $orgs👷GetOrgRole                                                                                                        = null;
    private ListOrgRoleTeams|null $orgs👷ListOrgRoleTeams                                                                                            = null;
    private ListOrgRoleUsers|null $orgs👷ListOrgRoleUsers                                                                                            = null;
    private ListOutsideCollaborators|null $orgs👷ListOutsideCollaborators                                                                            = null;
    private ConvertMemberToOutsideCollaborator|null $orgs👷ConvertMemberToOutsideCollaborator                                                        = null;
    private RemoveOutsideCollaborator|null $orgs👷RemoveOutsideCollaborator                                                                          = null;
    private ListPackagesForOrganization|null $packages👷ListPackagesForOrganization                                                                  = null;
    private GetPackageForOrganization|null $packages👷GetPackageForOrganization                                                                      = null;
    private DeletePackageForOrg|null $packages👷DeletePackageForOrg                                                                                  = null;
    private RestorePackageForOrg|null $packages👷RestorePackageForOrg                                                                                = null;
    private GetAllPackageVersionsForPackageOwnedByOrg|null $packages👷GetAllPackageVersionsForPackageOwnedByOrg                                      = null;
    private GetPackageVersionForOrganization|null $packages👷GetPackageVersionForOrganization                                                        = null;
    private DeletePackageVersionForOrg|null $packages👷DeletePackageVersionForOrg                                                                    = null;
    private RestorePackageVersionForOrg|null $packages👷RestorePackageVersionForOrg                                                                  = null;
    private ListPatGrantRequests|null $orgs👷ListPatGrantRequests                                                                                    = null;
    private ReviewPatGrantRequestsInBulk|null $orgs👷ReviewPatGrantRequestsInBulk                                                                    = null;
    private ReviewPatGrantRequest|null $orgs👷ReviewPatGrantRequest                                                                                  = null;
    private ListPatGrantRequestRepositories|null $orgs👷ListPatGrantRequestRepositories                                                              = null;
    private ListPatGrants|null $orgs👷ListPatGrants                                                                                                  = null;
    private UpdatePatAccesses|null $orgs👷UpdatePatAccesses                                                                                          = null;
    private UpdatePatAccess|null $orgs👷UpdatePatAccess                                                                                              = null;
    private ListPatGrantRepositories|null $orgs👷ListPatGrantRepositories                                                                            = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Projects\ListForOrg|null $projects👷ListForOrg                                               = null;
    private CreateForOrg|null $projects👷CreateForOrg                                                                                                = null;
    private GetAllCustomProperties|null $orgs👷GetAllCustomProperties                                                                                = null;
    private CreateOrUpdateCustomProperties|null $orgs👷CreateOrUpdateCustomProperties                                                                = null;
    private GetCustomProperty|null $orgs👷GetCustomProperty                                                                                          = null;
    private CreateOrUpdateCustomProperty|null $orgs👷CreateOrUpdateCustomProperty                                                                    = null;
    private RemoveCustomProperty|null $orgs👷RemoveCustomProperty                                                                                    = null;
    private ListCustomPropertiesValuesForRepos|null $orgs👷ListCustomPropertiesValuesForRepos                                                        = null;
    private CreateOrUpdateCustomPropertiesValuesForRepos|null $orgs👷CreateOrUpdateCustomPropertiesValuesForRepos                                    = null;
    private ListPublicMembers|null $orgs👷ListPublicMembers                                                                                          = null;
    private CheckPublicMembershipForUser|null $orgs👷CheckPublicMembershipForUser                                                                    = null;
    private SetPublicMembershipForAuthenticatedUser|null $orgs👷SetPublicMembershipForAuthenticatedUser                                              = null;
    private RemovePublicMembershipForAuthenticatedUser|null $orgs👷RemovePublicMembershipForAuthenticatedUser                                        = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\ListForOrg|null $repos👷ListForOrg                                                     = null;
    private CreateInOrg|null $repos👷CreateInOrg                                                                                                     = null;
    private GetOrgRulesets|null $repos👷GetOrgRulesets                                                                                               = null;
    private CreateOrgRuleset|null $repos👷CreateOrgRuleset                                                                                           = null;
    private GetOrgRuleSuites|null $repos👷GetOrgRuleSuites                                                                                           = null;
    private GetOrgRuleSuite|null $repos👷GetOrgRuleSuite                                                                                             = null;
    private GetOrgRuleset|null $repos👷GetOrgRuleset                                                                                                 = null;
    private UpdateOrgRuleset|null $repos👷UpdateOrgRuleset                                                                                           = null;
    private DeleteOrgRuleset|null $repos👷DeleteOrgRuleset                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\ListAlertsForOrg|null $secretScanning👷ListAlertsForOrg                       = null;
    private ListOrgRepositoryAdvisories|null $securityAdvisories👷ListOrgRepositoryAdvisories                                                        = null;
    private ListSecurityManagerTeams|null $orgs👷ListSecurityManagerTeams                                                                            = null;
    private AddSecurityManagerTeam|null $orgs👷AddSecurityManagerTeam                                                                                = null;
    private RemoveSecurityManagerTeam|null $orgs👷RemoveSecurityManagerTeam                                                                          = null;
    private GetGithubActionsBillingOrg|null $billing👷GetGithubActionsBillingOrg                                                                     = null;
    private GetGithubPackagesBillingOrg|null $billing👷GetGithubPackagesBillingOrg                                                                   = null;
    private GetSharedStorageBillingOrg|null $billing👷GetSharedStorageBillingOrg                                                                     = null;
    private CopilotMetricsForTeam|null $copilot👷CopilotMetricsForTeam                                                                               = null;
    private UsageMetricsForTeam|null $copilot👷UsageMetricsForTeam                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Teams\List_|null $teams👷List_                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Teams\Create|null $teams👷Create                                                             = null;
    private GetByName|null $teams👷GetByName                                                                                                         = null;
    private DeleteInOrg|null $teams👷DeleteInOrg                                                                                                     = null;
    private UpdateInOrg|null $teams👷UpdateInOrg                                                                                                     = null;
    private ListDiscussionsInOrg|null $teams👷ListDiscussionsInOrg                                                                                   = null;
    private CreateDiscussionInOrg|null $teams👷CreateDiscussionInOrg                                                                                 = null;
    private GetDiscussionInOrg|null $teams👷GetDiscussionInOrg                                                                                       = null;
    private DeleteDiscussionInOrg|null $teams👷DeleteDiscussionInOrg                                                                                 = null;
    private UpdateDiscussionInOrg|null $teams👷UpdateDiscussionInOrg                                                                                 = null;
    private ListDiscussionCommentsInOrg|null $teams👷ListDiscussionCommentsInOrg                                                                     = null;
    private CreateDiscussionCommentInOrg|null $teams👷CreateDiscussionCommentInOrg                                                                   = null;
    private GetDiscussionCommentInOrg|null $teams👷GetDiscussionCommentInOrg                                                                         = null;
    private DeleteDiscussionCommentInOrg|null $teams👷DeleteDiscussionCommentInOrg                                                                   = null;
    private UpdateDiscussionCommentInOrg|null $teams👷UpdateDiscussionCommentInOrg                                                                   = null;
    private ListForTeamDiscussionCommentInOrg|null $reactions👷ListForTeamDiscussionCommentInOrg                                                     = null;
    private CreateForTeamDiscussionCommentInOrg|null $reactions👷CreateForTeamDiscussionCommentInOrg                                                 = null;
    private DeleteForTeamDiscussionComment|null $reactions👷DeleteForTeamDiscussionComment                                                           = null;
    private ListForTeamDiscussionInOrg|null $reactions👷ListForTeamDiscussionInOrg                                                                   = null;
    private CreateForTeamDiscussionInOrg|null $reactions👷CreateForTeamDiscussionInOrg                                                               = null;
    private DeleteForTeamDiscussion|null $reactions👷DeleteForTeamDiscussion                                                                         = null;
    private ListPendingInvitationsInOrg|null $teams👷ListPendingInvitationsInOrg                                                                     = null;
    private ListMembersInOrg|null $teams👷ListMembersInOrg                                                                                           = null;
    private GetMembershipForUserInOrg|null $teams👷GetMembershipForUserInOrg                                                                         = null;
    private AddOrUpdateMembershipForUserInOrg|null $teams👷AddOrUpdateMembershipForUserInOrg                                                         = null;
    private RemoveMembershipForUserInOrg|null $teams👷RemoveMembershipForUserInOrg                                                                   = null;
    private ListProjectsInOrg|null $teams👷ListProjectsInOrg                                                                                         = null;
    private CheckPermissionsForProjectInOrg|null $teams👷CheckPermissionsForProjectInOrg                                                             = null;
    private AddOrUpdateProjectPermissionsInOrg|null $teams👷AddOrUpdateProjectPermissionsInOrg                                                       = null;
    private RemoveProjectInOrg|null $teams👷RemoveProjectInOrg                                                                                       = null;
    private ListReposInOrg|null $teams👷ListReposInOrg                                                                                               = null;
    private CheckPermissionsForRepoInOrg|null $teams👷CheckPermissionsForRepoInOrg                                                                   = null;
    private AddOrUpdateRepoPermissionsInOrg|null $teams👷AddOrUpdateRepoPermissionsInOrg                                                             = null;
    private RemoveRepoInOrg|null $teams👷RemoveRepoInOrg                                                                                             = null;
    private ListChildInOrg|null $teams👷ListChildInOrg                                                                                               = null;
    private EnableOrDisableSecurityProductOnAllOrgRepos|null $orgs👷EnableOrDisableSecurityProductOnAllOrgRepos                                      = null;
    private GetCard|null $projects👷GetCard                                                                                                          = null;
    private DeleteCard|null $projects👷DeleteCard                                                                                                    = null;
    private UpdateCard|null $projects👷UpdateCard                                                                                                    = null;
    private MoveCard|null $projects👷MoveCard                                                                                                        = null;
    private GetColumn|null $projects👷GetColumn                                                                                                      = null;
    private DeleteColumn|null $projects👷DeleteColumn                                                                                                = null;
    private UpdateColumn|null $projects👷UpdateColumn                                                                                                = null;
    private ListCards|null $projects👷ListCards                                                                                                      = null;
    private CreateCard|null $projects👷CreateCard                                                                                                    = null;
    private MoveColumn|null $projects👷MoveColumn                                                                                                    = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Projects\Get|null $projects👷Get                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Projects\Delete|null $projects👷Delete                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Projects\Update|null $projects👷Update                                                       = null;
    private ListCollaborators|null $projects👷ListCollaborators                                                                                      = null;
    private AddCollaborator|null $projects👷AddCollaborator                                                                                          = null;
    private RemoveCollaborator|null $projects👷RemoveCollaborator                                                                                    = null;
    private GetPermissionForUser|null $projects👷GetPermissionForUser                                                                                = null;
    private ListColumns|null $projects👷ListColumns                                                                                                  = null;
    private CreateColumn|null $projects👷CreateColumn                                                                                                = null;
    private \ApiClients\Client\GitHub\Internal\Operator\RateLimit\Get|null $rateLimit👷Get                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\Get|null $repos👷Get                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\Delete|null $repos👷Delete                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\Update|null $repos👷Update                                                             = null;
    private ListArtifactsForRepo|null $actions👷ListArtifactsForRepo                                                                                 = null;
    private GetArtifact|null $actions👷GetArtifact                                                                                                   = null;
    private DeleteArtifact|null $actions👷DeleteArtifact                                                                                             = null;
    private DownloadArtifact|null $actions👷DownloadArtifact                                                                                         = null;
    private GetActionsCacheUsage|null $actions👷GetActionsCacheUsage                                                                                 = null;
    private GetActionsCacheList|null $actions👷GetActionsCacheList                                                                                   = null;
    private DeleteActionsCacheByKey|null $actions👷DeleteActionsCacheByKey                                                                           = null;
    private DeleteActionsCacheById|null $actions👷DeleteActionsCacheById                                                                             = null;
    private GetJobForWorkflowRun|null $actions👷GetJobForWorkflowRun                                                                                 = null;
    private DownloadJobLogsForWorkflowRun|null $actions👷DownloadJobLogsForWorkflowRun                                                               = null;
    private ReRunJobForWorkflowRun|null $actions👷ReRunJobForWorkflowRun                                                                             = null;
    private GetCustomOidcSubClaimForRepo|null $actions👷GetCustomOidcSubClaimForRepo                                                                 = null;
    private SetCustomOidcSubClaimForRepo|null $actions👷SetCustomOidcSubClaimForRepo                                                                 = null;
    private ListRepoOrganizationSecrets|null $actions👷ListRepoOrganizationSecrets                                                                   = null;
    private ListRepoOrganizationVariables|null $actions👷ListRepoOrganizationVariables                                                               = null;
    private GetGithubActionsPermissionsRepository|null $actions👷GetGithubActionsPermissionsRepository                                               = null;
    private SetGithubActionsPermissionsRepository|null $actions👷SetGithubActionsPermissionsRepository                                               = null;
    private GetWorkflowAccessToRepository|null $actions👷GetWorkflowAccessToRepository                                                               = null;
    private SetWorkflowAccessToRepository|null $actions👷SetWorkflowAccessToRepository                                                               = null;
    private GetAllowedActionsRepository|null $actions👷GetAllowedActionsRepository                                                                   = null;
    private SetAllowedActionsRepository|null $actions👷SetAllowedActionsRepository                                                                   = null;
    private GetGithubActionsDefaultWorkflowPermissionsRepository|null $actions👷GetGithubActionsDefaultWorkflowPermissionsRepository                 = null;
    private SetGithubActionsDefaultWorkflowPermissionsRepository|null $actions👷SetGithubActionsDefaultWorkflowPermissionsRepository                 = null;
    private ListSelfHostedRunnersForRepo|null $actions👷ListSelfHostedRunnersForRepo                                                                 = null;
    private ListRunnerApplicationsForRepo|null $actions👷ListRunnerApplicationsForRepo                                                               = null;
    private GenerateRunnerJitconfigForRepo|null $actions👷GenerateRunnerJitconfigForRepo                                                             = null;
    private CreateRegistrationTokenForRepo|null $actions👷CreateRegistrationTokenForRepo                                                             = null;
    private CreateRemoveTokenForRepo|null $actions👷CreateRemoveTokenForRepo                                                                         = null;
    private GetSelfHostedRunnerForRepo|null $actions👷GetSelfHostedRunnerForRepo                                                                     = null;
    private DeleteSelfHostedRunnerFromRepo|null $actions👷DeleteSelfHostedRunnerFromRepo                                                             = null;
    private ListLabelsForSelfHostedRunnerForRepo|null $actions👷ListLabelsForSelfHostedRunnerForRepo                                                 = null;
    private SetCustomLabelsForSelfHostedRunnerForRepo|null $actions👷SetCustomLabelsForSelfHostedRunnerForRepo                                       = null;
    private AddCustomLabelsToSelfHostedRunnerForRepo|null $actions👷AddCustomLabelsToSelfHostedRunnerForRepo                                         = null;
    private RemoveAllCustomLabelsFromSelfHostedRunnerForRepo|null $actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForRepo                         = null;
    private RemoveCustomLabelFromSelfHostedRunnerForRepo|null $actions👷RemoveCustomLabelFromSelfHostedRunnerForRepo                                 = null;
    private ListWorkflowRunsForRepo|null $actions👷ListWorkflowRunsForRepo                                                                           = null;
    private GetWorkflowRun|null $actions👷GetWorkflowRun                                                                                             = null;
    private DeleteWorkflowRun|null $actions👷DeleteWorkflowRun                                                                                       = null;
    private GetReviewsForRun|null $actions👷GetReviewsForRun                                                                                         = null;
    private ApproveWorkflowRun|null $actions👷ApproveWorkflowRun                                                                                     = null;
    private ListWorkflowRunArtifacts|null $actions👷ListWorkflowRunArtifacts                                                                         = null;
    private GetWorkflowRunAttempt|null $actions👷GetWorkflowRunAttempt                                                                               = null;
    private ListJobsForWorkflowRunAttempt|null $actions👷ListJobsForWorkflowRunAttempt                                                               = null;
    private DownloadWorkflowRunAttemptLogs|null $actions👷DownloadWorkflowRunAttemptLogs                                                             = null;
    private CancelWorkflowRun|null $actions👷CancelWorkflowRun                                                                                       = null;
    private ReviewCustomGatesForRun|null $actions👷ReviewCustomGatesForRun                                                                           = null;
    private ForceCancelWorkflowRun|null $actions👷ForceCancelWorkflowRun                                                                             = null;
    private ListJobsForWorkflowRun|null $actions👷ListJobsForWorkflowRun                                                                             = null;
    private DownloadWorkflowRunLogs|null $actions👷DownloadWorkflowRunLogs                                                                           = null;
    private DeleteWorkflowRunLogs|null $actions👷DeleteWorkflowRunLogs                                                                               = null;
    private GetPendingDeploymentsForRun|null $actions👷GetPendingDeploymentsForRun                                                                   = null;
    private ReviewPendingDeploymentsForRun|null $actions👷ReviewPendingDeploymentsForRun                                                             = null;
    private ReRunWorkflow|null $actions👷ReRunWorkflow                                                                                               = null;
    private ReRunWorkflowFailedJobs|null $actions👷ReRunWorkflowFailedJobs                                                                           = null;
    private GetWorkflowRunUsage|null $actions👷GetWorkflowRunUsage                                                                                   = null;
    private ListRepoSecrets|null $actions👷ListRepoSecrets                                                                                           = null;
    private GetRepoPublicKey|null $actions👷GetRepoPublicKey                                                                                         = null;
    private GetRepoSecret|null $actions👷GetRepoSecret                                                                                               = null;
    private CreateOrUpdateRepoSecret|null $actions👷CreateOrUpdateRepoSecret                                                                         = null;
    private DeleteRepoSecret|null $actions👷DeleteRepoSecret                                                                                         = null;
    private ListRepoVariables|null $actions👷ListRepoVariables                                                                                       = null;
    private CreateRepoVariable|null $actions👷CreateRepoVariable                                                                                     = null;
    private GetRepoVariable|null $actions👷GetRepoVariable                                                                                           = null;
    private DeleteRepoVariable|null $actions👷DeleteRepoVariable                                                                                     = null;
    private UpdateRepoVariable|null $actions👷UpdateRepoVariable                                                                                     = null;
    private ListRepoWorkflows|null $actions👷ListRepoWorkflows                                                                                       = null;
    private GetWorkflow|null $actions👷GetWorkflow                                                                                                   = null;
    private DisableWorkflow|null $actions👷DisableWorkflow                                                                                           = null;
    private CreateWorkflowDispatch|null $actions👷CreateWorkflowDispatch                                                                             = null;
    private EnableWorkflow|null $actions👷EnableWorkflow                                                                                             = null;
    private ListWorkflowRuns|null $actions👷ListWorkflowRuns                                                                                         = null;
    private GetWorkflowUsage|null $actions👷GetWorkflowUsage                                                                                         = null;
    private ListActivities|null $repos👷ListActivities                                                                                               = null;
    private ListAssignees|null $issues👷ListAssignees                                                                                                = null;
    private CheckUserCanBeAssigned|null $issues👷CheckUserCanBeAssigned                                                                              = null;
    private CreateAttestation|null $repos👷CreateAttestation                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\ListAttestations|null $repos👷ListAttestations                                         = null;
    private ListAutolinks|null $repos👷ListAutolinks                                                                                                 = null;
    private CreateAutolink|null $repos👷CreateAutolink                                                                                               = null;
    private GetAutolink|null $repos👷GetAutolink                                                                                                     = null;
    private DeleteAutolink|null $repos👷DeleteAutolink                                                                                               = null;
    private CheckAutomatedSecurityFixes|null $repos👷CheckAutomatedSecurityFixes                                                                     = null;
    private EnableAutomatedSecurityFixes|null $repos👷EnableAutomatedSecurityFixes                                                                   = null;
    private DisableAutomatedSecurityFixes|null $repos👷DisableAutomatedSecurityFixes                                                                 = null;
    private ListBranches|null $repos👷ListBranches                                                                                                   = null;
    private GetBranch|null $repos👷GetBranch                                                                                                         = null;
    private GetBranchProtection|null $repos👷GetBranchProtection                                                                                     = null;
    private UpdateBranchProtection|null $repos👷UpdateBranchProtection                                                                               = null;
    private DeleteBranchProtection|null $repos👷DeleteBranchProtection                                                                               = null;
    private GetAdminBranchProtection|null $repos👷GetAdminBranchProtection                                                                           = null;
    private SetAdminBranchProtection|null $repos👷SetAdminBranchProtection                                                                           = null;
    private DeleteAdminBranchProtection|null $repos👷DeleteAdminBranchProtection                                                                     = null;
    private GetPullRequestReviewProtection|null $repos👷GetPullRequestReviewProtection                                                               = null;
    private DeletePullRequestReviewProtection|null $repos👷DeletePullRequestReviewProtection                                                         = null;
    private UpdatePullRequestReviewProtection|null $repos👷UpdatePullRequestReviewProtection                                                         = null;
    private GetCommitSignatureProtection|null $repos👷GetCommitSignatureProtection                                                                   = null;
    private CreateCommitSignatureProtection|null $repos👷CreateCommitSignatureProtection                                                             = null;
    private DeleteCommitSignatureProtection|null $repos👷DeleteCommitSignatureProtection                                                             = null;
    private GetStatusChecksProtection|null $repos👷GetStatusChecksProtection                                                                         = null;
    private RemoveStatusCheckProtection|null $repos👷RemoveStatusCheckProtection                                                                     = null;
    private UpdateStatusCheckProtection|null $repos👷UpdateStatusCheckProtection                                                                     = null;
    private GetAllStatusCheckContexts|null $repos👷GetAllStatusCheckContexts                                                                         = null;
    private SetStatusCheckContexts|null $repos👷SetStatusCheckContexts                                                                               = null;
    private AddStatusCheckContexts|null $repos👷AddStatusCheckContexts                                                                               = null;
    private RemoveStatusCheckContexts|null $repos👷RemoveStatusCheckContexts                                                                         = null;
    private GetAccessRestrictions|null $repos👷GetAccessRestrictions                                                                                 = null;
    private DeleteAccessRestrictions|null $repos👷DeleteAccessRestrictions                                                                           = null;
    private GetAppsWithAccessToProtectedBranch|null $repos👷GetAppsWithAccessToProtectedBranch                                                       = null;
    private SetAppAccessRestrictions|null $repos👷SetAppAccessRestrictions                                                                           = null;
    private AddAppAccessRestrictions|null $repos👷AddAppAccessRestrictions                                                                           = null;
    private RemoveAppAccessRestrictions|null $repos👷RemoveAppAccessRestrictions                                                                     = null;
    private GetTeamsWithAccessToProtectedBranch|null $repos👷GetTeamsWithAccessToProtectedBranch                                                     = null;
    private SetTeamAccessRestrictions|null $repos👷SetTeamAccessRestrictions                                                                         = null;
    private AddTeamAccessRestrictions|null $repos👷AddTeamAccessRestrictions                                                                         = null;
    private RemoveTeamAccessRestrictions|null $repos👷RemoveTeamAccessRestrictions                                                                   = null;
    private GetUsersWithAccessToProtectedBranch|null $repos👷GetUsersWithAccessToProtectedBranch                                                     = null;
    private SetUserAccessRestrictions|null $repos👷SetUserAccessRestrictions                                                                         = null;
    private AddUserAccessRestrictions|null $repos👷AddUserAccessRestrictions                                                                         = null;
    private RemoveUserAccessRestrictions|null $repos👷RemoveUserAccessRestrictions                                                                   = null;
    private RenameBranch|null $repos👷RenameBranch                                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Checks\Create|null $checks👷Create                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Checks\Get|null $checks👷Get                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Checks\Update|null $checks👷Update                                                           = null;
    private ListAnnotations|null $checks👷ListAnnotations                                                                                            = null;
    private RerequestRun|null $checks👷RerequestRun                                                                                                  = null;
    private CreateSuite|null $checks👷CreateSuite                                                                                                    = null;
    private SetSuitesPreferences|null $checks👷SetSuitesPreferences                                                                                  = null;
    private GetSuite|null $checks👷GetSuite                                                                                                          = null;
    private ListForSuite|null $checks👷ListForSuite                                                                                                  = null;
    private RerequestSuite|null $checks👷RerequestSuite                                                                                              = null;
    private ListAlertsForRepo|null $codeScanning👷ListAlertsForRepo                                                                                  = null;
    private GetAlert|null $codeScanning👷GetAlert                                                                                                    = null;
    private UpdateAlert|null $codeScanning👷UpdateAlert                                                                                              = null;
    private ListAlertInstances|null $codeScanning👷ListAlertInstances                                                                                = null;
    private ListRecentAnalyses|null $codeScanning👷ListRecentAnalyses                                                                                = null;
    private GetAnalysis|null $codeScanning👷GetAnalysis                                                                                              = null;
    private DeleteAnalysis|null $codeScanning👷DeleteAnalysis                                                                                        = null;
    private ListCodeqlDatabases|null $codeScanning👷ListCodeqlDatabases                                                                              = null;
    private GetCodeqlDatabase|null $codeScanning👷GetCodeqlDatabase                                                                                  = null;
    private DeleteCodeqlDatabase|null $codeScanning👷DeleteCodeqlDatabase                                                                            = null;
    private CreateVariantAnalysis|null $codeScanning👷CreateVariantAnalysis                                                                          = null;
    private GetVariantAnalysis|null $codeScanning👷GetVariantAnalysis                                                                                = null;
    private GetVariantAnalysisRepoTask|null $codeScanning👷GetVariantAnalysisRepoTask                                                                = null;
    private GetDefaultSetup|null $codeScanning👷GetDefaultSetup                                                                                      = null;
    private UpdateDefaultSetup|null $codeScanning👷UpdateDefaultSetup                                                                                = null;
    private UploadSarif|null $codeScanning👷UploadSarif                                                                                              = null;
    private GetSarif|null $codeScanning👷GetSarif                                                                                                    = null;
    private GetConfigurationForRepository|null $codeSecurity👷GetConfigurationForRepository                                                          = null;
    private CodeownersErrors|null $repos👷CodeownersErrors                                                                                           = null;
    private ListInRepositoryForAuthenticatedUser|null $codespaces👷ListInRepositoryForAuthenticatedUser                                              = null;
    private CreateWithRepoForAuthenticatedUser|null $codespaces👷CreateWithRepoForAuthenticatedUser                                                  = null;
    private ListDevcontainersInRepositoryForAuthenticatedUser|null $codespaces👷ListDevcontainersInRepositoryForAuthenticatedUser                    = null;
    private RepoMachinesForAuthenticatedUser|null $codespaces👷RepoMachinesForAuthenticatedUser                                                      = null;
    private PreFlightWithRepoForAuthenticatedUser|null $codespaces👷PreFlightWithRepoForAuthenticatedUser                                            = null;
    private CheckPermissionsForDevcontainer|null $codespaces👷CheckPermissionsForDevcontainer                                                        = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Codespaces\ListRepoSecrets|null $codespaces👷ListRepoSecrets                                 = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetRepoPublicKey|null $codespaces👷GetRepoPublicKey                               = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetRepoSecret|null $codespaces👷GetRepoSecret                                     = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Codespaces\CreateOrUpdateRepoSecret|null $codespaces👷CreateOrUpdateRepoSecret               = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Codespaces\DeleteRepoSecret|null $codespaces👷DeleteRepoSecret                               = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\ListCollaborators|null $repos👷ListCollaborators                                       = null;
    private CheckCollaborator|null $repos👷CheckCollaborator                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\AddCollaborator|null $repos👷AddCollaborator                                           = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\RemoveCollaborator|null $repos👷RemoveCollaborator                                     = null;
    private GetCollaboratorPermissionLevel|null $repos👷GetCollaboratorPermissionLevel                                                               = null;
    private ListCommitCommentsForRepo|null $repos👷ListCommitCommentsForRepo                                                                         = null;
    private GetCommitComment|null $repos👷GetCommitComment                                                                                           = null;
    private DeleteCommitComment|null $repos👷DeleteCommitComment                                                                                     = null;
    private UpdateCommitComment|null $repos👷UpdateCommitComment                                                                                     = null;
    private ListForCommitComment|null $reactions👷ListForCommitComment                                                                               = null;
    private CreateForCommitComment|null $reactions👷CreateForCommitComment                                                                           = null;
    private DeleteForCommitComment|null $reactions👷DeleteForCommitComment                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\ListCommits|null $repos👷ListCommits                                                   = null;
    private ListBranchesForHeadCommit|null $repos👷ListBranchesForHeadCommit                                                                         = null;
    private ListCommentsForCommit|null $repos👷ListCommentsForCommit                                                                                 = null;
    private CreateCommitComment|null $repos👷CreateCommitComment                                                                                     = null;
    private ListPullRequestsAssociatedWithCommit|null $repos👷ListPullRequestsAssociatedWithCommit                                                   = null;
    private GetCommit|null $repos👷GetCommit                                                                                                         = null;
    private ListForRef|null $checks👷ListForRef                                                                                                      = null;
    private ListSuitesForRef|null $checks👷ListSuitesForRef                                                                                          = null;
    private GetCombinedStatusForRef|null $repos👷GetCombinedStatusForRef                                                                             = null;
    private ListCommitStatusesForRef|null $repos👷ListCommitStatusesForRef                                                                           = null;
    private GetCommunityProfileMetrics|null $repos👷GetCommunityProfileMetrics                                                                       = null;
    private CompareCommits|null $repos👷CompareCommits                                                                                               = null;
    private GetContent|null $repos👷GetContent                                                                                                       = null;
    private CreateOrUpdateFileContents|null $repos👷CreateOrUpdateFileContents                                                                       = null;
    private DeleteFile|null $repos👷DeleteFile                                                                                                       = null;
    private ListContributors|null $repos👷ListContributors                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListAlertsForRepo|null $dependabot👷ListAlertsForRepo                             = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetAlert|null $dependabot👷GetAlert                                               = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Dependabot\UpdateAlert|null $dependabot👷UpdateAlert                                         = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListRepoSecrets|null $dependabot👷ListRepoSecrets                                 = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetRepoPublicKey|null $dependabot👷GetRepoPublicKey                               = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetRepoSecret|null $dependabot👷GetRepoSecret                                     = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Dependabot\CreateOrUpdateRepoSecret|null $dependabot👷CreateOrUpdateRepoSecret               = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Dependabot\DeleteRepoSecret|null $dependabot👷DeleteRepoSecret                               = null;
    private DiffRange|null $dependencyGraph👷DiffRange                                                                                               = null;
    private ExportSbom|null $dependencyGraph👷ExportSbom                                                                                             = null;
    private CreateRepositorySnapshot|null $dependencyGraph👷CreateRepositorySnapshot                                                                 = null;
    private ListDeployments|null $repos👷ListDeployments                                                                                             = null;
    private CreateDeployment|null $repos👷CreateDeployment                                                                                           = null;
    private GetDeployment|null $repos👷GetDeployment                                                                                                 = null;
    private DeleteDeployment|null $repos👷DeleteDeployment                                                                                           = null;
    private ListDeploymentStatuses|null $repos👷ListDeploymentStatuses                                                                               = null;
    private CreateDeploymentStatus|null $repos👷CreateDeploymentStatus                                                                               = null;
    private GetDeploymentStatus|null $repos👷GetDeploymentStatus                                                                                     = null;
    private CreateDispatchEvent|null $repos👷CreateDispatchEvent                                                                                     = null;
    private GetAllEnvironments|null $repos👷GetAllEnvironments                                                                                       = null;
    private GetEnvironment|null $repos👷GetEnvironment                                                                                               = null;
    private CreateOrUpdateEnvironment|null $repos👷CreateOrUpdateEnvironment                                                                         = null;
    private DeleteAnEnvironment|null $repos👷DeleteAnEnvironment                                                                                     = null;
    private ListDeploymentBranchPolicies|null $repos👷ListDeploymentBranchPolicies                                                                   = null;
    private CreateDeploymentBranchPolicy|null $repos👷CreateDeploymentBranchPolicy                                                                   = null;
    private GetDeploymentBranchPolicy|null $repos👷GetDeploymentBranchPolicy                                                                         = null;
    private UpdateDeploymentBranchPolicy|null $repos👷UpdateDeploymentBranchPolicy                                                                   = null;
    private DeleteDeploymentBranchPolicy|null $repos👷DeleteDeploymentBranchPolicy                                                                   = null;
    private GetAllDeploymentProtectionRules|null $repos👷GetAllDeploymentProtectionRules                                                             = null;
    private CreateDeploymentProtectionRule|null $repos👷CreateDeploymentProtectionRule                                                               = null;
    private ListCustomDeploymentRuleIntegrations|null $repos👷ListCustomDeploymentRuleIntegrations                                                   = null;
    private GetCustomDeploymentProtectionRule|null $repos👷GetCustomDeploymentProtectionRule                                                         = null;
    private DisableDeploymentProtectionRule|null $repos👷DisableDeploymentProtectionRule                                                             = null;
    private ListEnvironmentSecrets|null $actions👷ListEnvironmentSecrets                                                                             = null;
    private GetEnvironmentPublicKey|null $actions👷GetEnvironmentPublicKey                                                                           = null;
    private GetEnvironmentSecret|null $actions👷GetEnvironmentSecret                                                                                 = null;
    private CreateOrUpdateEnvironmentSecret|null $actions👷CreateOrUpdateEnvironmentSecret                                                           = null;
    private DeleteEnvironmentSecret|null $actions👷DeleteEnvironmentSecret                                                                           = null;
    private ListEnvironmentVariables|null $actions👷ListEnvironmentVariables                                                                         = null;
    private CreateEnvironmentVariable|null $actions👷CreateEnvironmentVariable                                                                       = null;
    private GetEnvironmentVariable|null $actions👷GetEnvironmentVariable                                                                             = null;
    private DeleteEnvironmentVariable|null $actions👷DeleteEnvironmentVariable                                                                       = null;
    private UpdateEnvironmentVariable|null $actions👷UpdateEnvironmentVariable                                                                       = null;
    private ListRepoEvents|null $activity👷ListRepoEvents                                                                                            = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\ListForks|null $repos👷ListForks                                                       = null;
    private CreateFork|null $repos👷CreateFork                                                                                                       = null;
    private CreateBlob|null $git👷CreateBlob                                                                                                         = null;
    private GetBlob|null $git👷GetBlob                                                                                                               = null;
    private CreateCommit|null $git👷CreateCommit                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Git\GetCommit|null $git👷GetCommit                                                           = null;
    private ListMatchingRefs|null $git👷ListMatchingRefs                                                                                             = null;
    private GetRef|null $git👷GetRef                                                                                                                 = null;
    private CreateRef|null $git👷CreateRef                                                                                                           = null;
    private DeleteRef|null $git👷DeleteRef                                                                                                           = null;
    private UpdateRef|null $git👷UpdateRef                                                                                                           = null;
    private CreateTag|null $git👷CreateTag                                                                                                           = null;
    private GetTag|null $git👷GetTag                                                                                                                 = null;
    private CreateTree|null $git👷CreateTree                                                                                                         = null;
    private GetTree|null $git👷GetTree                                                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\ListWebhooks|null $repos👷ListWebhooks                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\CreateWebhook|null $repos👷CreateWebhook                                               = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\GetWebhook|null $repos👷GetWebhook                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteWebhook|null $repos👷DeleteWebhook                                               = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\UpdateWebhook|null $repos👷UpdateWebhook                                               = null;
    private GetWebhookConfigForRepo|null $repos👷GetWebhookConfigForRepo                                                                             = null;
    private UpdateWebhookConfigForRepo|null $repos👷UpdateWebhookConfigForRepo                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\ListWebhookDeliveries|null $repos👷ListWebhookDeliveries                               = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\GetWebhookDelivery|null $repos👷GetWebhookDelivery                                     = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\RedeliverWebhookDelivery|null $repos👷RedeliverWebhookDelivery                         = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\PingWebhook|null $repos👷PingWebhook                                                   = null;
    private TestPushWebhook|null $repos👷TestPushWebhook                                                                                             = null;
    private GetImportStatus|null $migrations👷GetImportStatus                                                                                        = null;
    private StartImport|null $migrations👷StartImport                                                                                                = null;
    private CancelImport|null $migrations👷CancelImport                                                                                              = null;
    private UpdateImport|null $migrations👷UpdateImport                                                                                              = null;
    private GetCommitAuthors|null $migrations👷GetCommitAuthors                                                                                      = null;
    private MapCommitAuthor|null $migrations👷MapCommitAuthor                                                                                        = null;
    private GetLargeFiles|null $migrations👷GetLargeFiles                                                                                            = null;
    private SetLfsPreference|null $migrations👷SetLfsPreference                                                                                      = null;
    private GetRepoInstallation|null $apps👷GetRepoInstallation                                                                                      = null;
    private GetRestrictionsForRepo|null $interactions👷GetRestrictionsForRepo                                                                        = null;
    private SetRestrictionsForRepo|null $interactions👷SetRestrictionsForRepo                                                                        = null;
    private RemoveRestrictionsForRepo|null $interactions👷RemoveRestrictionsForRepo                                                                  = null;
    private ListInvitations|null $repos👷ListInvitations                                                                                             = null;
    private DeleteInvitation|null $repos👷DeleteInvitation                                                                                           = null;
    private UpdateInvitation|null $repos👷UpdateInvitation                                                                                           = null;
    private ListForRepo|null $issues👷ListForRepo                                                                                                    = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Issues\Create|null $issues👷Create                                                           = null;
    private ListCommentsForRepo|null $issues👷ListCommentsForRepo                                                                                    = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Issues\GetComment|null $issues👷GetComment                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Issues\DeleteComment|null $issues👷DeleteComment                                             = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Issues\UpdateComment|null $issues👷UpdateComment                                             = null;
    private ListForIssueComment|null $reactions👷ListForIssueComment                                                                                 = null;
    private CreateForIssueComment|null $reactions👷CreateForIssueComment                                                                             = null;
    private DeleteForIssueComment|null $reactions👷DeleteForIssueComment                                                                             = null;
    private ListEventsForRepo|null $issues👷ListEventsForRepo                                                                                        = null;
    private GetEvent|null $issues👷GetEvent                                                                                                          = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Issues\Get|null $issues👷Get                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Issues\Update|null $issues👷Update                                                           = null;
    private AddAssignees|null $issues👷AddAssignees                                                                                                  = null;
    private RemoveAssignees|null $issues👷RemoveAssignees                                                                                            = null;
    private CheckUserCanBeAssignedToIssue|null $issues👷CheckUserCanBeAssignedToIssue                                                                = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Issues\ListComments|null $issues👷ListComments                                               = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Issues\CreateComment|null $issues👷CreateComment                                             = null;
    private ListEvents|null $issues👷ListEvents                                                                                                      = null;
    private ListLabelsOnIssue|null $issues👷ListLabelsOnIssue                                                                                        = null;
    private SetLabels|null $issues👷SetLabels                                                                                                        = null;
    private AddLabels|null $issues👷AddLabels                                                                                                        = null;
    private RemoveAllLabels|null $issues👷RemoveAllLabels                                                                                            = null;
    private RemoveLabel|null $issues👷RemoveLabel                                                                                                    = null;
    private Lock|null $issues👷Lock                                                                                                                  = null;
    private Unlock|null $issues👷Unlock                                                                                                              = null;
    private ListForIssue|null $reactions👷ListForIssue                                                                                               = null;
    private CreateForIssue|null $reactions👷CreateForIssue                                                                                           = null;
    private DeleteForIssue|null $reactions👷DeleteForIssue                                                                                           = null;
    private RemoveSubIssue|null $issues👷RemoveSubIssue                                                                                              = null;
    private ListSubIssues|null $issues👷ListSubIssues                                                                                                = null;
    private AddSubIssue|null $issues👷AddSubIssue                                                                                                    = null;
    private ReprioritizeSubIssue|null $issues👷ReprioritizeSubIssue                                                                                  = null;
    private ListEventsForTimeline|null $issues👷ListEventsForTimeline                                                                                = null;
    private ListDeployKeys|null $repos👷ListDeployKeys                                                                                               = null;
    private CreateDeployKey|null $repos👷CreateDeployKey                                                                                             = null;
    private GetDeployKey|null $repos👷GetDeployKey                                                                                                   = null;
    private DeleteDeployKey|null $repos👷DeleteDeployKey                                                                                             = null;
    private ListLabelsForRepo|null $issues👷ListLabelsForRepo                                                                                        = null;
    private CreateLabel|null $issues👷CreateLabel                                                                                                    = null;
    private GetLabel|null $issues👷GetLabel                                                                                                          = null;
    private DeleteLabel|null $issues👷DeleteLabel                                                                                                    = null;
    private UpdateLabel|null $issues👷UpdateLabel                                                                                                    = null;
    private ListLanguages|null $repos👷ListLanguages                                                                                                 = null;
    private GetForRepo|null $licenses👷GetForRepo                                                                                                    = null;
    private MergeUpstream|null $repos👷MergeUpstream                                                                                                 = null;
    private Merge|null $repos👷Merge                                                                                                                 = null;
    private ListMilestones|null $issues👷ListMilestones                                                                                              = null;
    private CreateMilestone|null $issues👷CreateMilestone                                                                                            = null;
    private GetMilestone|null $issues👷GetMilestone                                                                                                  = null;
    private DeleteMilestone|null $issues👷DeleteMilestone                                                                                            = null;
    private UpdateMilestone|null $issues👷UpdateMilestone                                                                                            = null;
    private ListLabelsForMilestone|null $issues👷ListLabelsForMilestone                                                                              = null;
    private ListRepoNotificationsForAuthenticatedUser|null $activity👷ListRepoNotificationsForAuthenticatedUser                                      = null;
    private MarkRepoNotificationsAsRead|null $activity👷MarkRepoNotificationsAsRead                                                                  = null;
    private GetPages|null $repos👷GetPages                                                                                                           = null;
    private UpdateInformationAboutPagesSite|null $repos👷UpdateInformationAboutPagesSite                                                             = null;
    private CreatePagesSite|null $repos👷CreatePagesSite                                                                                             = null;
    private DeletePagesSite|null $repos👷DeletePagesSite                                                                                             = null;
    private ListPagesBuilds|null $repos👷ListPagesBuilds                                                                                             = null;
    private RequestPagesBuild|null $repos👷RequestPagesBuild                                                                                         = null;
    private GetLatestPagesBuild|null $repos👷GetLatestPagesBuild                                                                                     = null;
    private GetPagesBuild|null $repos👷GetPagesBuild                                                                                                 = null;
    private CreatePagesDeployment|null $repos👷CreatePagesDeployment                                                                                 = null;
    private GetPagesDeployment|null $repos👷GetPagesDeployment                                                                                       = null;
    private CancelPagesDeployment|null $repos👷CancelPagesDeployment                                                                                 = null;
    private GetPagesHealthCheck|null $repos👷GetPagesHealthCheck                                                                                     = null;
    private CheckPrivateVulnerabilityReporting|null $repos👷CheckPrivateVulnerabilityReporting                                                       = null;
    private EnablePrivateVulnerabilityReporting|null $repos👷EnablePrivateVulnerabilityReporting                                                     = null;
    private DisablePrivateVulnerabilityReporting|null $repos👷DisablePrivateVulnerabilityReporting                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Projects\ListForRepo|null $projects👷ListForRepo                                             = null;
    private CreateForRepo|null $projects👷CreateForRepo                                                                                              = null;
    private GetCustomPropertiesValues|null $repos👷GetCustomPropertiesValues                                                                         = null;
    private CreateOrUpdateCustomPropertiesValues|null $repos👷CreateOrUpdateCustomPropertiesValues                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Pulls\List_|null $pulls👷List_                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Pulls\Create|null $pulls👷Create                                                             = null;
    private ListReviewCommentsForRepo|null $pulls👷ListReviewCommentsForRepo                                                                         = null;
    private GetReviewComment|null $pulls👷GetReviewComment                                                                                           = null;
    private DeleteReviewComment|null $pulls👷DeleteReviewComment                                                                                     = null;
    private UpdateReviewComment|null $pulls👷UpdateReviewComment                                                                                     = null;
    private ListForPullRequestReviewComment|null $reactions👷ListForPullRequestReviewComment                                                         = null;
    private CreateForPullRequestReviewComment|null $reactions👷CreateForPullRequestReviewComment                                                     = null;
    private DeleteForPullRequestComment|null $reactions👷DeleteForPullRequestComment                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Pulls\Get|null $pulls👷Get                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Pulls\Update|null $pulls👷Update                                                             = null;
    private CreateWithPrForAuthenticatedUser|null $codespaces👷CreateWithPrForAuthenticatedUser                                                      = null;
    private ListReviewComments|null $pulls👷ListReviewComments                                                                                       = null;
    private CreateReviewComment|null $pulls👷CreateReviewComment                                                                                     = null;
    private CreateReplyForReviewComment|null $pulls👷CreateReplyForReviewComment                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Pulls\ListCommits|null $pulls👷ListCommits                                                   = null;
    private ListFiles|null $pulls👷ListFiles                                                                                                         = null;
    private CheckIfMerged|null $pulls👷CheckIfMerged                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Pulls\Merge|null $pulls👷Merge                                                               = null;
    private ListRequestedReviewers|null $pulls👷ListRequestedReviewers                                                                               = null;
    private RequestReviewers|null $pulls👷RequestReviewers                                                                                           = null;
    private RemoveRequestedReviewers|null $pulls👷RemoveRequestedReviewers                                                                           = null;
    private ListReviews|null $pulls👷ListReviews                                                                                                     = null;
    private CreateReview|null $pulls👷CreateReview                                                                                                   = null;
    private GetReview|null $pulls👷GetReview                                                                                                         = null;
    private UpdateReview|null $pulls👷UpdateReview                                                                                                   = null;
    private DeletePendingReview|null $pulls👷DeletePendingReview                                                                                     = null;
    private ListCommentsForReview|null $pulls👷ListCommentsForReview                                                                                 = null;
    private DismissReview|null $pulls👷DismissReview                                                                                                 = null;
    private SubmitReview|null $pulls👷SubmitReview                                                                                                   = null;
    private UpdateBranch|null $pulls👷UpdateBranch                                                                                                   = null;
    private GetReadme|null $repos👷GetReadme                                                                                                         = null;
    private GetReadmeInDirectory|null $repos👷GetReadmeInDirectory                                                                                   = null;
    private ListReleases|null $repos👷ListReleases                                                                                                   = null;
    private CreateRelease|null $repos👷CreateRelease                                                                                                 = null;
    private GetReleaseAsset|null $repos👷GetReleaseAsset                                                                                             = null;
    private DeleteReleaseAsset|null $repos👷DeleteReleaseAsset                                                                                       = null;
    private UpdateReleaseAsset|null $repos👷UpdateReleaseAsset                                                                                       = null;
    private GenerateReleaseNotes|null $repos👷GenerateReleaseNotes                                                                                   = null;
    private GetLatestRelease|null $repos👷GetLatestRelease                                                                                           = null;
    private GetReleaseByTag|null $repos👷GetReleaseByTag                                                                                             = null;
    private GetRelease|null $repos👷GetRelease                                                                                                       = null;
    private DeleteRelease|null $repos👷DeleteRelease                                                                                                 = null;
    private UpdateRelease|null $repos👷UpdateRelease                                                                                                 = null;
    private ListReleaseAssets|null $repos👷ListReleaseAssets                                                                                         = null;
    private UploadReleaseAsset|null $repos👷UploadReleaseAsset                                                                                       = null;
    private ListForRelease|null $reactions👷ListForRelease                                                                                           = null;
    private CreateForRelease|null $reactions👷CreateForRelease                                                                                       = null;
    private DeleteForRelease|null $reactions👷DeleteForRelease                                                                                       = null;
    private GetBranchRules|null $repos👷GetBranchRules                                                                                               = null;
    private GetRepoRulesets|null $repos👷GetRepoRulesets                                                                                             = null;
    private CreateRepoRuleset|null $repos👷CreateRepoRuleset                                                                                         = null;
    private GetRepoRuleSuites|null $repos👷GetRepoRuleSuites                                                                                         = null;
    private GetRepoRuleSuite|null $repos👷GetRepoRuleSuite                                                                                           = null;
    private GetRepoRuleset|null $repos👷GetRepoRuleset                                                                                               = null;
    private UpdateRepoRuleset|null $repos👷UpdateRepoRuleset                                                                                         = null;
    private DeleteRepoRuleset|null $repos👷DeleteRepoRuleset                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\ListAlertsForRepo|null $secretScanning👷ListAlertsForRepo                     = null;
    private \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\GetAlert|null $secretScanning👷GetAlert                                       = null;
    private \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\UpdateAlert|null $secretScanning👷UpdateAlert                                 = null;
    private ListLocationsForAlert|null $secretScanning👷ListLocationsForAlert                                                                        = null;
    private CreatePushProtectionBypass|null $secretScanning👷CreatePushProtectionBypass                                                              = null;
    private GetScanHistory|null $secretScanning👷GetScanHistory                                                                                      = null;
    private ListRepositoryAdvisories|null $securityAdvisories👷ListRepositoryAdvisories                                                              = null;
    private CreateRepositoryAdvisory|null $securityAdvisories👷CreateRepositoryAdvisory                                                              = null;
    private CreatePrivateVulnerabilityReport|null $securityAdvisories👷CreatePrivateVulnerabilityReport                                              = null;
    private GetRepositoryAdvisory|null $securityAdvisories👷GetRepositoryAdvisory                                                                    = null;
    private UpdateRepositoryAdvisory|null $securityAdvisories👷UpdateRepositoryAdvisory                                                              = null;
    private CreateRepositoryAdvisoryCveRequest|null $securityAdvisories👷CreateRepositoryAdvisoryCveRequest                                          = null;
    private \ApiClients\Client\GitHub\Internal\Operator\SecurityAdvisories\CreateFork|null $securityAdvisories👷CreateFork                           = null;
    private ListStargazersForRepo|null $activity👷ListStargazersForRepo                                                                              = null;
    private GetCodeFrequencyStats|null $repos👷GetCodeFrequencyStats                                                                                 = null;
    private GetCommitActivityStats|null $repos👷GetCommitActivityStats                                                                               = null;
    private GetContributorsStats|null $repos👷GetContributorsStats                                                                                   = null;
    private GetParticipationStats|null $repos👷GetParticipationStats                                                                                 = null;
    private GetPunchCardStats|null $repos👷GetPunchCardStats                                                                                         = null;
    private CreateCommitStatus|null $repos👷CreateCommitStatus                                                                                       = null;
    private ListWatchersForRepo|null $activity👷ListWatchersForRepo                                                                                  = null;
    private GetRepoSubscription|null $activity👷GetRepoSubscription                                                                                  = null;
    private SetRepoSubscription|null $activity👷SetRepoSubscription                                                                                  = null;
    private DeleteRepoSubscription|null $activity👷DeleteRepoSubscription                                                                            = null;
    private ListTags|null $repos👷ListTags                                                                                                           = null;
    private ListTagProtection|null $repos👷ListTagProtection                                                                                         = null;
    private CreateTagProtection|null $repos👷CreateTagProtection                                                                                     = null;
    private DeleteTagProtection|null $repos👷DeleteTagProtection                                                                                     = null;
    private DownloadTarballArchive|null $repos👷DownloadTarballArchive                                                                               = null;
    private ListTeams|null $repos👷ListTeams                                                                                                         = null;
    private GetAllTopics|null $repos👷GetAllTopics                                                                                                   = null;
    private ReplaceAllTopics|null $repos👷ReplaceAllTopics                                                                                           = null;
    private GetClones|null $repos👷GetClones                                                                                                         = null;
    private GetTopPaths|null $repos👷GetTopPaths                                                                                                     = null;
    private GetTopReferrers|null $repos👷GetTopReferrers                                                                                             = null;
    private GetViews|null $repos👷GetViews                                                                                                           = null;
    private Transfer|null $repos👷Transfer                                                                                                           = null;
    private CheckVulnerabilityAlerts|null $repos👷CheckVulnerabilityAlerts                                                                           = null;
    private EnableVulnerabilityAlerts|null $repos👷EnableVulnerabilityAlerts                                                                         = null;
    private DisableVulnerabilityAlerts|null $repos👷DisableVulnerabilityAlerts                                                                       = null;
    private DownloadZipballArchive|null $repos👷DownloadZipballArchive                                                                               = null;
    private CreateUsingTemplate|null $repos👷CreateUsingTemplate                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\ListPublic|null $repos👷ListPublic                                                     = null;
    private Code|null $search👷Code                                                                                                                  = null;
    private Commits|null $search👷Commits                                                                                                            = null;
    private IssuesAndPullRequests|null $search👷IssuesAndPullRequests                                                                                = null;
    private Labels|null $search👷Labels                                                                                                              = null;
    private Repos|null $search👷Repos                                                                                                                = null;
    private Topics|null $search👷Topics                                                                                                              = null;
    private Users|null $search👷Users                                                                                                                = null;
    private GetLegacy|null $teams👷GetLegacy                                                                                                         = null;
    private DeleteLegacy|null $teams👷DeleteLegacy                                                                                                   = null;
    private UpdateLegacy|null $teams👷UpdateLegacy                                                                                                   = null;
    private ListDiscussionsLegacy|null $teams👷ListDiscussionsLegacy                                                                                 = null;
    private CreateDiscussionLegacy|null $teams👷CreateDiscussionLegacy                                                                               = null;
    private GetDiscussionLegacy|null $teams👷GetDiscussionLegacy                                                                                     = null;
    private DeleteDiscussionLegacy|null $teams👷DeleteDiscussionLegacy                                                                               = null;
    private UpdateDiscussionLegacy|null $teams👷UpdateDiscussionLegacy                                                                               = null;
    private ListDiscussionCommentsLegacy|null $teams👷ListDiscussionCommentsLegacy                                                                   = null;
    private CreateDiscussionCommentLegacy|null $teams👷CreateDiscussionCommentLegacy                                                                 = null;
    private GetDiscussionCommentLegacy|null $teams👷GetDiscussionCommentLegacy                                                                       = null;
    private DeleteDiscussionCommentLegacy|null $teams👷DeleteDiscussionCommentLegacy                                                                 = null;
    private UpdateDiscussionCommentLegacy|null $teams👷UpdateDiscussionCommentLegacy                                                                 = null;
    private ListForTeamDiscussionCommentLegacy|null $reactions👷ListForTeamDiscussionCommentLegacy                                                   = null;
    private CreateForTeamDiscussionCommentLegacy|null $reactions👷CreateForTeamDiscussionCommentLegacy                                               = null;
    private ListForTeamDiscussionLegacy|null $reactions👷ListForTeamDiscussionLegacy                                                                 = null;
    private CreateForTeamDiscussionLegacy|null $reactions👷CreateForTeamDiscussionLegacy                                                             = null;
    private ListPendingInvitationsLegacy|null $teams👷ListPendingInvitationsLegacy                                                                   = null;
    private ListMembersLegacy|null $teams👷ListMembersLegacy                                                                                         = null;
    private GetMemberLegacy|null $teams👷GetMemberLegacy                                                                                             = null;
    private AddMemberLegacy|null $teams👷AddMemberLegacy                                                                                             = null;
    private RemoveMemberLegacy|null $teams👷RemoveMemberLegacy                                                                                       = null;
    private GetMembershipForUserLegacy|null $teams👷GetMembershipForUserLegacy                                                                       = null;
    private AddOrUpdateMembershipForUserLegacy|null $teams👷AddOrUpdateMembershipForUserLegacy                                                       = null;
    private RemoveMembershipForUserLegacy|null $teams👷RemoveMembershipForUserLegacy                                                                 = null;
    private ListProjectsLegacy|null $teams👷ListProjectsLegacy                                                                                       = null;
    private CheckPermissionsForProjectLegacy|null $teams👷CheckPermissionsForProjectLegacy                                                           = null;
    private AddOrUpdateProjectPermissionsLegacy|null $teams👷AddOrUpdateProjectPermissionsLegacy                                                     = null;
    private RemoveProjectLegacy|null $teams👷RemoveProjectLegacy                                                                                     = null;
    private ListReposLegacy|null $teams👷ListReposLegacy                                                                                             = null;
    private CheckPermissionsForRepoLegacy|null $teams👷CheckPermissionsForRepoLegacy                                                                 = null;
    private AddOrUpdateRepoPermissionsLegacy|null $teams👷AddOrUpdateRepoPermissionsLegacy                                                           = null;
    private RemoveRepoLegacy|null $teams👷RemoveRepoLegacy                                                                                           = null;
    private ListChildLegacy|null $teams👷ListChildLegacy                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Users\GetAuthenticated|null $users👷GetAuthenticated                                         = null;
    private UpdateAuthenticated|null $users👷UpdateAuthenticated                                                                                     = null;
    private ListBlockedByAuthenticatedUser|null $users👷ListBlockedByAuthenticatedUser                                                               = null;
    private CheckBlocked|null $users👷CheckBlocked                                                                                                   = null;
    private Block|null $users👷Block                                                                                                                 = null;
    private Unblock|null $users👷Unblock                                                                                                             = null;
    private ListForAuthenticatedUser|null $codespaces👷ListForAuthenticatedUser                                                                      = null;
    private CreateForAuthenticatedUser|null $codespaces👷CreateForAuthenticatedUser                                                                  = null;
    private ListSecretsForAuthenticatedUser|null $codespaces👷ListSecretsForAuthenticatedUser                                                        = null;
    private GetPublicKeyForAuthenticatedUser|null $codespaces👷GetPublicKeyForAuthenticatedUser                                                      = null;
    private GetSecretForAuthenticatedUser|null $codespaces👷GetSecretForAuthenticatedUser                                                            = null;
    private CreateOrUpdateSecretForAuthenticatedUser|null $codespaces👷CreateOrUpdateSecretForAuthenticatedUser                                      = null;
    private DeleteSecretForAuthenticatedUser|null $codespaces👷DeleteSecretForAuthenticatedUser                                                      = null;
    private ListRepositoriesForSecretForAuthenticatedUser|null $codespaces👷ListRepositoriesForSecretForAuthenticatedUser                            = null;
    private SetRepositoriesForSecretForAuthenticatedUser|null $codespaces👷SetRepositoriesForSecretForAuthenticatedUser                              = null;
    private AddRepositoryForSecretForAuthenticatedUser|null $codespaces👷AddRepositoryForSecretForAuthenticatedUser                                  = null;
    private RemoveRepositoryForSecretForAuthenticatedUser|null $codespaces👷RemoveRepositoryForSecretForAuthenticatedUser                            = null;
    private GetForAuthenticatedUser|null $codespaces👷GetForAuthenticatedUser                                                                        = null;
    private DeleteForAuthenticatedUser|null $codespaces👷DeleteForAuthenticatedUser                                                                  = null;
    private UpdateForAuthenticatedUser|null $codespaces👷UpdateForAuthenticatedUser                                                                  = null;
    private ExportForAuthenticatedUser|null $codespaces👷ExportForAuthenticatedUser                                                                  = null;
    private GetExportDetailsForAuthenticatedUser|null $codespaces👷GetExportDetailsForAuthenticatedUser                                              = null;
    private CodespaceMachinesForAuthenticatedUser|null $codespaces👷CodespaceMachinesForAuthenticatedUser                                            = null;
    private PublishForAuthenticatedUser|null $codespaces👷PublishForAuthenticatedUser                                                                = null;
    private StartForAuthenticatedUser|null $codespaces👷StartForAuthenticatedUser                                                                    = null;
    private StopForAuthenticatedUser|null $codespaces👷StopForAuthenticatedUser                                                                      = null;
    private ListDockerMigrationConflictingPackagesForAuthenticatedUser|null $packages👷ListDockerMigrationConflictingPackagesForAuthenticatedUser    = null;
    private SetPrimaryEmailVisibilityForAuthenticatedUser|null $users👷SetPrimaryEmailVisibilityForAuthenticatedUser                                 = null;
    private ListEmailsForAuthenticatedUser|null $users👷ListEmailsForAuthenticatedUser                                                               = null;
    private AddEmailForAuthenticatedUser|null $users👷AddEmailForAuthenticatedUser                                                                   = null;
    private DeleteEmailForAuthenticatedUser|null $users👷DeleteEmailForAuthenticatedUser                                                             = null;
    private ListFollowersForAuthenticatedUser|null $users👷ListFollowersForAuthenticatedUser                                                         = null;
    private ListFollowedByAuthenticatedUser|null $users👷ListFollowedByAuthenticatedUser                                                             = null;
    private CheckPersonIsFollowedByAuthenticated|null $users👷CheckPersonIsFollowedByAuthenticated                                                   = null;
    private Follow|null $users👷Follow                                                                                                               = null;
    private Unfollow|null $users👷Unfollow                                                                                                           = null;
    private ListGpgKeysForAuthenticatedUser|null $users👷ListGpgKeysForAuthenticatedUser                                                             = null;
    private CreateGpgKeyForAuthenticatedUser|null $users👷CreateGpgKeyForAuthenticatedUser                                                           = null;
    private GetGpgKeyForAuthenticatedUser|null $users👷GetGpgKeyForAuthenticatedUser                                                                 = null;
    private DeleteGpgKeyForAuthenticatedUser|null $users👷DeleteGpgKeyForAuthenticatedUser                                                           = null;
    private ListInstallationsForAuthenticatedUser|null $apps👷ListInstallationsForAuthenticatedUser                                                  = null;
    private ListInstallationReposForAuthenticatedUser|null $apps👷ListInstallationReposForAuthenticatedUser                                          = null;
    private AddRepoToInstallationForAuthenticatedUser|null $apps👷AddRepoToInstallationForAuthenticatedUser                                          = null;
    private RemoveRepoFromInstallationForAuthenticatedUser|null $apps👷RemoveRepoFromInstallationForAuthenticatedUser                                = null;
    private GetRestrictionsForAuthenticatedUser|null $interactions👷GetRestrictionsForAuthenticatedUser                                              = null;
    private SetRestrictionsForAuthenticatedUser|null $interactions👷SetRestrictionsForAuthenticatedUser                                              = null;
    private RemoveRestrictionsForAuthenticatedUser|null $interactions👷RemoveRestrictionsForAuthenticatedUser                                        = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Issues\ListForAuthenticatedUser|null $issues👷ListForAuthenticatedUser                       = null;
    private ListPublicSshKeysForAuthenticatedUser|null $users👷ListPublicSshKeysForAuthenticatedUser                                                 = null;
    private CreatePublicSshKeyForAuthenticatedUser|null $users👷CreatePublicSshKeyForAuthenticatedUser                                               = null;
    private GetPublicSshKeyForAuthenticatedUser|null $users👷GetPublicSshKeyForAuthenticatedUser                                                     = null;
    private DeletePublicSshKeyForAuthenticatedUser|null $users👷DeletePublicSshKeyForAuthenticatedUser                                               = null;
    private ListSubscriptionsForAuthenticatedUser|null $apps👷ListSubscriptionsForAuthenticatedUser                                                  = null;
    private ListSubscriptionsForAuthenticatedUserStubbed|null $apps👷ListSubscriptionsForAuthenticatedUserStubbed                                    = null;
    private ListMembershipsForAuthenticatedUser|null $orgs👷ListMembershipsForAuthenticatedUser                                                      = null;
    private GetMembershipForAuthenticatedUser|null $orgs👷GetMembershipForAuthenticatedUser                                                          = null;
    private UpdateMembershipForAuthenticatedUser|null $orgs👷UpdateMembershipForAuthenticatedUser                                                    = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Migrations\ListForAuthenticatedUser|null $migrations👷ListForAuthenticatedUser               = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Migrations\StartForAuthenticatedUser|null $migrations👷StartForAuthenticatedUser             = null;
    private GetStatusForAuthenticatedUser|null $migrations👷GetStatusForAuthenticatedUser                                                            = null;
    private GetArchiveForAuthenticatedUser|null $migrations👷GetArchiveForAuthenticatedUser                                                          = null;
    private DeleteArchiveForAuthenticatedUser|null $migrations👷DeleteArchiveForAuthenticatedUser                                                    = null;
    private UnlockRepoForAuthenticatedUser|null $migrations👷UnlockRepoForAuthenticatedUser                                                          = null;
    private ListReposForAuthenticatedUser|null $migrations👷ListReposForAuthenticatedUser                                                            = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Orgs\ListForAuthenticatedUser|null $orgs👷ListForAuthenticatedUser                           = null;
    private ListPackagesForAuthenticatedUser|null $packages👷ListPackagesForAuthenticatedUser                                                        = null;
    private GetPackageForAuthenticatedUser|null $packages👷GetPackageForAuthenticatedUser                                                            = null;
    private DeletePackageForAuthenticatedUser|null $packages👷DeletePackageForAuthenticatedUser                                                      = null;
    private RestorePackageForAuthenticatedUser|null $packages👷RestorePackageForAuthenticatedUser                                                    = null;
    private GetAllPackageVersionsForPackageOwnedByAuthenticatedUser|null $packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUser          = null;
    private GetPackageVersionForAuthenticatedUser|null $packages👷GetPackageVersionForAuthenticatedUser                                              = null;
    private DeletePackageVersionForAuthenticatedUser|null $packages👷DeletePackageVersionForAuthenticatedUser                                        = null;
    private RestorePackageVersionForAuthenticatedUser|null $packages👷RestorePackageVersionForAuthenticatedUser                                      = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Projects\CreateForAuthenticatedUser|null $projects👷CreateForAuthenticatedUser               = null;
    private ListPublicEmailsForAuthenticatedUser|null $users👷ListPublicEmailsForAuthenticatedUser                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\ListForAuthenticatedUser|null $repos👷ListForAuthenticatedUser                         = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\CreateForAuthenticatedUser|null $repos👷CreateForAuthenticatedUser                     = null;
    private ListInvitationsForAuthenticatedUser|null $repos👷ListInvitationsForAuthenticatedUser                                                     = null;
    private DeclineInvitationForAuthenticatedUser|null $repos👷DeclineInvitationForAuthenticatedUser                                                 = null;
    private AcceptInvitationForAuthenticatedUser|null $repos👷AcceptInvitationForAuthenticatedUser                                                   = null;
    private ListSocialAccountsForAuthenticatedUser|null $users👷ListSocialAccountsForAuthenticatedUser                                               = null;
    private AddSocialAccountForAuthenticatedUser|null $users👷AddSocialAccountForAuthenticatedUser                                                   = null;
    private DeleteSocialAccountForAuthenticatedUser|null $users👷DeleteSocialAccountForAuthenticatedUser                                             = null;
    private ListSshSigningKeysForAuthenticatedUser|null $users👷ListSshSigningKeysForAuthenticatedUser                                               = null;
    private CreateSshSigningKeyForAuthenticatedUser|null $users👷CreateSshSigningKeyForAuthenticatedUser                                             = null;
    private GetSshSigningKeyForAuthenticatedUser|null $users👷GetSshSigningKeyForAuthenticatedUser                                                   = null;
    private DeleteSshSigningKeyForAuthenticatedUser|null $users👷DeleteSshSigningKeyForAuthenticatedUser                                             = null;
    private ListReposStarredByAuthenticatedUser|null $activity👷ListReposStarredByAuthenticatedUser                                                  = null;
    private CheckRepoIsStarredByAuthenticatedUser|null $activity👷CheckRepoIsStarredByAuthenticatedUser                                              = null;
    private StarRepoForAuthenticatedUser|null $activity👷StarRepoForAuthenticatedUser                                                                = null;
    private UnstarRepoForAuthenticatedUser|null $activity👷UnstarRepoForAuthenticatedUser                                                            = null;
    private ListWatchedReposForAuthenticatedUser|null $activity👷ListWatchedReposForAuthenticatedUser                                                = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Teams\ListForAuthenticatedUser|null $teams👷ListForAuthenticatedUser                         = null;
    private GetById|null $users👷GetById                                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Users\List_|null $users👷List_                                                               = null;
    private GetByUsername|null $users👷GetByUsername                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Users\ListAttestations|null $users👷ListAttestations                                         = null;
    private ListDockerMigrationConflictingPackagesForUser|null $packages👷ListDockerMigrationConflictingPackagesForUser                              = null;
    private ListEventsForAuthenticatedUser|null $activity👷ListEventsForAuthenticatedUser                                                            = null;
    private ListOrgEventsForAuthenticatedUser|null $activity👷ListOrgEventsForAuthenticatedUser                                                      = null;
    private ListPublicEventsForUser|null $activity👷ListPublicEventsForUser                                                                          = null;
    private ListFollowersForUser|null $users👷ListFollowersForUser                                                                                   = null;
    private ListFollowingForUser|null $users👷ListFollowingForUser                                                                                   = null;
    private CheckFollowingForUser|null $users👷CheckFollowingForUser                                                                                 = null;
    private ListForUser|null $gists👷ListForUser                                                                                                     = null;
    private ListGpgKeysForUser|null $users👷ListGpgKeysForUser                                                                                       = null;
    private GetContextForUser|null $users👷GetContextForUser                                                                                         = null;
    private GetUserInstallation|null $apps👷GetUserInstallation                                                                                      = null;
    private ListPublicKeysForUser|null $users👷ListPublicKeysForUser                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Orgs\ListForUser|null $orgs👷ListForUser                                                     = null;
    private ListPackagesForUser|null $packages👷ListPackagesForUser                                                                                  = null;
    private GetPackageForUser|null $packages👷GetPackageForUser                                                                                      = null;
    private DeletePackageForUser|null $packages👷DeletePackageForUser                                                                                = null;
    private RestorePackageForUser|null $packages👷RestorePackageForUser                                                                              = null;
    private GetAllPackageVersionsForPackageOwnedByUser|null $packages👷GetAllPackageVersionsForPackageOwnedByUser                                    = null;
    private GetPackageVersionForUser|null $packages👷GetPackageVersionForUser                                                                        = null;
    private DeletePackageVersionForUser|null $packages👷DeletePackageVersionForUser                                                                  = null;
    private RestorePackageVersionForUser|null $packages👷RestorePackageVersionForUser                                                                = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Projects\ListForUser|null $projects👷ListForUser                                             = null;
    private ListReceivedEventsForUser|null $activity👷ListReceivedEventsForUser                                                                      = null;
    private ListReceivedPublicEventsForUser|null $activity👷ListReceivedPublicEventsForUser                                                          = null;
    private \ApiClients\Client\GitHub\Internal\Operator\Repos\ListForUser|null $repos👷ListForUser                                                   = null;
    private GetGithubActionsBillingUser|null $billing👷GetGithubActionsBillingUser                                                                   = null;
    private GetGithubPackagesBillingUser|null $billing👷GetGithubPackagesBillingUser                                                                 = null;
    private GetSharedStorageBillingUser|null $billing👷GetSharedStorageBillingUser                                                                   = null;
    private ListSocialAccountsForUser|null $users👷ListSocialAccountsForUser                                                                         = null;
    private ListSshSigningKeysForUser|null $users👷ListSshSigningKeysForUser                                                                         = null;
    private ListReposStarredByUser|null $activity👷ListReposStarredByUser                                                                            = null;
    private ListReposWatchedByUser|null $activity👷ListReposWatchedByUser                                                                            = null;
    private GetAllVersions|null $meta👷GetAllVersions                                                                                                = null;
    private GetZen|null $meta👷GetZen                                                                                                                = null;

    public function __construct(private readonly AuthenticationInterface $authentication, private readonly Browser $browser, private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrators $hydrators)
    {
    }

    public function meta👷Root(): Root
    {
        if ($this->meta👷Root instanceof Root === false) {
            $this->meta👷Root = new Root($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Root());
        }

        return $this->meta👷Root;
    }

    public function securityAdvisories👷ListGlobalAdvisories(): ListGlobalAdvisories
    {
        if ($this->securityAdvisories👷ListGlobalAdvisories instanceof ListGlobalAdvisories === false) {
            $this->securityAdvisories👷ListGlobalAdvisories = new ListGlobalAdvisories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Advisories());
        }

        return $this->securityAdvisories👷ListGlobalAdvisories;
    }

    public function securityAdvisories👷GetGlobalAdvisory(): GetGlobalAdvisory
    {
        if ($this->securityAdvisories👷GetGlobalAdvisory instanceof GetGlobalAdvisory === false) {
            $this->securityAdvisories👷GetGlobalAdvisory = new GetGlobalAdvisory($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Advisories🌀GhsaId());
        }

        return $this->securityAdvisories👷GetGlobalAdvisory;
    }

    public function apps👷GetAuthenticated(): GetAuthenticated
    {
        if ($this->apps👷GetAuthenticated instanceof GetAuthenticated === false) {
            $this->apps👷GetAuthenticated = new GetAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App());
        }

        return $this->apps👷GetAuthenticated;
    }

    public function apps👷CreateFromManifest(): CreateFromManifest
    {
        if ($this->apps👷CreateFromManifest instanceof CreateFromManifest === false) {
            $this->apps👷CreateFromManifest = new CreateFromManifest($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀AppManifests🌀Code🌀Conversions());
        }

        return $this->apps👷CreateFromManifest;
    }

    public function apps👷GetWebhookConfigForApp(): GetWebhookConfigForApp
    {
        if ($this->apps👷GetWebhookConfigForApp instanceof GetWebhookConfigForApp === false) {
            $this->apps👷GetWebhookConfigForApp = new GetWebhookConfigForApp($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Config());
        }

        return $this->apps👷GetWebhookConfigForApp;
    }

    public function apps👷UpdateWebhookConfigForApp(): UpdateWebhookConfigForApp
    {
        if ($this->apps👷UpdateWebhookConfigForApp instanceof UpdateWebhookConfigForApp === false) {
            $this->apps👷UpdateWebhookConfigForApp = new UpdateWebhookConfigForApp($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Config());
        }

        return $this->apps👷UpdateWebhookConfigForApp;
    }

    public function apps👷ListWebhookDeliveries(): ListWebhookDeliveries
    {
        if ($this->apps👷ListWebhookDeliveries instanceof ListWebhookDeliveries === false) {
            $this->apps👷ListWebhookDeliveries = new ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries());
        }

        return $this->apps👷ListWebhookDeliveries;
    }

    public function apps👷GetWebhookDelivery(): GetWebhookDelivery
    {
        if ($this->apps👷GetWebhookDelivery instanceof GetWebhookDelivery === false) {
            $this->apps👷GetWebhookDelivery = new GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId());
        }

        return $this->apps👷GetWebhookDelivery;
    }

    public function apps👷RedeliverWebhookDelivery(): RedeliverWebhookDelivery
    {
        if ($this->apps👷RedeliverWebhookDelivery instanceof RedeliverWebhookDelivery === false) {
            $this->apps👷RedeliverWebhookDelivery = new RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts());
        }

        return $this->apps👷RedeliverWebhookDelivery;
    }

    public function apps👷ListInstallationRequestsForAuthenticatedApp(): ListInstallationRequestsForAuthenticatedApp
    {
        if ($this->apps👷ListInstallationRequestsForAuthenticatedApp instanceof ListInstallationRequestsForAuthenticatedApp === false) {
            $this->apps👷ListInstallationRequestsForAuthenticatedApp = new ListInstallationRequestsForAuthenticatedApp($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀InstallationRequests());
        }

        return $this->apps👷ListInstallationRequestsForAuthenticatedApp;
    }

    public function apps👷ListInstallations(): ListInstallations
    {
        if ($this->apps👷ListInstallations instanceof ListInstallations === false) {
            $this->apps👷ListInstallations = new ListInstallations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations());
        }

        return $this->apps👷ListInstallations;
    }

    public function apps👷GetInstallation(): GetInstallation
    {
        if ($this->apps👷GetInstallation instanceof GetInstallation === false) {
            $this->apps👷GetInstallation = new GetInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId());
        }

        return $this->apps👷GetInstallation;
    }

    public function apps👷DeleteInstallation(): DeleteInstallation
    {
        if ($this->apps👷DeleteInstallation instanceof DeleteInstallation === false) {
            $this->apps👷DeleteInstallation = new DeleteInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId());
        }

        return $this->apps👷DeleteInstallation;
    }

    public function apps👷CreateInstallationAccessToken(): CreateInstallationAccessToken
    {
        if ($this->apps👷CreateInstallationAccessToken instanceof CreateInstallationAccessToken === false) {
            $this->apps👷CreateInstallationAccessToken = new CreateInstallationAccessToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀AccessTokens());
        }

        return $this->apps👷CreateInstallationAccessToken;
    }

    public function apps👷SuspendInstallation(): SuspendInstallation
    {
        if ($this->apps👷SuspendInstallation instanceof SuspendInstallation === false) {
            $this->apps👷SuspendInstallation = new SuspendInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀Suspended());
        }

        return $this->apps👷SuspendInstallation;
    }

    public function apps👷UnsuspendInstallation(): UnsuspendInstallation
    {
        if ($this->apps👷UnsuspendInstallation instanceof UnsuspendInstallation === false) {
            $this->apps👷UnsuspendInstallation = new UnsuspendInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀Suspended());
        }

        return $this->apps👷UnsuspendInstallation;
    }

    public function apps👷DeleteAuthorization(): DeleteAuthorization
    {
        if ($this->apps👷DeleteAuthorization instanceof DeleteAuthorization === false) {
            $this->apps👷DeleteAuthorization = new DeleteAuthorization($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Grant());
        }

        return $this->apps👷DeleteAuthorization;
    }

    public function apps👷CheckToken(): CheckToken
    {
        if ($this->apps👷CheckToken instanceof CheckToken === false) {
            $this->apps👷CheckToken = new CheckToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());
        }

        return $this->apps👷CheckToken;
    }

    public function apps👷DeleteToken(): DeleteToken
    {
        if ($this->apps👷DeleteToken instanceof DeleteToken === false) {
            $this->apps👷DeleteToken = new DeleteToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());
        }

        return $this->apps👷DeleteToken;
    }

    public function apps👷ResetToken(): ResetToken
    {
        if ($this->apps👷ResetToken instanceof ResetToken === false) {
            $this->apps👷ResetToken = new ResetToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());
        }

        return $this->apps👷ResetToken;
    }

    public function apps👷ScopeToken(): ScopeToken
    {
        if ($this->apps👷ScopeToken instanceof ScopeToken === false) {
            $this->apps👷ScopeToken = new ScopeToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token🌀Scoped());
        }

        return $this->apps👷ScopeToken;
    }

    public function apps👷GetBySlug(): GetBySlug
    {
        if ($this->apps👷GetBySlug instanceof GetBySlug === false) {
            $this->apps👷GetBySlug = new GetBySlug($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Apps🌀AppSlug());
        }

        return $this->apps👷GetBySlug;
    }

    public function classroom👷GetAnAssignment(): GetAnAssignment
    {
        if ($this->classroom👷GetAnAssignment instanceof GetAnAssignment === false) {
            $this->classroom👷GetAnAssignment = new GetAnAssignment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Assignments🌀AssignmentId());
        }

        return $this->classroom👷GetAnAssignment;
    }

    public function classroom👷ListAcceptedAssignmentsForAnAssignment(): ListAcceptedAssignmentsForAnAssignment
    {
        if ($this->classroom👷ListAcceptedAssignmentsForAnAssignment instanceof ListAcceptedAssignmentsForAnAssignment === false) {
            $this->classroom👷ListAcceptedAssignmentsForAnAssignment = new ListAcceptedAssignmentsForAnAssignment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Assignments🌀AssignmentId🌀AcceptedAssignments());
        }

        return $this->classroom👷ListAcceptedAssignmentsForAnAssignment;
    }

    public function classroom👷GetAssignmentGrades(): GetAssignmentGrades
    {
        if ($this->classroom👷GetAssignmentGrades instanceof GetAssignmentGrades === false) {
            $this->classroom👷GetAssignmentGrades = new GetAssignmentGrades($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Assignments🌀AssignmentId🌀Grades());
        }

        return $this->classroom👷GetAssignmentGrades;
    }

    public function classroom👷ListClassrooms(): ListClassrooms
    {
        if ($this->classroom👷ListClassrooms instanceof ListClassrooms === false) {
            $this->classroom👷ListClassrooms = new ListClassrooms($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Classrooms());
        }

        return $this->classroom👷ListClassrooms;
    }

    public function classroom👷GetAClassroom(): GetAClassroom
    {
        if ($this->classroom👷GetAClassroom instanceof GetAClassroom === false) {
            $this->classroom👷GetAClassroom = new GetAClassroom($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Classrooms🌀ClassroomId());
        }

        return $this->classroom👷GetAClassroom;
    }

    public function classroom👷ListAssignmentsForAClassroom(): ListAssignmentsForAClassroom
    {
        if ($this->classroom👷ListAssignmentsForAClassroom instanceof ListAssignmentsForAClassroom === false) {
            $this->classroom👷ListAssignmentsForAClassroom = new ListAssignmentsForAClassroom($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Classrooms🌀ClassroomId🌀Assignments());
        }

        return $this->classroom👷ListAssignmentsForAClassroom;
    }

    public function codesOfConduct👷GetAllCodesOfConduct(): GetAllCodesOfConduct
    {
        if ($this->codesOfConduct👷GetAllCodesOfConduct instanceof GetAllCodesOfConduct === false) {
            $this->codesOfConduct👷GetAllCodesOfConduct = new GetAllCodesOfConduct($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀CodesOfConduct());
        }

        return $this->codesOfConduct👷GetAllCodesOfConduct;
    }

    public function codesOfConduct👷GetConductCode(): GetConductCode
    {
        if ($this->codesOfConduct👷GetConductCode instanceof GetConductCode === false) {
            $this->codesOfConduct👷GetConductCode = new GetConductCode($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀CodesOfConduct🌀Key());
        }

        return $this->codesOfConduct👷GetConductCode;
    }

    public function emojis👷Get(): Get
    {
        if ($this->emojis👷Get instanceof Get === false) {
            $this->emojis👷Get = new Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Emojis());
        }

        return $this->emojis👷Get;
    }

    public function copilot👷ListCopilotSeatsForEnterprise(): ListCopilotSeatsForEnterprise
    {
        if ($this->copilot👷ListCopilotSeatsForEnterprise instanceof ListCopilotSeatsForEnterprise === false) {
            $this->copilot👷ListCopilotSeatsForEnterprise = new ListCopilotSeatsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Copilot🌀Billing🌀Seats());
        }

        return $this->copilot👷ListCopilotSeatsForEnterprise;
    }

    public function copilot👷CopilotMetricsForEnterprise(): CopilotMetricsForEnterprise
    {
        if ($this->copilot👷CopilotMetricsForEnterprise instanceof CopilotMetricsForEnterprise === false) {
            $this->copilot👷CopilotMetricsForEnterprise = new CopilotMetricsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Copilot🌀Metrics());
        }

        return $this->copilot👷CopilotMetricsForEnterprise;
    }

    public function copilot👷UsageMetricsForEnterprise(): UsageMetricsForEnterprise
    {
        if ($this->copilot👷UsageMetricsForEnterprise instanceof UsageMetricsForEnterprise === false) {
            $this->copilot👷UsageMetricsForEnterprise = new UsageMetricsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Copilot🌀Usage());
        }

        return $this->copilot👷UsageMetricsForEnterprise;
    }

    public function dependabot👷ListAlertsForEnterprise(): ListAlertsForEnterprise
    {
        if ($this->dependabot👷ListAlertsForEnterprise instanceof ListAlertsForEnterprise === false) {
            $this->dependabot👷ListAlertsForEnterprise = new ListAlertsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Dependabot🌀Alerts());
        }

        return $this->dependabot👷ListAlertsForEnterprise;
    }

    public function secretScanning👷ListAlertsForEnterprise(): \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\ListAlertsForEnterprise
    {
        if ($this->secretScanning👷ListAlertsForEnterprise instanceof \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\ListAlertsForEnterprise === false) {
            $this->secretScanning👷ListAlertsForEnterprise = new \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\ListAlertsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts());
        }

        return $this->secretScanning👷ListAlertsForEnterprise;
    }

    public function copilot👷CopilotMetricsForEnterpriseTeam(): CopilotMetricsForEnterpriseTeam
    {
        if ($this->copilot👷CopilotMetricsForEnterpriseTeam instanceof CopilotMetricsForEnterpriseTeam === false) {
            $this->copilot👷CopilotMetricsForEnterpriseTeam = new CopilotMetricsForEnterpriseTeam($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Team🌀TeamSlug🌀Copilot🌀Metrics());
        }

        return $this->copilot👷CopilotMetricsForEnterpriseTeam;
    }

    public function copilot👷UsageMetricsForEnterpriseTeam(): UsageMetricsForEnterpriseTeam
    {
        if ($this->copilot👷UsageMetricsForEnterpriseTeam instanceof UsageMetricsForEnterpriseTeam === false) {
            $this->copilot👷UsageMetricsForEnterpriseTeam = new UsageMetricsForEnterpriseTeam($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Team🌀TeamSlug🌀Copilot🌀Usage());
        }

        return $this->copilot👷UsageMetricsForEnterpriseTeam;
    }

    public function activity👷ListPublicEvents(): ListPublicEvents
    {
        if ($this->activity👷ListPublicEvents instanceof ListPublicEvents === false) {
            $this->activity👷ListPublicEvents = new ListPublicEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Events());
        }

        return $this->activity👷ListPublicEvents;
    }

    public function activity👷GetFeeds(): GetFeeds
    {
        if ($this->activity👷GetFeeds instanceof GetFeeds === false) {
            $this->activity👷GetFeeds = new GetFeeds($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Feeds());
        }

        return $this->activity👷GetFeeds;
    }

    public function gists👷List_(): List_
    {
        if ($this->gists👷List_ instanceof List_ === false) {
            $this->gists👷List_ = new List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists());
        }

        return $this->gists👷List_;
    }

    public function gists👷Create(): Create
    {
        if ($this->gists👷Create instanceof Create === false) {
            $this->gists👷Create = new Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists());
        }

        return $this->gists👷Create;
    }

    public function gists👷ListPublic(): ListPublic
    {
        if ($this->gists👷ListPublic instanceof ListPublic === false) {
            $this->gists👷ListPublic = new ListPublic($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀Public_());
        }

        return $this->gists👷ListPublic;
    }

    public function gists👷ListStarred(): ListStarred
    {
        if ($this->gists👷ListStarred instanceof ListStarred === false) {
            $this->gists👷ListStarred = new ListStarred($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀Starred());
        }

        return $this->gists👷ListStarred;
    }

    public function gists👷Get(): \ApiClients\Client\GitHub\Internal\Operator\Gists\Get
    {
        if ($this->gists👷Get instanceof \ApiClients\Client\GitHub\Internal\Operator\Gists\Get === false) {
            $this->gists👷Get = new \ApiClients\Client\GitHub\Internal\Operator\Gists\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId());
        }

        return $this->gists👷Get;
    }

    public function gists👷Delete(): Delete
    {
        if ($this->gists👷Delete instanceof Delete === false) {
            $this->gists👷Delete = new Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId());
        }

        return $this->gists👷Delete;
    }

    public function gists👷Update(): Update
    {
        if ($this->gists👷Update instanceof Update === false) {
            $this->gists👷Update = new Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId());
        }

        return $this->gists👷Update;
    }

    public function gists👷ListComments(): ListComments
    {
        if ($this->gists👷ListComments instanceof ListComments === false) {
            $this->gists👷ListComments = new ListComments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments());
        }

        return $this->gists👷ListComments;
    }

    public function gists👷CreateComment(): CreateComment
    {
        if ($this->gists👷CreateComment instanceof CreateComment === false) {
            $this->gists👷CreateComment = new CreateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments());
        }

        return $this->gists👷CreateComment;
    }

    public function gists👷GetComment(): GetComment
    {
        if ($this->gists👷GetComment instanceof GetComment === false) {
            $this->gists👷GetComment = new GetComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId());
        }

        return $this->gists👷GetComment;
    }

    public function gists👷DeleteComment(): DeleteComment
    {
        if ($this->gists👷DeleteComment instanceof DeleteComment === false) {
            $this->gists👷DeleteComment = new DeleteComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId());
        }

        return $this->gists👷DeleteComment;
    }

    public function gists👷UpdateComment(): UpdateComment
    {
        if ($this->gists👷UpdateComment instanceof UpdateComment === false) {
            $this->gists👷UpdateComment = new UpdateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId());
        }

        return $this->gists👷UpdateComment;
    }

    public function gists👷ListCommits(): ListCommits
    {
        if ($this->gists👷ListCommits instanceof ListCommits === false) {
            $this->gists👷ListCommits = new ListCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Commits());
        }

        return $this->gists👷ListCommits;
    }

    public function gists👷ListForks(): ListForks
    {
        if ($this->gists👷ListForks instanceof ListForks === false) {
            $this->gists👷ListForks = new ListForks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Forks());
        }

        return $this->gists👷ListForks;
    }

    public function gists👷Fork(): Fork
    {
        if ($this->gists👷Fork instanceof Fork === false) {
            $this->gists👷Fork = new Fork($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Forks());
        }

        return $this->gists👷Fork;
    }

    public function gists👷CheckIsStarred(): CheckIsStarred
    {
        if ($this->gists👷CheckIsStarred instanceof CheckIsStarred === false) {
            $this->gists👷CheckIsStarred = new CheckIsStarred($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Star());
        }

        return $this->gists👷CheckIsStarred;
    }

    public function gists👷Star(): Star
    {
        if ($this->gists👷Star instanceof Star === false) {
            $this->gists👷Star = new Star($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Star());
        }

        return $this->gists👷Star;
    }

    public function gists👷Unstar(): Unstar
    {
        if ($this->gists👷Unstar instanceof Unstar === false) {
            $this->gists👷Unstar = new Unstar($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Star());
        }

        return $this->gists👷Unstar;
    }

    public function gists👷GetRevision(): GetRevision
    {
        if ($this->gists👷GetRevision instanceof GetRevision === false) {
            $this->gists👷GetRevision = new GetRevision($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Sha());
        }

        return $this->gists👷GetRevision;
    }

    public function gitignore👷GetAllTemplates(): GetAllTemplates
    {
        if ($this->gitignore👷GetAllTemplates instanceof GetAllTemplates === false) {
            $this->gitignore👷GetAllTemplates = new GetAllTemplates($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gitignore🌀Templates());
        }

        return $this->gitignore👷GetAllTemplates;
    }

    public function gitignore👷GetTemplate(): GetTemplate
    {
        if ($this->gitignore👷GetTemplate instanceof GetTemplate === false) {
            $this->gitignore👷GetTemplate = new GetTemplate($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gitignore🌀Templates🌀Name());
        }

        return $this->gitignore👷GetTemplate;
    }

    public function apps👷ListReposAccessibleToInstallation(): ListReposAccessibleToInstallation
    {
        if ($this->apps👷ListReposAccessibleToInstallation instanceof ListReposAccessibleToInstallation === false) {
            $this->apps👷ListReposAccessibleToInstallation = new ListReposAccessibleToInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Installation🌀Repositories());
        }

        return $this->apps👷ListReposAccessibleToInstallation;
    }

    public function apps👷RevokeInstallationAccessToken(): RevokeInstallationAccessToken
    {
        if ($this->apps👷RevokeInstallationAccessToken instanceof RevokeInstallationAccessToken === false) {
            $this->apps👷RevokeInstallationAccessToken = new RevokeInstallationAccessToken($this->browser, $this->authentication);
        }

        return $this->apps👷RevokeInstallationAccessToken;
    }

    public function issues👷List_(): \ApiClients\Client\GitHub\Internal\Operator\Issues\List_
    {
        if ($this->issues👷List_ instanceof \ApiClients\Client\GitHub\Internal\Operator\Issues\List_ === false) {
            $this->issues👷List_ = new \ApiClients\Client\GitHub\Internal\Operator\Issues\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Issues());
        }

        return $this->issues👷List_;
    }

    public function licenses👷GetAllCommonlyUsed(): GetAllCommonlyUsed
    {
        if ($this->licenses👷GetAllCommonlyUsed instanceof GetAllCommonlyUsed === false) {
            $this->licenses👷GetAllCommonlyUsed = new GetAllCommonlyUsed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Licenses());
        }

        return $this->licenses👷GetAllCommonlyUsed;
    }

    public function licenses👷Get(): \ApiClients\Client\GitHub\Internal\Operator\Licenses\Get
    {
        if ($this->licenses👷Get instanceof \ApiClients\Client\GitHub\Internal\Operator\Licenses\Get === false) {
            $this->licenses👷Get = new \ApiClients\Client\GitHub\Internal\Operator\Licenses\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Licenses🌀License());
        }

        return $this->licenses👷Get;
    }

    public function markdown👷Render(): Render
    {
        if ($this->markdown👷Render instanceof Render === false) {
            $this->markdown👷Render = new Render($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Markdown());
        }

        return $this->markdown👷Render;
    }

    public function markdown👷RenderRaw(): RenderRaw
    {
        if ($this->markdown👷RenderRaw instanceof RenderRaw === false) {
            $this->markdown👷RenderRaw = new RenderRaw($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Markdown🌀Raw());
        }

        return $this->markdown👷RenderRaw;
    }

    public function apps👷GetSubscriptionPlanForAccount(): GetSubscriptionPlanForAccount
    {
        if ($this->apps👷GetSubscriptionPlanForAccount instanceof GetSubscriptionPlanForAccount === false) {
            $this->apps👷GetSubscriptionPlanForAccount = new GetSubscriptionPlanForAccount($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀AccountId());
        }

        return $this->apps👷GetSubscriptionPlanForAccount;
    }

    public function apps👷ListPlans(): ListPlans
    {
        if ($this->apps👷ListPlans instanceof ListPlans === false) {
            $this->apps👷ListPlans = new ListPlans($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Plans());
        }

        return $this->apps👷ListPlans;
    }

    public function apps👷ListAccountsForPlan(): ListAccountsForPlan
    {
        if ($this->apps👷ListAccountsForPlan instanceof ListAccountsForPlan === false) {
            $this->apps👷ListAccountsForPlan = new ListAccountsForPlan($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Plans🌀PlanId🌀Accounts());
        }

        return $this->apps👷ListAccountsForPlan;
    }

    public function apps👷GetSubscriptionPlanForAccountStubbed(): GetSubscriptionPlanForAccountStubbed
    {
        if ($this->apps👷GetSubscriptionPlanForAccountStubbed instanceof GetSubscriptionPlanForAccountStubbed === false) {
            $this->apps👷GetSubscriptionPlanForAccountStubbed = new GetSubscriptionPlanForAccountStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Accounts🌀AccountId());
        }

        return $this->apps👷GetSubscriptionPlanForAccountStubbed;
    }

    public function apps👷ListPlansStubbed(): ListPlansStubbed
    {
        if ($this->apps👷ListPlansStubbed instanceof ListPlansStubbed === false) {
            $this->apps👷ListPlansStubbed = new ListPlansStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans());
        }

        return $this->apps👷ListPlansStubbed;
    }

    public function apps👷ListAccountsForPlanStubbed(): ListAccountsForPlanStubbed
    {
        if ($this->apps👷ListAccountsForPlanStubbed instanceof ListAccountsForPlanStubbed === false) {
            $this->apps👷ListAccountsForPlanStubbed = new ListAccountsForPlanStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans🌀PlanId🌀Accounts());
        }

        return $this->apps👷ListAccountsForPlanStubbed;
    }

    public function meta👷Get(): \ApiClients\Client\GitHub\Internal\Operator\Meta\Get
    {
        if ($this->meta👷Get instanceof \ApiClients\Client\GitHub\Internal\Operator\Meta\Get === false) {
            $this->meta👷Get = new \ApiClients\Client\GitHub\Internal\Operator\Meta\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Meta());
        }

        return $this->meta👷Get;
    }

    public function activity👷ListPublicEventsForRepoNetwork(): ListPublicEventsForRepoNetwork
    {
        if ($this->activity👷ListPublicEventsForRepoNetwork instanceof ListPublicEventsForRepoNetwork === false) {
            $this->activity👷ListPublicEventsForRepoNetwork = new ListPublicEventsForRepoNetwork($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Networks🌀Owner🌀Repo🌀Events());
        }

        return $this->activity👷ListPublicEventsForRepoNetwork;
    }

    public function activity👷ListNotificationsForAuthenticatedUser(): ListNotificationsForAuthenticatedUser
    {
        if ($this->activity👷ListNotificationsForAuthenticatedUser instanceof ListNotificationsForAuthenticatedUser === false) {
            $this->activity👷ListNotificationsForAuthenticatedUser = new ListNotificationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications());
        }

        return $this->activity👷ListNotificationsForAuthenticatedUser;
    }

    public function activity👷MarkNotificationsAsRead(): MarkNotificationsAsRead
    {
        if ($this->activity👷MarkNotificationsAsRead instanceof MarkNotificationsAsRead === false) {
            $this->activity👷MarkNotificationsAsRead = new MarkNotificationsAsRead($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications());
        }

        return $this->activity👷MarkNotificationsAsRead;
    }

    public function activity👷GetThread(): GetThread
    {
        if ($this->activity👷GetThread instanceof GetThread === false) {
            $this->activity👷GetThread = new GetThread($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId());
        }

        return $this->activity👷GetThread;
    }

    public function activity👷MarkThreadAsDone(): MarkThreadAsDone
    {
        if ($this->activity👷MarkThreadAsDone instanceof MarkThreadAsDone === false) {
            $this->activity👷MarkThreadAsDone = new MarkThreadAsDone($this->browser, $this->authentication);
        }

        return $this->activity👷MarkThreadAsDone;
    }

    public function activity👷MarkThreadAsRead(): MarkThreadAsRead
    {
        if ($this->activity👷MarkThreadAsRead instanceof MarkThreadAsRead === false) {
            $this->activity👷MarkThreadAsRead = new MarkThreadAsRead($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId());
        }

        return $this->activity👷MarkThreadAsRead;
    }

    public function activity👷GetThreadSubscriptionForAuthenticatedUser(): GetThreadSubscriptionForAuthenticatedUser
    {
        if ($this->activity👷GetThreadSubscriptionForAuthenticatedUser instanceof GetThreadSubscriptionForAuthenticatedUser === false) {
            $this->activity👷GetThreadSubscriptionForAuthenticatedUser = new GetThreadSubscriptionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription());
        }

        return $this->activity👷GetThreadSubscriptionForAuthenticatedUser;
    }

    public function activity👷SetThreadSubscription(): SetThreadSubscription
    {
        if ($this->activity👷SetThreadSubscription instanceof SetThreadSubscription === false) {
            $this->activity👷SetThreadSubscription = new SetThreadSubscription($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription());
        }

        return $this->activity👷SetThreadSubscription;
    }

    public function activity👷DeleteThreadSubscription(): DeleteThreadSubscription
    {
        if ($this->activity👷DeleteThreadSubscription instanceof DeleteThreadSubscription === false) {
            $this->activity👷DeleteThreadSubscription = new DeleteThreadSubscription($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription());
        }

        return $this->activity👷DeleteThreadSubscription;
    }

    public function meta👷GetOctocat(): GetOctocat
    {
        if ($this->meta👷GetOctocat instanceof GetOctocat === false) {
            $this->meta👷GetOctocat = new GetOctocat($this->browser, $this->authentication);
        }

        return $this->meta👷GetOctocat;
    }

    public function orgs👷List_(): \ApiClients\Client\GitHub\Internal\Operator\Orgs\List_
    {
        if ($this->orgs👷List_ instanceof \ApiClients\Client\GitHub\Internal\Operator\Orgs\List_ === false) {
            $this->orgs👷List_ = new \ApiClients\Client\GitHub\Internal\Operator\Orgs\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Organizations());
        }

        return $this->orgs👷List_;
    }

    public function billing👷GetGithubBillingUsageReportOrg(): GetGithubBillingUsageReportOrg
    {
        if ($this->billing👷GetGithubBillingUsageReportOrg instanceof GetGithubBillingUsageReportOrg === false) {
            $this->billing👷GetGithubBillingUsageReportOrg = new GetGithubBillingUsageReportOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Organizations🌀Org🌀Settings🌀Billing🌀Usage());
        }

        return $this->billing👷GetGithubBillingUsageReportOrg;
    }

    public function orgs👷Get(): \ApiClients\Client\GitHub\Internal\Operator\Orgs\Get
    {
        if ($this->orgs👷Get instanceof \ApiClients\Client\GitHub\Internal\Operator\Orgs\Get === false) {
            $this->orgs👷Get = new \ApiClients\Client\GitHub\Internal\Operator\Orgs\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());
        }

        return $this->orgs👷Get;
    }

    public function orgs👷Delete(): \ApiClients\Client\GitHub\Internal\Operator\Orgs\Delete
    {
        if ($this->orgs👷Delete instanceof \ApiClients\Client\GitHub\Internal\Operator\Orgs\Delete === false) {
            $this->orgs👷Delete = new \ApiClients\Client\GitHub\Internal\Operator\Orgs\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());
        }

        return $this->orgs👷Delete;
    }

    public function orgs👷Update(): \ApiClients\Client\GitHub\Internal\Operator\Orgs\Update
    {
        if ($this->orgs👷Update instanceof \ApiClients\Client\GitHub\Internal\Operator\Orgs\Update === false) {
            $this->orgs👷Update = new \ApiClients\Client\GitHub\Internal\Operator\Orgs\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());
        }

        return $this->orgs👷Update;
    }

    public function actions👷GetActionsCacheUsageForOrg(): GetActionsCacheUsageForOrg
    {
        if ($this->actions👷GetActionsCacheUsageForOrg instanceof GetActionsCacheUsageForOrg === false) {
            $this->actions👷GetActionsCacheUsageForOrg = new GetActionsCacheUsageForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage());
        }

        return $this->actions👷GetActionsCacheUsageForOrg;
    }

    public function actions👷GetActionsCacheUsageByRepoForOrg(): GetActionsCacheUsageByRepoForOrg
    {
        if ($this->actions👷GetActionsCacheUsageByRepoForOrg instanceof GetActionsCacheUsageByRepoForOrg === false) {
            $this->actions👷GetActionsCacheUsageByRepoForOrg = new GetActionsCacheUsageByRepoForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository());
        }

        return $this->actions👷GetActionsCacheUsageByRepoForOrg;
    }

    public function oidc👷GetOidcCustomSubTemplateForOrg(): GetOidcCustomSubTemplateForOrg
    {
        if ($this->oidc👷GetOidcCustomSubTemplateForOrg instanceof GetOidcCustomSubTemplateForOrg === false) {
            $this->oidc👷GetOidcCustomSubTemplateForOrg = new GetOidcCustomSubTemplateForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub());
        }

        return $this->oidc👷GetOidcCustomSubTemplateForOrg;
    }

    public function oidc👷UpdateOidcCustomSubTemplateForOrg(): UpdateOidcCustomSubTemplateForOrg
    {
        if ($this->oidc👷UpdateOidcCustomSubTemplateForOrg instanceof UpdateOidcCustomSubTemplateForOrg === false) {
            $this->oidc👷UpdateOidcCustomSubTemplateForOrg = new UpdateOidcCustomSubTemplateForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub());
        }

        return $this->oidc👷UpdateOidcCustomSubTemplateForOrg;
    }

    public function actions👷GetGithubActionsPermissionsOrganization(): GetGithubActionsPermissionsOrganization
    {
        if ($this->actions👷GetGithubActionsPermissionsOrganization instanceof GetGithubActionsPermissionsOrganization === false) {
            $this->actions👷GetGithubActionsPermissionsOrganization = new GetGithubActionsPermissionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions());
        }

        return $this->actions👷GetGithubActionsPermissionsOrganization;
    }

    public function actions👷SetGithubActionsPermissionsOrganization(): SetGithubActionsPermissionsOrganization
    {
        if ($this->actions👷SetGithubActionsPermissionsOrganization instanceof SetGithubActionsPermissionsOrganization === false) {
            $this->actions👷SetGithubActionsPermissionsOrganization = new SetGithubActionsPermissionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetGithubActionsPermissionsOrganization;
    }

    public function actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization(): ListSelectedRepositoriesEnabledGithubActionsOrganization
    {
        if ($this->actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization instanceof ListSelectedRepositoriesEnabledGithubActionsOrganization === false) {
            $this->actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization = new ListSelectedRepositoriesEnabledGithubActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories());
        }

        return $this->actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization;
    }

    public function actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization(): SetSelectedRepositoriesEnabledGithubActionsOrganization
    {
        if ($this->actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization instanceof SetSelectedRepositoriesEnabledGithubActionsOrganization === false) {
            $this->actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization = new SetSelectedRepositoriesEnabledGithubActionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization;
    }

    public function actions👷EnableSelectedRepositoryGithubActionsOrganization(): EnableSelectedRepositoryGithubActionsOrganization
    {
        if ($this->actions👷EnableSelectedRepositoryGithubActionsOrganization instanceof EnableSelectedRepositoryGithubActionsOrganization === false) {
            $this->actions👷EnableSelectedRepositoryGithubActionsOrganization = new EnableSelectedRepositoryGithubActionsOrganization($this->browser, $this->authentication);
        }

        return $this->actions👷EnableSelectedRepositoryGithubActionsOrganization;
    }

    public function actions👷DisableSelectedRepositoryGithubActionsOrganization(): DisableSelectedRepositoryGithubActionsOrganization
    {
        if ($this->actions👷DisableSelectedRepositoryGithubActionsOrganization instanceof DisableSelectedRepositoryGithubActionsOrganization === false) {
            $this->actions👷DisableSelectedRepositoryGithubActionsOrganization = new DisableSelectedRepositoryGithubActionsOrganization($this->browser, $this->authentication);
        }

        return $this->actions👷DisableSelectedRepositoryGithubActionsOrganization;
    }

    public function actions👷GetAllowedActionsOrganization(): GetAllowedActionsOrganization
    {
        if ($this->actions👷GetAllowedActionsOrganization instanceof GetAllowedActionsOrganization === false) {
            $this->actions👷GetAllowedActionsOrganization = new GetAllowedActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->actions👷GetAllowedActionsOrganization;
    }

    public function actions👷SetAllowedActionsOrganization(): SetAllowedActionsOrganization
    {
        if ($this->actions👷SetAllowedActionsOrganization instanceof SetAllowedActionsOrganization === false) {
            $this->actions👷SetAllowedActionsOrganization = new SetAllowedActionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetAllowedActionsOrganization;
    }

    public function actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization(): GetGithubActionsDefaultWorkflowPermissionsOrganization
    {
        if ($this->actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization instanceof GetGithubActionsDefaultWorkflowPermissionsOrganization === false) {
            $this->actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization = new GetGithubActionsDefaultWorkflowPermissionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow());
        }

        return $this->actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization;
    }

    public function actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization(): SetGithubActionsDefaultWorkflowPermissionsOrganization
    {
        if ($this->actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization instanceof SetGithubActionsDefaultWorkflowPermissionsOrganization === false) {
            $this->actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization = new SetGithubActionsDefaultWorkflowPermissionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization;
    }

    public function actions👷ListSelfHostedRunnerGroupsForOrg(): ListSelfHostedRunnerGroupsForOrg
    {
        if ($this->actions👷ListSelfHostedRunnerGroupsForOrg instanceof ListSelfHostedRunnerGroupsForOrg === false) {
            $this->actions👷ListSelfHostedRunnerGroupsForOrg = new ListSelfHostedRunnerGroupsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups());
        }

        return $this->actions👷ListSelfHostedRunnerGroupsForOrg;
    }

    public function actions👷CreateSelfHostedRunnerGroupForOrg(): CreateSelfHostedRunnerGroupForOrg
    {
        if ($this->actions👷CreateSelfHostedRunnerGroupForOrg instanceof CreateSelfHostedRunnerGroupForOrg === false) {
            $this->actions👷CreateSelfHostedRunnerGroupForOrg = new CreateSelfHostedRunnerGroupForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups());
        }

        return $this->actions👷CreateSelfHostedRunnerGroupForOrg;
    }

    public function actions👷GetSelfHostedRunnerGroupForOrg(): GetSelfHostedRunnerGroupForOrg
    {
        if ($this->actions👷GetSelfHostedRunnerGroupForOrg instanceof GetSelfHostedRunnerGroupForOrg === false) {
            $this->actions👷GetSelfHostedRunnerGroupForOrg = new GetSelfHostedRunnerGroupForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId());
        }

        return $this->actions👷GetSelfHostedRunnerGroupForOrg;
    }

    public function actions👷DeleteSelfHostedRunnerGroupFromOrg(): DeleteSelfHostedRunnerGroupFromOrg
    {
        if ($this->actions👷DeleteSelfHostedRunnerGroupFromOrg instanceof DeleteSelfHostedRunnerGroupFromOrg === false) {
            $this->actions👷DeleteSelfHostedRunnerGroupFromOrg = new DeleteSelfHostedRunnerGroupFromOrg($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteSelfHostedRunnerGroupFromOrg;
    }

    public function actions👷UpdateSelfHostedRunnerGroupForOrg(): UpdateSelfHostedRunnerGroupForOrg
    {
        if ($this->actions👷UpdateSelfHostedRunnerGroupForOrg instanceof UpdateSelfHostedRunnerGroupForOrg === false) {
            $this->actions👷UpdateSelfHostedRunnerGroupForOrg = new UpdateSelfHostedRunnerGroupForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId());
        }

        return $this->actions👷UpdateSelfHostedRunnerGroupForOrg;
    }

    public function actions👷ListRepoAccessToSelfHostedRunnerGroupInOrg(): ListRepoAccessToSelfHostedRunnerGroupInOrg
    {
        if ($this->actions👷ListRepoAccessToSelfHostedRunnerGroupInOrg instanceof ListRepoAccessToSelfHostedRunnerGroupInOrg === false) {
            $this->actions👷ListRepoAccessToSelfHostedRunnerGroupInOrg = new ListRepoAccessToSelfHostedRunnerGroupInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories());
        }

        return $this->actions👷ListRepoAccessToSelfHostedRunnerGroupInOrg;
    }

    public function actions👷SetRepoAccessToSelfHostedRunnerGroupInOrg(): SetRepoAccessToSelfHostedRunnerGroupInOrg
    {
        if ($this->actions👷SetRepoAccessToSelfHostedRunnerGroupInOrg instanceof SetRepoAccessToSelfHostedRunnerGroupInOrg === false) {
            $this->actions👷SetRepoAccessToSelfHostedRunnerGroupInOrg = new SetRepoAccessToSelfHostedRunnerGroupInOrg($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetRepoAccessToSelfHostedRunnerGroupInOrg;
    }

    public function actions👷AddRepoAccessToSelfHostedRunnerGroupInOrg(): AddRepoAccessToSelfHostedRunnerGroupInOrg
    {
        if ($this->actions👷AddRepoAccessToSelfHostedRunnerGroupInOrg instanceof AddRepoAccessToSelfHostedRunnerGroupInOrg === false) {
            $this->actions👷AddRepoAccessToSelfHostedRunnerGroupInOrg = new AddRepoAccessToSelfHostedRunnerGroupInOrg($this->browser, $this->authentication);
        }

        return $this->actions👷AddRepoAccessToSelfHostedRunnerGroupInOrg;
    }

    public function actions👷RemoveRepoAccessToSelfHostedRunnerGroupInOrg(): RemoveRepoAccessToSelfHostedRunnerGroupInOrg
    {
        if ($this->actions👷RemoveRepoAccessToSelfHostedRunnerGroupInOrg instanceof RemoveRepoAccessToSelfHostedRunnerGroupInOrg === false) {
            $this->actions👷RemoveRepoAccessToSelfHostedRunnerGroupInOrg = new RemoveRepoAccessToSelfHostedRunnerGroupInOrg($this->browser, $this->authentication);
        }

        return $this->actions👷RemoveRepoAccessToSelfHostedRunnerGroupInOrg;
    }

    public function actions👷ListSelfHostedRunnersInGroupForOrg(): ListSelfHostedRunnersInGroupForOrg
    {
        if ($this->actions👷ListSelfHostedRunnersInGroupForOrg instanceof ListSelfHostedRunnersInGroupForOrg === false) {
            $this->actions👷ListSelfHostedRunnersInGroupForOrg = new ListSelfHostedRunnersInGroupForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners());
        }

        return $this->actions👷ListSelfHostedRunnersInGroupForOrg;
    }

    public function actions👷SetSelfHostedRunnersInGroupForOrg(): SetSelfHostedRunnersInGroupForOrg
    {
        if ($this->actions👷SetSelfHostedRunnersInGroupForOrg instanceof SetSelfHostedRunnersInGroupForOrg === false) {
            $this->actions👷SetSelfHostedRunnersInGroupForOrg = new SetSelfHostedRunnersInGroupForOrg($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetSelfHostedRunnersInGroupForOrg;
    }

    public function actions👷AddSelfHostedRunnerToGroupForOrg(): AddSelfHostedRunnerToGroupForOrg
    {
        if ($this->actions👷AddSelfHostedRunnerToGroupForOrg instanceof AddSelfHostedRunnerToGroupForOrg === false) {
            $this->actions👷AddSelfHostedRunnerToGroupForOrg = new AddSelfHostedRunnerToGroupForOrg($this->browser, $this->authentication);
        }

        return $this->actions👷AddSelfHostedRunnerToGroupForOrg;
    }

    public function actions👷RemoveSelfHostedRunnerFromGroupForOrg(): RemoveSelfHostedRunnerFromGroupForOrg
    {
        if ($this->actions👷RemoveSelfHostedRunnerFromGroupForOrg instanceof RemoveSelfHostedRunnerFromGroupForOrg === false) {
            $this->actions👷RemoveSelfHostedRunnerFromGroupForOrg = new RemoveSelfHostedRunnerFromGroupForOrg($this->browser, $this->authentication);
        }

        return $this->actions👷RemoveSelfHostedRunnerFromGroupForOrg;
    }

    public function actions👷ListSelfHostedRunnersForOrg(): ListSelfHostedRunnersForOrg
    {
        if ($this->actions👷ListSelfHostedRunnersForOrg instanceof ListSelfHostedRunnersForOrg === false) {
            $this->actions👷ListSelfHostedRunnersForOrg = new ListSelfHostedRunnersForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners());
        }

        return $this->actions👷ListSelfHostedRunnersForOrg;
    }

    public function actions👷ListRunnerApplicationsForOrg(): ListRunnerApplicationsForOrg
    {
        if ($this->actions👷ListRunnerApplicationsForOrg instanceof ListRunnerApplicationsForOrg === false) {
            $this->actions👷ListRunnerApplicationsForOrg = new ListRunnerApplicationsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads());
        }

        return $this->actions👷ListRunnerApplicationsForOrg;
    }

    public function actions👷GenerateRunnerJitconfigForOrg(): GenerateRunnerJitconfigForOrg
    {
        if ($this->actions👷GenerateRunnerJitconfigForOrg instanceof GenerateRunnerJitconfigForOrg === false) {
            $this->actions👷GenerateRunnerJitconfigForOrg = new GenerateRunnerJitconfigForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀GenerateJitconfig());
        }

        return $this->actions👷GenerateRunnerJitconfigForOrg;
    }

    public function actions👷CreateRegistrationTokenForOrg(): CreateRegistrationTokenForOrg
    {
        if ($this->actions👷CreateRegistrationTokenForOrg instanceof CreateRegistrationTokenForOrg === false) {
            $this->actions👷CreateRegistrationTokenForOrg = new CreateRegistrationTokenForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken());
        }

        return $this->actions👷CreateRegistrationTokenForOrg;
    }

    public function actions👷CreateRemoveTokenForOrg(): CreateRemoveTokenForOrg
    {
        if ($this->actions👷CreateRemoveTokenForOrg instanceof CreateRemoveTokenForOrg === false) {
            $this->actions👷CreateRemoveTokenForOrg = new CreateRemoveTokenForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken());
        }

        return $this->actions👷CreateRemoveTokenForOrg;
    }

    public function actions👷GetSelfHostedRunnerForOrg(): GetSelfHostedRunnerForOrg
    {
        if ($this->actions👷GetSelfHostedRunnerForOrg instanceof GetSelfHostedRunnerForOrg === false) {
            $this->actions👷GetSelfHostedRunnerForOrg = new GetSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->actions👷GetSelfHostedRunnerForOrg;
    }

    public function actions👷DeleteSelfHostedRunnerFromOrg(): DeleteSelfHostedRunnerFromOrg
    {
        if ($this->actions👷DeleteSelfHostedRunnerFromOrg instanceof DeleteSelfHostedRunnerFromOrg === false) {
            $this->actions👷DeleteSelfHostedRunnerFromOrg = new DeleteSelfHostedRunnerFromOrg($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteSelfHostedRunnerFromOrg;
    }

    public function actions👷ListLabelsForSelfHostedRunnerForOrg(): ListLabelsForSelfHostedRunnerForOrg
    {
        if ($this->actions👷ListLabelsForSelfHostedRunnerForOrg instanceof ListLabelsForSelfHostedRunnerForOrg === false) {
            $this->actions👷ListLabelsForSelfHostedRunnerForOrg = new ListLabelsForSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷ListLabelsForSelfHostedRunnerForOrg;
    }

    public function actions👷SetCustomLabelsForSelfHostedRunnerForOrg(): SetCustomLabelsForSelfHostedRunnerForOrg
    {
        if ($this->actions👷SetCustomLabelsForSelfHostedRunnerForOrg instanceof SetCustomLabelsForSelfHostedRunnerForOrg === false) {
            $this->actions👷SetCustomLabelsForSelfHostedRunnerForOrg = new SetCustomLabelsForSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷SetCustomLabelsForSelfHostedRunnerForOrg;
    }

    public function actions👷AddCustomLabelsToSelfHostedRunnerForOrg(): AddCustomLabelsToSelfHostedRunnerForOrg
    {
        if ($this->actions👷AddCustomLabelsToSelfHostedRunnerForOrg instanceof AddCustomLabelsToSelfHostedRunnerForOrg === false) {
            $this->actions👷AddCustomLabelsToSelfHostedRunnerForOrg = new AddCustomLabelsToSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷AddCustomLabelsToSelfHostedRunnerForOrg;
    }

    public function actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForOrg(): RemoveAllCustomLabelsFromSelfHostedRunnerForOrg
    {
        if ($this->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForOrg instanceof RemoveAllCustomLabelsFromSelfHostedRunnerForOrg === false) {
            $this->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForOrg = new RemoveAllCustomLabelsFromSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForOrg;
    }

    public function actions👷RemoveCustomLabelFromSelfHostedRunnerForOrg(): RemoveCustomLabelFromSelfHostedRunnerForOrg
    {
        if ($this->actions👷RemoveCustomLabelFromSelfHostedRunnerForOrg instanceof RemoveCustomLabelFromSelfHostedRunnerForOrg === false) {
            $this->actions👷RemoveCustomLabelFromSelfHostedRunnerForOrg = new RemoveCustomLabelFromSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name());
        }

        return $this->actions👷RemoveCustomLabelFromSelfHostedRunnerForOrg;
    }

    public function actions👷ListOrgSecrets(): ListOrgSecrets
    {
        if ($this->actions👷ListOrgSecrets instanceof ListOrgSecrets === false) {
            $this->actions👷ListOrgSecrets = new ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets());
        }

        return $this->actions👷ListOrgSecrets;
    }

    public function actions👷GetOrgPublicKey(): GetOrgPublicKey
    {
        if ($this->actions👷GetOrgPublicKey instanceof GetOrgPublicKey === false) {
            $this->actions👷GetOrgPublicKey = new GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey());
        }

        return $this->actions👷GetOrgPublicKey;
    }

    public function actions👷GetOrgSecret(): GetOrgSecret
    {
        if ($this->actions👷GetOrgSecret instanceof GetOrgSecret === false) {
            $this->actions👷GetOrgSecret = new GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->actions👷GetOrgSecret;
    }

    public function actions👷CreateOrUpdateOrgSecret(): CreateOrUpdateOrgSecret
    {
        if ($this->actions👷CreateOrUpdateOrgSecret instanceof CreateOrUpdateOrgSecret === false) {
            $this->actions👷CreateOrUpdateOrgSecret = new CreateOrUpdateOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->actions👷CreateOrUpdateOrgSecret;
    }

    public function actions👷DeleteOrgSecret(): DeleteOrgSecret
    {
        if ($this->actions👷DeleteOrgSecret instanceof DeleteOrgSecret === false) {
            $this->actions👷DeleteOrgSecret = new DeleteOrgSecret($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteOrgSecret;
    }

    public function actions👷ListSelectedReposForOrgSecret(): ListSelectedReposForOrgSecret
    {
        if ($this->actions👷ListSelectedReposForOrgSecret instanceof ListSelectedReposForOrgSecret === false) {
            $this->actions👷ListSelectedReposForOrgSecret = new ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->actions👷ListSelectedReposForOrgSecret;
    }

    public function actions👷SetSelectedReposForOrgSecret(): SetSelectedReposForOrgSecret
    {
        if ($this->actions👷SetSelectedReposForOrgSecret instanceof SetSelectedReposForOrgSecret === false) {
            $this->actions👷SetSelectedReposForOrgSecret = new SetSelectedReposForOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetSelectedReposForOrgSecret;
    }

    public function actions👷AddSelectedRepoToOrgSecret(): AddSelectedRepoToOrgSecret
    {
        if ($this->actions👷AddSelectedRepoToOrgSecret instanceof AddSelectedRepoToOrgSecret === false) {
            $this->actions👷AddSelectedRepoToOrgSecret = new AddSelectedRepoToOrgSecret($this->browser, $this->authentication);
        }

        return $this->actions👷AddSelectedRepoToOrgSecret;
    }

    public function actions👷RemoveSelectedRepoFromOrgSecret(): RemoveSelectedRepoFromOrgSecret
    {
        if ($this->actions👷RemoveSelectedRepoFromOrgSecret instanceof RemoveSelectedRepoFromOrgSecret === false) {
            $this->actions👷RemoveSelectedRepoFromOrgSecret = new RemoveSelectedRepoFromOrgSecret($this->browser, $this->authentication);
        }

        return $this->actions👷RemoveSelectedRepoFromOrgSecret;
    }

    public function actions👷ListOrgVariables(): ListOrgVariables
    {
        if ($this->actions👷ListOrgVariables instanceof ListOrgVariables === false) {
            $this->actions👷ListOrgVariables = new ListOrgVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables());
        }

        return $this->actions👷ListOrgVariables;
    }

    public function actions👷CreateOrgVariable(): CreateOrgVariable
    {
        if ($this->actions👷CreateOrgVariable instanceof CreateOrgVariable === false) {
            $this->actions👷CreateOrgVariable = new CreateOrgVariable($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables());
        }

        return $this->actions👷CreateOrgVariable;
    }

    public function actions👷GetOrgVariable(): GetOrgVariable
    {
        if ($this->actions👷GetOrgVariable instanceof GetOrgVariable === false) {
            $this->actions👷GetOrgVariable = new GetOrgVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name());
        }

        return $this->actions👷GetOrgVariable;
    }

    public function actions👷DeleteOrgVariable(): DeleteOrgVariable
    {
        if ($this->actions👷DeleteOrgVariable instanceof DeleteOrgVariable === false) {
            $this->actions👷DeleteOrgVariable = new DeleteOrgVariable($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteOrgVariable;
    }

    public function actions👷UpdateOrgVariable(): UpdateOrgVariable
    {
        if ($this->actions👷UpdateOrgVariable instanceof UpdateOrgVariable === false) {
            $this->actions👷UpdateOrgVariable = new UpdateOrgVariable($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷UpdateOrgVariable;
    }

    public function actions👷ListSelectedReposForOrgVariable(): ListSelectedReposForOrgVariable
    {
        if ($this->actions👷ListSelectedReposForOrgVariable instanceof ListSelectedReposForOrgVariable === false) {
            $this->actions👷ListSelectedReposForOrgVariable = new ListSelectedReposForOrgVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories());
        }

        return $this->actions👷ListSelectedReposForOrgVariable;
    }

    public function actions👷SetSelectedReposForOrgVariable(): SetSelectedReposForOrgVariable
    {
        if ($this->actions👷SetSelectedReposForOrgVariable instanceof SetSelectedReposForOrgVariable === false) {
            $this->actions👷SetSelectedReposForOrgVariable = new SetSelectedReposForOrgVariable($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetSelectedReposForOrgVariable;
    }

    public function actions👷AddSelectedRepoToOrgVariable(): AddSelectedRepoToOrgVariable
    {
        if ($this->actions👷AddSelectedRepoToOrgVariable instanceof AddSelectedRepoToOrgVariable === false) {
            $this->actions👷AddSelectedRepoToOrgVariable = new AddSelectedRepoToOrgVariable($this->browser, $this->authentication);
        }

        return $this->actions👷AddSelectedRepoToOrgVariable;
    }

    public function actions👷RemoveSelectedRepoFromOrgVariable(): RemoveSelectedRepoFromOrgVariable
    {
        if ($this->actions👷RemoveSelectedRepoFromOrgVariable instanceof RemoveSelectedRepoFromOrgVariable === false) {
            $this->actions👷RemoveSelectedRepoFromOrgVariable = new RemoveSelectedRepoFromOrgVariable($this->browser, $this->authentication);
        }

        return $this->actions👷RemoveSelectedRepoFromOrgVariable;
    }

    public function orgs👷ListAttestations(): ListAttestations
    {
        if ($this->orgs👷ListAttestations instanceof ListAttestations === false) {
            $this->orgs👷ListAttestations = new ListAttestations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Attestations🌀SubjectDigest());
        }

        return $this->orgs👷ListAttestations;
    }

    public function orgs👷ListBlockedUsers(): ListBlockedUsers
    {
        if ($this->orgs👷ListBlockedUsers instanceof ListBlockedUsers === false) {
            $this->orgs👷ListBlockedUsers = new ListBlockedUsers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks());
        }

        return $this->orgs👷ListBlockedUsers;
    }

    public function orgs👷CheckBlockedUser(): CheckBlockedUser
    {
        if ($this->orgs👷CheckBlockedUser instanceof CheckBlockedUser === false) {
            $this->orgs👷CheckBlockedUser = new CheckBlockedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks🌀Username());
        }

        return $this->orgs👷CheckBlockedUser;
    }

    public function orgs👷BlockUser(): BlockUser
    {
        if ($this->orgs👷BlockUser instanceof BlockUser === false) {
            $this->orgs👷BlockUser = new BlockUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks🌀Username());
        }

        return $this->orgs👷BlockUser;
    }

    public function orgs👷UnblockUser(): UnblockUser
    {
        if ($this->orgs👷UnblockUser instanceof UnblockUser === false) {
            $this->orgs👷UnblockUser = new UnblockUser($this->browser, $this->authentication);
        }

        return $this->orgs👷UnblockUser;
    }

    public function codeScanning👷ListAlertsForOrg(): ListAlertsForOrg
    {
        if ($this->codeScanning👷ListAlertsForOrg instanceof ListAlertsForOrg === false) {
            $this->codeScanning👷ListAlertsForOrg = new ListAlertsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeScanning🌀Alerts());
        }

        return $this->codeScanning👷ListAlertsForOrg;
    }

    public function codeSecurity👷GetConfigurationsForOrg(): GetConfigurationsForOrg
    {
        if ($this->codeSecurity👷GetConfigurationsForOrg instanceof GetConfigurationsForOrg === false) {
            $this->codeSecurity👷GetConfigurationsForOrg = new GetConfigurationsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations());
        }

        return $this->codeSecurity👷GetConfigurationsForOrg;
    }

    public function codeSecurity👷CreateConfiguration(): CreateConfiguration
    {
        if ($this->codeSecurity👷CreateConfiguration instanceof CreateConfiguration === false) {
            $this->codeSecurity👷CreateConfiguration = new CreateConfiguration($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations());
        }

        return $this->codeSecurity👷CreateConfiguration;
    }

    public function codeSecurity👷GetDefaultConfigurations(): GetDefaultConfigurations
    {
        if ($this->codeSecurity👷GetDefaultConfigurations instanceof GetDefaultConfigurations === false) {
            $this->codeSecurity👷GetDefaultConfigurations = new GetDefaultConfigurations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀Defaults());
        }

        return $this->codeSecurity👷GetDefaultConfigurations;
    }

    public function codeSecurity👷DetachConfiguration(): DetachConfiguration
    {
        if ($this->codeSecurity👷DetachConfiguration instanceof DetachConfiguration === false) {
            $this->codeSecurity👷DetachConfiguration = new DetachConfiguration($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀Detach());
        }

        return $this->codeSecurity👷DetachConfiguration;
    }

    public function codeSecurity👷GetConfiguration(): GetConfiguration
    {
        if ($this->codeSecurity👷GetConfiguration instanceof GetConfiguration === false) {
            $this->codeSecurity👷GetConfiguration = new GetConfiguration($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId());
        }

        return $this->codeSecurity👷GetConfiguration;
    }

    public function codeSecurity👷DeleteConfiguration(): DeleteConfiguration
    {
        if ($this->codeSecurity👷DeleteConfiguration instanceof DeleteConfiguration === false) {
            $this->codeSecurity👷DeleteConfiguration = new DeleteConfiguration($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId());
        }

        return $this->codeSecurity👷DeleteConfiguration;
    }

    public function codeSecurity👷UpdateConfiguration(): UpdateConfiguration
    {
        if ($this->codeSecurity👷UpdateConfiguration instanceof UpdateConfiguration === false) {
            $this->codeSecurity👷UpdateConfiguration = new UpdateConfiguration($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId());
        }

        return $this->codeSecurity👷UpdateConfiguration;
    }

    public function codeSecurity👷AttachConfiguration(): AttachConfiguration
    {
        if ($this->codeSecurity👷AttachConfiguration instanceof AttachConfiguration === false) {
            $this->codeSecurity👷AttachConfiguration = new AttachConfiguration($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Attach());
        }

        return $this->codeSecurity👷AttachConfiguration;
    }

    public function codeSecurity👷SetConfigurationAsDefault(): SetConfigurationAsDefault
    {
        if ($this->codeSecurity👷SetConfigurationAsDefault instanceof SetConfigurationAsDefault === false) {
            $this->codeSecurity👷SetConfigurationAsDefault = new SetConfigurationAsDefault($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Defaults());
        }

        return $this->codeSecurity👷SetConfigurationAsDefault;
    }

    public function codeSecurity👷GetRepositoriesForConfiguration(): GetRepositoriesForConfiguration
    {
        if ($this->codeSecurity👷GetRepositoriesForConfiguration instanceof GetRepositoriesForConfiguration === false) {
            $this->codeSecurity👷GetRepositoriesForConfiguration = new GetRepositoriesForConfiguration($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Repositories());
        }

        return $this->codeSecurity👷GetRepositoriesForConfiguration;
    }

    public function codespaces👷ListInOrganization(): ListInOrganization
    {
        if ($this->codespaces👷ListInOrganization instanceof ListInOrganization === false) {
            $this->codespaces👷ListInOrganization = new ListInOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces());
        }

        return $this->codespaces👷ListInOrganization;
    }

    public function codespaces👷SetCodespacesAccess(): SetCodespacesAccess
    {
        if ($this->codespaces👷SetCodespacesAccess instanceof SetCodespacesAccess === false) {
            $this->codespaces👷SetCodespacesAccess = new SetCodespacesAccess($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Access());
        }

        return $this->codespaces👷SetCodespacesAccess;
    }

    public function codespaces👷SetCodespacesAccessUsers(): SetCodespacesAccessUsers
    {
        if ($this->codespaces👷SetCodespacesAccessUsers instanceof SetCodespacesAccessUsers === false) {
            $this->codespaces👷SetCodespacesAccessUsers = new SetCodespacesAccessUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Access🌀SelectedUsers());
        }

        return $this->codespaces👷SetCodespacesAccessUsers;
    }

    public function codespaces👷DeleteCodespacesAccessUsers(): DeleteCodespacesAccessUsers
    {
        if ($this->codespaces👷DeleteCodespacesAccessUsers instanceof DeleteCodespacesAccessUsers === false) {
            $this->codespaces👷DeleteCodespacesAccessUsers = new DeleteCodespacesAccessUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Access🌀SelectedUsers());
        }

        return $this->codespaces👷DeleteCodespacesAccessUsers;
    }

    public function codespaces👷ListOrgSecrets(): \ApiClients\Client\GitHub\Internal\Operator\Codespaces\ListOrgSecrets
    {
        if ($this->codespaces👷ListOrgSecrets instanceof \ApiClients\Client\GitHub\Internal\Operator\Codespaces\ListOrgSecrets === false) {
            $this->codespaces👷ListOrgSecrets = new \ApiClients\Client\GitHub\Internal\Operator\Codespaces\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets());
        }

        return $this->codespaces👷ListOrgSecrets;
    }

    public function codespaces👷GetOrgPublicKey(): \ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetOrgPublicKey
    {
        if ($this->codespaces👷GetOrgPublicKey instanceof \ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetOrgPublicKey === false) {
            $this->codespaces👷GetOrgPublicKey = new \ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey());
        }

        return $this->codespaces👷GetOrgPublicKey;
    }

    public function codespaces👷GetOrgSecret(): \ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetOrgSecret
    {
        if ($this->codespaces👷GetOrgSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetOrgSecret === false) {
            $this->codespaces👷GetOrgSecret = new \ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷GetOrgSecret;
    }

    public function codespaces👷CreateOrUpdateOrgSecret(): \ApiClients\Client\GitHub\Internal\Operator\Codespaces\CreateOrUpdateOrgSecret
    {
        if ($this->codespaces👷CreateOrUpdateOrgSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Codespaces\CreateOrUpdateOrgSecret === false) {
            $this->codespaces👷CreateOrUpdateOrgSecret = new \ApiClients\Client\GitHub\Internal\Operator\Codespaces\CreateOrUpdateOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷CreateOrUpdateOrgSecret;
    }

    public function codespaces👷DeleteOrgSecret(): \ApiClients\Client\GitHub\Internal\Operator\Codespaces\DeleteOrgSecret
    {
        if ($this->codespaces👷DeleteOrgSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Codespaces\DeleteOrgSecret === false) {
            $this->codespaces👷DeleteOrgSecret = new \ApiClients\Client\GitHub\Internal\Operator\Codespaces\DeleteOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷DeleteOrgSecret;
    }

    public function codespaces👷ListSelectedReposForOrgSecret(): \ApiClients\Client\GitHub\Internal\Operator\Codespaces\ListSelectedReposForOrgSecret
    {
        if ($this->codespaces👷ListSelectedReposForOrgSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Codespaces\ListSelectedReposForOrgSecret === false) {
            $this->codespaces👷ListSelectedReposForOrgSecret = new \ApiClients\Client\GitHub\Internal\Operator\Codespaces\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->codespaces👷ListSelectedReposForOrgSecret;
    }

    public function codespaces👷SetSelectedReposForOrgSecret(): \ApiClients\Client\GitHub\Internal\Operator\Codespaces\SetSelectedReposForOrgSecret
    {
        if ($this->codespaces👷SetSelectedReposForOrgSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Codespaces\SetSelectedReposForOrgSecret === false) {
            $this->codespaces👷SetSelectedReposForOrgSecret = new \ApiClients\Client\GitHub\Internal\Operator\Codespaces\SetSelectedReposForOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->codespaces👷SetSelectedReposForOrgSecret;
    }

    public function codespaces👷AddSelectedRepoToOrgSecret(): \ApiClients\Client\GitHub\Internal\Operator\Codespaces\AddSelectedRepoToOrgSecret
    {
        if ($this->codespaces👷AddSelectedRepoToOrgSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Codespaces\AddSelectedRepoToOrgSecret === false) {
            $this->codespaces👷AddSelectedRepoToOrgSecret = new \ApiClients\Client\GitHub\Internal\Operator\Codespaces\AddSelectedRepoToOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->codespaces👷AddSelectedRepoToOrgSecret;
    }

    public function codespaces👷RemoveSelectedRepoFromOrgSecret(): \ApiClients\Client\GitHub\Internal\Operator\Codespaces\RemoveSelectedRepoFromOrgSecret
    {
        if ($this->codespaces👷RemoveSelectedRepoFromOrgSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Codespaces\RemoveSelectedRepoFromOrgSecret === false) {
            $this->codespaces👷RemoveSelectedRepoFromOrgSecret = new \ApiClients\Client\GitHub\Internal\Operator\Codespaces\RemoveSelectedRepoFromOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->codespaces👷RemoveSelectedRepoFromOrgSecret;
    }

    public function copilot👷GetCopilotOrganizationDetails(): GetCopilotOrganizationDetails
    {
        if ($this->copilot👷GetCopilotOrganizationDetails instanceof GetCopilotOrganizationDetails === false) {
            $this->copilot👷GetCopilotOrganizationDetails = new GetCopilotOrganizationDetails($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing());
        }

        return $this->copilot👷GetCopilotOrganizationDetails;
    }

    public function copilot👷ListCopilotSeats(): ListCopilotSeats
    {
        if ($this->copilot👷ListCopilotSeats instanceof ListCopilotSeats === false) {
            $this->copilot👷ListCopilotSeats = new ListCopilotSeats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats());
        }

        return $this->copilot👷ListCopilotSeats;
    }

    public function copilot👷AddCopilotSeatsForTeams(): AddCopilotSeatsForTeams
    {
        if ($this->copilot👷AddCopilotSeatsForTeams instanceof AddCopilotSeatsForTeams === false) {
            $this->copilot👷AddCopilotSeatsForTeams = new AddCopilotSeatsForTeams($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams());
        }

        return $this->copilot👷AddCopilotSeatsForTeams;
    }

    public function copilot👷CancelCopilotSeatAssignmentForTeams(): CancelCopilotSeatAssignmentForTeams
    {
        if ($this->copilot👷CancelCopilotSeatAssignmentForTeams instanceof CancelCopilotSeatAssignmentForTeams === false) {
            $this->copilot👷CancelCopilotSeatAssignmentForTeams = new CancelCopilotSeatAssignmentForTeams($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams());
        }

        return $this->copilot👷CancelCopilotSeatAssignmentForTeams;
    }

    public function copilot👷AddCopilotSeatsForUsers(): AddCopilotSeatsForUsers
    {
        if ($this->copilot👷AddCopilotSeatsForUsers instanceof AddCopilotSeatsForUsers === false) {
            $this->copilot👷AddCopilotSeatsForUsers = new AddCopilotSeatsForUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers());
        }

        return $this->copilot👷AddCopilotSeatsForUsers;
    }

    public function copilot👷CancelCopilotSeatAssignmentForUsers(): CancelCopilotSeatAssignmentForUsers
    {
        if ($this->copilot👷CancelCopilotSeatAssignmentForUsers instanceof CancelCopilotSeatAssignmentForUsers === false) {
            $this->copilot👷CancelCopilotSeatAssignmentForUsers = new CancelCopilotSeatAssignmentForUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers());
        }

        return $this->copilot👷CancelCopilotSeatAssignmentForUsers;
    }

    public function copilot👷CopilotMetricsForOrganization(): CopilotMetricsForOrganization
    {
        if ($this->copilot👷CopilotMetricsForOrganization instanceof CopilotMetricsForOrganization === false) {
            $this->copilot👷CopilotMetricsForOrganization = new CopilotMetricsForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Metrics());
        }

        return $this->copilot👷CopilotMetricsForOrganization;
    }

    public function copilot👷UsageMetricsForOrg(): UsageMetricsForOrg
    {
        if ($this->copilot👷UsageMetricsForOrg instanceof UsageMetricsForOrg === false) {
            $this->copilot👷UsageMetricsForOrg = new UsageMetricsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Usage());
        }

        return $this->copilot👷UsageMetricsForOrg;
    }

    public function dependabot👷ListAlertsForOrg(): \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListAlertsForOrg
    {
        if ($this->dependabot👷ListAlertsForOrg instanceof \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListAlertsForOrg === false) {
            $this->dependabot👷ListAlertsForOrg = new \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListAlertsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Alerts());
        }

        return $this->dependabot👷ListAlertsForOrg;
    }

    public function dependabot👷ListOrgSecrets(): \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListOrgSecrets
    {
        if ($this->dependabot👷ListOrgSecrets instanceof \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListOrgSecrets === false) {
            $this->dependabot👷ListOrgSecrets = new \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets());
        }

        return $this->dependabot👷ListOrgSecrets;
    }

    public function dependabot👷GetOrgPublicKey(): \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetOrgPublicKey
    {
        if ($this->dependabot👷GetOrgPublicKey instanceof \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetOrgPublicKey === false) {
            $this->dependabot👷GetOrgPublicKey = new \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey());
        }

        return $this->dependabot👷GetOrgPublicKey;
    }

    public function dependabot👷GetOrgSecret(): \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetOrgSecret
    {
        if ($this->dependabot👷GetOrgSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetOrgSecret === false) {
            $this->dependabot👷GetOrgSecret = new \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->dependabot👷GetOrgSecret;
    }

    public function dependabot👷CreateOrUpdateOrgSecret(): \ApiClients\Client\GitHub\Internal\Operator\Dependabot\CreateOrUpdateOrgSecret
    {
        if ($this->dependabot👷CreateOrUpdateOrgSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Dependabot\CreateOrUpdateOrgSecret === false) {
            $this->dependabot👷CreateOrUpdateOrgSecret = new \ApiClients\Client\GitHub\Internal\Operator\Dependabot\CreateOrUpdateOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->dependabot👷CreateOrUpdateOrgSecret;
    }

    public function dependabot👷DeleteOrgSecret(): \ApiClients\Client\GitHub\Internal\Operator\Dependabot\DeleteOrgSecret
    {
        if ($this->dependabot👷DeleteOrgSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Dependabot\DeleteOrgSecret === false) {
            $this->dependabot👷DeleteOrgSecret = new \ApiClients\Client\GitHub\Internal\Operator\Dependabot\DeleteOrgSecret($this->browser, $this->authentication);
        }

        return $this->dependabot👷DeleteOrgSecret;
    }

    public function dependabot👷ListSelectedReposForOrgSecret(): \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListSelectedReposForOrgSecret
    {
        if ($this->dependabot👷ListSelectedReposForOrgSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListSelectedReposForOrgSecret === false) {
            $this->dependabot👷ListSelectedReposForOrgSecret = new \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->dependabot👷ListSelectedReposForOrgSecret;
    }

    public function dependabot👷SetSelectedReposForOrgSecret(): \ApiClients\Client\GitHub\Internal\Operator\Dependabot\SetSelectedReposForOrgSecret
    {
        if ($this->dependabot👷SetSelectedReposForOrgSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Dependabot\SetSelectedReposForOrgSecret === false) {
            $this->dependabot👷SetSelectedReposForOrgSecret = new \ApiClients\Client\GitHub\Internal\Operator\Dependabot\SetSelectedReposForOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->dependabot👷SetSelectedReposForOrgSecret;
    }

    public function dependabot👷AddSelectedRepoToOrgSecret(): \ApiClients\Client\GitHub\Internal\Operator\Dependabot\AddSelectedRepoToOrgSecret
    {
        if ($this->dependabot👷AddSelectedRepoToOrgSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Dependabot\AddSelectedRepoToOrgSecret === false) {
            $this->dependabot👷AddSelectedRepoToOrgSecret = new \ApiClients\Client\GitHub\Internal\Operator\Dependabot\AddSelectedRepoToOrgSecret($this->browser, $this->authentication);
        }

        return $this->dependabot👷AddSelectedRepoToOrgSecret;
    }

    public function dependabot👷RemoveSelectedRepoFromOrgSecret(): \ApiClients\Client\GitHub\Internal\Operator\Dependabot\RemoveSelectedRepoFromOrgSecret
    {
        if ($this->dependabot👷RemoveSelectedRepoFromOrgSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Dependabot\RemoveSelectedRepoFromOrgSecret === false) {
            $this->dependabot👷RemoveSelectedRepoFromOrgSecret = new \ApiClients\Client\GitHub\Internal\Operator\Dependabot\RemoveSelectedRepoFromOrgSecret($this->browser, $this->authentication);
        }

        return $this->dependabot👷RemoveSelectedRepoFromOrgSecret;
    }

    public function packages👷ListDockerMigrationConflictingPackagesForOrganization(): ListDockerMigrationConflictingPackagesForOrganization
    {
        if ($this->packages👷ListDockerMigrationConflictingPackagesForOrganization instanceof ListDockerMigrationConflictingPackagesForOrganization === false) {
            $this->packages👷ListDockerMigrationConflictingPackagesForOrganization = new ListDockerMigrationConflictingPackagesForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Docker🌀Conflicts());
        }

        return $this->packages👷ListDockerMigrationConflictingPackagesForOrganization;
    }

    public function activity👷ListPublicOrgEvents(): ListPublicOrgEvents
    {
        if ($this->activity👷ListPublicOrgEvents instanceof ListPublicOrgEvents === false) {
            $this->activity👷ListPublicOrgEvents = new ListPublicOrgEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Events());
        }

        return $this->activity👷ListPublicOrgEvents;
    }

    public function orgs👷ListFailedInvitations(): ListFailedInvitations
    {
        if ($this->orgs👷ListFailedInvitations instanceof ListFailedInvitations === false) {
            $this->orgs👷ListFailedInvitations = new ListFailedInvitations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀FailedInvitations());
        }

        return $this->orgs👷ListFailedInvitations;
    }

    public function orgs👷ListWebhooks(): ListWebhooks
    {
        if ($this->orgs👷ListWebhooks instanceof ListWebhooks === false) {
            $this->orgs👷ListWebhooks = new ListWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());
        }

        return $this->orgs👷ListWebhooks;
    }

    public function orgs👷CreateWebhook(): CreateWebhook
    {
        if ($this->orgs👷CreateWebhook instanceof CreateWebhook === false) {
            $this->orgs👷CreateWebhook = new CreateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());
        }

        return $this->orgs👷CreateWebhook;
    }

    public function orgs👷GetWebhook(): GetWebhook
    {
        if ($this->orgs👷GetWebhook instanceof GetWebhook === false) {
            $this->orgs👷GetWebhook = new GetWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->orgs👷GetWebhook;
    }

    public function orgs👷DeleteWebhook(): DeleteWebhook
    {
        if ($this->orgs👷DeleteWebhook instanceof DeleteWebhook === false) {
            $this->orgs👷DeleteWebhook = new DeleteWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->orgs👷DeleteWebhook;
    }

    public function orgs👷UpdateWebhook(): UpdateWebhook
    {
        if ($this->orgs👷UpdateWebhook instanceof UpdateWebhook === false) {
            $this->orgs👷UpdateWebhook = new UpdateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->orgs👷UpdateWebhook;
    }

    public function orgs👷GetWebhookConfigForOrg(): GetWebhookConfigForOrg
    {
        if ($this->orgs👷GetWebhookConfigForOrg instanceof GetWebhookConfigForOrg === false) {
            $this->orgs👷GetWebhookConfigForOrg = new GetWebhookConfigForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config());
        }

        return $this->orgs👷GetWebhookConfigForOrg;
    }

    public function orgs👷UpdateWebhookConfigForOrg(): UpdateWebhookConfigForOrg
    {
        if ($this->orgs👷UpdateWebhookConfigForOrg instanceof UpdateWebhookConfigForOrg === false) {
            $this->orgs👷UpdateWebhookConfigForOrg = new UpdateWebhookConfigForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config());
        }

        return $this->orgs👷UpdateWebhookConfigForOrg;
    }

    public function orgs👷ListWebhookDeliveries(): \ApiClients\Client\GitHub\Internal\Operator\Orgs\ListWebhookDeliveries
    {
        if ($this->orgs👷ListWebhookDeliveries instanceof \ApiClients\Client\GitHub\Internal\Operator\Orgs\ListWebhookDeliveries === false) {
            $this->orgs👷ListWebhookDeliveries = new \ApiClients\Client\GitHub\Internal\Operator\Orgs\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries());
        }

        return $this->orgs👷ListWebhookDeliveries;
    }

    public function orgs👷GetWebhookDelivery(): \ApiClients\Client\GitHub\Internal\Operator\Orgs\GetWebhookDelivery
    {
        if ($this->orgs👷GetWebhookDelivery instanceof \ApiClients\Client\GitHub\Internal\Operator\Orgs\GetWebhookDelivery === false) {
            $this->orgs👷GetWebhookDelivery = new \ApiClients\Client\GitHub\Internal\Operator\Orgs\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId());
        }

        return $this->orgs👷GetWebhookDelivery;
    }

    public function orgs👷RedeliverWebhookDelivery(): \ApiClients\Client\GitHub\Internal\Operator\Orgs\RedeliverWebhookDelivery
    {
        if ($this->orgs👷RedeliverWebhookDelivery instanceof \ApiClients\Client\GitHub\Internal\Operator\Orgs\RedeliverWebhookDelivery === false) {
            $this->orgs👷RedeliverWebhookDelivery = new \ApiClients\Client\GitHub\Internal\Operator\Orgs\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts());
        }

        return $this->orgs👷RedeliverWebhookDelivery;
    }

    public function orgs👷PingWebhook(): PingWebhook
    {
        if ($this->orgs👷PingWebhook instanceof PingWebhook === false) {
            $this->orgs👷PingWebhook = new PingWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings());
        }

        return $this->orgs👷PingWebhook;
    }

    public function apiInsights👷GetRouteStatsByActor(): GetRouteStatsByActor
    {
        if ($this->apiInsights👷GetRouteStatsByActor instanceof GetRouteStatsByActor === false) {
            $this->apiInsights👷GetRouteStatsByActor = new GetRouteStatsByActor($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀RouteStats🌀ActorType🌀ActorId());
        }

        return $this->apiInsights👷GetRouteStatsByActor;
    }

    public function apiInsights👷GetSubjectStats(): GetSubjectStats
    {
        if ($this->apiInsights👷GetSubjectStats instanceof GetSubjectStats === false) {
            $this->apiInsights👷GetSubjectStats = new GetSubjectStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀SubjectStats());
        }

        return $this->apiInsights👷GetSubjectStats;
    }

    public function apiInsights👷GetSummaryStats(): GetSummaryStats
    {
        if ($this->apiInsights👷GetSummaryStats instanceof GetSummaryStats === false) {
            $this->apiInsights👷GetSummaryStats = new GetSummaryStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats());
        }

        return $this->apiInsights👷GetSummaryStats;
    }

    public function apiInsights👷GetSummaryStatsByUser(): GetSummaryStatsByUser
    {
        if ($this->apiInsights👷GetSummaryStatsByUser instanceof GetSummaryStatsByUser === false) {
            $this->apiInsights👷GetSummaryStatsByUser = new GetSummaryStatsByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats🌀Users🌀UserId());
        }

        return $this->apiInsights👷GetSummaryStatsByUser;
    }

    public function apiInsights👷GetSummaryStatsByActor(): GetSummaryStatsByActor
    {
        if ($this->apiInsights👷GetSummaryStatsByActor instanceof GetSummaryStatsByActor === false) {
            $this->apiInsights👷GetSummaryStatsByActor = new GetSummaryStatsByActor($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats🌀ActorType🌀ActorId());
        }

        return $this->apiInsights👷GetSummaryStatsByActor;
    }

    public function apiInsights👷GetTimeStats(): GetTimeStats
    {
        if ($this->apiInsights👷GetTimeStats instanceof GetTimeStats === false) {
            $this->apiInsights👷GetTimeStats = new GetTimeStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats());
        }

        return $this->apiInsights👷GetTimeStats;
    }

    public function apiInsights👷GetTimeStatsByUser(): GetTimeStatsByUser
    {
        if ($this->apiInsights👷GetTimeStatsByUser instanceof GetTimeStatsByUser === false) {
            $this->apiInsights👷GetTimeStatsByUser = new GetTimeStatsByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats🌀Users🌀UserId());
        }

        return $this->apiInsights👷GetTimeStatsByUser;
    }

    public function apiInsights👷GetTimeStatsByActor(): GetTimeStatsByActor
    {
        if ($this->apiInsights👷GetTimeStatsByActor instanceof GetTimeStatsByActor === false) {
            $this->apiInsights👷GetTimeStatsByActor = new GetTimeStatsByActor($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats🌀ActorType🌀ActorId());
        }

        return $this->apiInsights👷GetTimeStatsByActor;
    }

    public function apiInsights👷GetUserStats(): GetUserStats
    {
        if ($this->apiInsights👷GetUserStats instanceof GetUserStats === false) {
            $this->apiInsights👷GetUserStats = new GetUserStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀UserStats🌀UserId());
        }

        return $this->apiInsights👷GetUserStats;
    }

    public function apps👷GetOrgInstallation(): GetOrgInstallation
    {
        if ($this->apps👷GetOrgInstallation instanceof GetOrgInstallation === false) {
            $this->apps👷GetOrgInstallation = new GetOrgInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Installation());
        }

        return $this->apps👷GetOrgInstallation;
    }

    public function orgs👷ListAppInstallations(): ListAppInstallations
    {
        if ($this->orgs👷ListAppInstallations instanceof ListAppInstallations === false) {
            $this->orgs👷ListAppInstallations = new ListAppInstallations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Installations());
        }

        return $this->orgs👷ListAppInstallations;
    }

    public function interactions👷GetRestrictionsForOrg(): GetRestrictionsForOrg
    {
        if ($this->interactions👷GetRestrictionsForOrg instanceof GetRestrictionsForOrg === false) {
            $this->interactions👷GetRestrictionsForOrg = new GetRestrictionsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀InteractionLimits());
        }

        return $this->interactions👷GetRestrictionsForOrg;
    }

    public function interactions👷SetRestrictionsForOrg(): SetRestrictionsForOrg
    {
        if ($this->interactions👷SetRestrictionsForOrg instanceof SetRestrictionsForOrg === false) {
            $this->interactions👷SetRestrictionsForOrg = new SetRestrictionsForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀InteractionLimits());
        }

        return $this->interactions👷SetRestrictionsForOrg;
    }

    public function interactions👷RemoveRestrictionsForOrg(): RemoveRestrictionsForOrg
    {
        if ($this->interactions👷RemoveRestrictionsForOrg instanceof RemoveRestrictionsForOrg === false) {
            $this->interactions👷RemoveRestrictionsForOrg = new RemoveRestrictionsForOrg($this->browser, $this->authentication);
        }

        return $this->interactions👷RemoveRestrictionsForOrg;
    }

    public function orgs👷ListPendingInvitations(): ListPendingInvitations
    {
        if ($this->orgs👷ListPendingInvitations instanceof ListPendingInvitations === false) {
            $this->orgs👷ListPendingInvitations = new ListPendingInvitations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations());
        }

        return $this->orgs👷ListPendingInvitations;
    }

    public function orgs👷CreateInvitation(): CreateInvitation
    {
        if ($this->orgs👷CreateInvitation instanceof CreateInvitation === false) {
            $this->orgs👷CreateInvitation = new CreateInvitation($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations());
        }

        return $this->orgs👷CreateInvitation;
    }

    public function orgs👷CancelInvitation(): CancelInvitation
    {
        if ($this->orgs👷CancelInvitation instanceof CancelInvitation === false) {
            $this->orgs👷CancelInvitation = new CancelInvitation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations🌀InvitationId());
        }

        return $this->orgs👷CancelInvitation;
    }

    public function orgs👷ListInvitationTeams(): ListInvitationTeams
    {
        if ($this->orgs👷ListInvitationTeams instanceof ListInvitationTeams === false) {
            $this->orgs👷ListInvitationTeams = new ListInvitationTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations🌀InvitationId🌀Teams());
        }

        return $this->orgs👷ListInvitationTeams;
    }

    public function issues👷ListForOrg(): ListForOrg
    {
        if ($this->issues👷ListForOrg instanceof ListForOrg === false) {
            $this->issues👷ListForOrg = new ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Issues());
        }

        return $this->issues👷ListForOrg;
    }

    public function orgs👷ListMembers(): ListMembers
    {
        if ($this->orgs👷ListMembers instanceof ListMembers === false) {
            $this->orgs👷ListMembers = new ListMembers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members());
        }

        return $this->orgs👷ListMembers;
    }

    public function orgs👷CheckMembershipForUser(): CheckMembershipForUser
    {
        if ($this->orgs👷CheckMembershipForUser instanceof CheckMembershipForUser === false) {
            $this->orgs👷CheckMembershipForUser = new CheckMembershipForUser($this->browser, $this->authentication);
        }

        return $this->orgs👷CheckMembershipForUser;
    }

    public function orgs👷RemoveMember(): RemoveMember
    {
        if ($this->orgs👷RemoveMember instanceof RemoveMember === false) {
            $this->orgs👷RemoveMember = new RemoveMember($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username());
        }

        return $this->orgs👷RemoveMember;
    }

    public function codespaces👷GetCodespacesForUserInOrg(): GetCodespacesForUserInOrg
    {
        if ($this->codespaces👷GetCodespacesForUserInOrg instanceof GetCodespacesForUserInOrg === false) {
            $this->codespaces👷GetCodespacesForUserInOrg = new GetCodespacesForUserInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces());
        }

        return $this->codespaces👷GetCodespacesForUserInOrg;
    }

    public function codespaces👷DeleteFromOrganization(): DeleteFromOrganization
    {
        if ($this->codespaces👷DeleteFromOrganization instanceof DeleteFromOrganization === false) {
            $this->codespaces👷DeleteFromOrganization = new DeleteFromOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName());
        }

        return $this->codespaces👷DeleteFromOrganization;
    }

    public function codespaces👷StopInOrganization(): StopInOrganization
    {
        if ($this->codespaces👷StopInOrganization instanceof StopInOrganization === false) {
            $this->codespaces👷StopInOrganization = new StopInOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop());
        }

        return $this->codespaces👷StopInOrganization;
    }

    public function copilot👷GetCopilotSeatDetailsForUser(): GetCopilotSeatDetailsForUser
    {
        if ($this->copilot👷GetCopilotSeatDetailsForUser instanceof GetCopilotSeatDetailsForUser === false) {
            $this->copilot👷GetCopilotSeatDetailsForUser = new GetCopilotSeatDetailsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot());
        }

        return $this->copilot👷GetCopilotSeatDetailsForUser;
    }

    public function orgs👷GetMembershipForUser(): GetMembershipForUser
    {
        if ($this->orgs👷GetMembershipForUser instanceof GetMembershipForUser === false) {
            $this->orgs👷GetMembershipForUser = new GetMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->orgs👷GetMembershipForUser;
    }

    public function orgs👷SetMembershipForUser(): SetMembershipForUser
    {
        if ($this->orgs👷SetMembershipForUser instanceof SetMembershipForUser === false) {
            $this->orgs👷SetMembershipForUser = new SetMembershipForUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->orgs👷SetMembershipForUser;
    }

    public function orgs👷RemoveMembershipForUser(): RemoveMembershipForUser
    {
        if ($this->orgs👷RemoveMembershipForUser instanceof RemoveMembershipForUser === false) {
            $this->orgs👷RemoveMembershipForUser = new RemoveMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->orgs👷RemoveMembershipForUser;
    }

    public function migrations👷ListForOrg(): \ApiClients\Client\GitHub\Internal\Operator\Migrations\ListForOrg
    {
        if ($this->migrations👷ListForOrg instanceof \ApiClients\Client\GitHub\Internal\Operator\Migrations\ListForOrg === false) {
            $this->migrations👷ListForOrg = new \ApiClients\Client\GitHub\Internal\Operator\Migrations\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations());
        }

        return $this->migrations👷ListForOrg;
    }

    public function migrations👷StartForOrg(): StartForOrg
    {
        if ($this->migrations👷StartForOrg instanceof StartForOrg === false) {
            $this->migrations👷StartForOrg = new StartForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations());
        }

        return $this->migrations👷StartForOrg;
    }

    public function migrations👷GetStatusForOrg(): GetStatusForOrg
    {
        if ($this->migrations👷GetStatusForOrg instanceof GetStatusForOrg === false) {
            $this->migrations👷GetStatusForOrg = new GetStatusForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId());
        }

        return $this->migrations👷GetStatusForOrg;
    }

    public function migrations👷DownloadArchiveForOrg(): DownloadArchiveForOrg
    {
        if ($this->migrations👷DownloadArchiveForOrg instanceof DownloadArchiveForOrg === false) {
            $this->migrations👷DownloadArchiveForOrg = new DownloadArchiveForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->migrations👷DownloadArchiveForOrg;
    }

    public function migrations👷DeleteArchiveForOrg(): DeleteArchiveForOrg
    {
        if ($this->migrations👷DeleteArchiveForOrg instanceof DeleteArchiveForOrg === false) {
            $this->migrations👷DeleteArchiveForOrg = new DeleteArchiveForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->migrations👷DeleteArchiveForOrg;
    }

    public function migrations👷UnlockRepoForOrg(): UnlockRepoForOrg
    {
        if ($this->migrations👷UnlockRepoForOrg instanceof UnlockRepoForOrg === false) {
            $this->migrations👷UnlockRepoForOrg = new UnlockRepoForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock());
        }

        return $this->migrations👷UnlockRepoForOrg;
    }

    public function migrations👷ListReposForOrg(): ListReposForOrg
    {
        if ($this->migrations👷ListReposForOrg instanceof ListReposForOrg === false) {
            $this->migrations👷ListReposForOrg = new ListReposForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories());
        }

        return $this->migrations👷ListReposForOrg;
    }

    public function orgs👷ListOrgRoles(): ListOrgRoles
    {
        if ($this->orgs👷ListOrgRoles instanceof ListOrgRoles === false) {
            $this->orgs👷ListOrgRoles = new ListOrgRoles($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles());
        }

        return $this->orgs👷ListOrgRoles;
    }

    public function orgs👷RevokeAllOrgRolesTeam(): RevokeAllOrgRolesTeam
    {
        if ($this->orgs👷RevokeAllOrgRolesTeam instanceof RevokeAllOrgRolesTeam === false) {
            $this->orgs👷RevokeAllOrgRolesTeam = new RevokeAllOrgRolesTeam($this->browser, $this->authentication);
        }

        return $this->orgs👷RevokeAllOrgRolesTeam;
    }

    public function orgs👷AssignTeamToOrgRole(): AssignTeamToOrgRole
    {
        if ($this->orgs👷AssignTeamToOrgRole instanceof AssignTeamToOrgRole === false) {
            $this->orgs👷AssignTeamToOrgRole = new AssignTeamToOrgRole($this->browser, $this->authentication);
        }

        return $this->orgs👷AssignTeamToOrgRole;
    }

    public function orgs👷RevokeOrgRoleTeam(): RevokeOrgRoleTeam
    {
        if ($this->orgs👷RevokeOrgRoleTeam instanceof RevokeOrgRoleTeam === false) {
            $this->orgs👷RevokeOrgRoleTeam = new RevokeOrgRoleTeam($this->browser, $this->authentication);
        }

        return $this->orgs👷RevokeOrgRoleTeam;
    }

    public function orgs👷RevokeAllOrgRolesUser(): RevokeAllOrgRolesUser
    {
        if ($this->orgs👷RevokeAllOrgRolesUser instanceof RevokeAllOrgRolesUser === false) {
            $this->orgs👷RevokeAllOrgRolesUser = new RevokeAllOrgRolesUser($this->browser, $this->authentication);
        }

        return $this->orgs👷RevokeAllOrgRolesUser;
    }

    public function orgs👷AssignUserToOrgRole(): AssignUserToOrgRole
    {
        if ($this->orgs👷AssignUserToOrgRole instanceof AssignUserToOrgRole === false) {
            $this->orgs👷AssignUserToOrgRole = new AssignUserToOrgRole($this->browser, $this->authentication);
        }

        return $this->orgs👷AssignUserToOrgRole;
    }

    public function orgs👷RevokeOrgRoleUser(): RevokeOrgRoleUser
    {
        if ($this->orgs👷RevokeOrgRoleUser instanceof RevokeOrgRoleUser === false) {
            $this->orgs👷RevokeOrgRoleUser = new RevokeOrgRoleUser($this->browser, $this->authentication);
        }

        return $this->orgs👷RevokeOrgRoleUser;
    }

    public function orgs👷GetOrgRole(): GetOrgRole
    {
        if ($this->orgs👷GetOrgRole instanceof GetOrgRole === false) {
            $this->orgs👷GetOrgRole = new GetOrgRole($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId());
        }

        return $this->orgs👷GetOrgRole;
    }

    public function orgs👷ListOrgRoleTeams(): ListOrgRoleTeams
    {
        if ($this->orgs👷ListOrgRoleTeams instanceof ListOrgRoleTeams === false) {
            $this->orgs👷ListOrgRoleTeams = new ListOrgRoleTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Teams());
        }

        return $this->orgs👷ListOrgRoleTeams;
    }

    public function orgs👷ListOrgRoleUsers(): ListOrgRoleUsers
    {
        if ($this->orgs👷ListOrgRoleUsers instanceof ListOrgRoleUsers === false) {
            $this->orgs👷ListOrgRoleUsers = new ListOrgRoleUsers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Users());
        }

        return $this->orgs👷ListOrgRoleUsers;
    }

    public function orgs👷ListOutsideCollaborators(): ListOutsideCollaborators
    {
        if ($this->orgs👷ListOutsideCollaborators instanceof ListOutsideCollaborators === false) {
            $this->orgs👷ListOutsideCollaborators = new ListOutsideCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators());
        }

        return $this->orgs👷ListOutsideCollaborators;
    }

    public function orgs👷ConvertMemberToOutsideCollaborator(): ConvertMemberToOutsideCollaborator
    {
        if ($this->orgs👷ConvertMemberToOutsideCollaborator instanceof ConvertMemberToOutsideCollaborator === false) {
            $this->orgs👷ConvertMemberToOutsideCollaborator = new ConvertMemberToOutsideCollaborator($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username());
        }

        return $this->orgs👷ConvertMemberToOutsideCollaborator;
    }

    public function orgs👷RemoveOutsideCollaborator(): RemoveOutsideCollaborator
    {
        if ($this->orgs👷RemoveOutsideCollaborator instanceof RemoveOutsideCollaborator === false) {
            $this->orgs👷RemoveOutsideCollaborator = new RemoveOutsideCollaborator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username());
        }

        return $this->orgs👷RemoveOutsideCollaborator;
    }

    public function packages👷ListPackagesForOrganization(): ListPackagesForOrganization
    {
        if ($this->packages👷ListPackagesForOrganization instanceof ListPackagesForOrganization === false) {
            $this->packages👷ListPackagesForOrganization = new ListPackagesForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages());
        }

        return $this->packages👷ListPackagesForOrganization;
    }

    public function packages👷GetPackageForOrganization(): GetPackageForOrganization
    {
        if ($this->packages👷GetPackageForOrganization instanceof GetPackageForOrganization === false) {
            $this->packages👷GetPackageForOrganization = new GetPackageForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->packages👷GetPackageForOrganization;
    }

    public function packages👷DeletePackageForOrg(): DeletePackageForOrg
    {
        if ($this->packages👷DeletePackageForOrg instanceof DeletePackageForOrg === false) {
            $this->packages👷DeletePackageForOrg = new DeletePackageForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->packages👷DeletePackageForOrg;
    }

    public function packages👷RestorePackageForOrg(): RestorePackageForOrg
    {
        if ($this->packages👷RestorePackageForOrg instanceof RestorePackageForOrg === false) {
            $this->packages👷RestorePackageForOrg = new RestorePackageForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Restore());
        }

        return $this->packages👷RestorePackageForOrg;
    }

    public function packages👷GetAllPackageVersionsForPackageOwnedByOrg(): GetAllPackageVersionsForPackageOwnedByOrg
    {
        if ($this->packages👷GetAllPackageVersionsForPackageOwnedByOrg instanceof GetAllPackageVersionsForPackageOwnedByOrg === false) {
            $this->packages👷GetAllPackageVersionsForPackageOwnedByOrg = new GetAllPackageVersionsForPackageOwnedByOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions());
        }

        return $this->packages👷GetAllPackageVersionsForPackageOwnedByOrg;
    }

    public function packages👷GetPackageVersionForOrganization(): GetPackageVersionForOrganization
    {
        if ($this->packages👷GetPackageVersionForOrganization instanceof GetPackageVersionForOrganization === false) {
            $this->packages👷GetPackageVersionForOrganization = new GetPackageVersionForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->packages👷GetPackageVersionForOrganization;
    }

    public function packages👷DeletePackageVersionForOrg(): DeletePackageVersionForOrg
    {
        if ($this->packages👷DeletePackageVersionForOrg instanceof DeletePackageVersionForOrg === false) {
            $this->packages👷DeletePackageVersionForOrg = new DeletePackageVersionForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->packages👷DeletePackageVersionForOrg;
    }

    public function packages👷RestorePackageVersionForOrg(): RestorePackageVersionForOrg
    {
        if ($this->packages👷RestorePackageVersionForOrg instanceof RestorePackageVersionForOrg === false) {
            $this->packages👷RestorePackageVersionForOrg = new RestorePackageVersionForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore());
        }

        return $this->packages👷RestorePackageVersionForOrg;
    }

    public function orgs👷ListPatGrantRequests(): ListPatGrantRequests
    {
        if ($this->orgs👷ListPatGrantRequests instanceof ListPatGrantRequests === false) {
            $this->orgs👷ListPatGrantRequests = new ListPatGrantRequests($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests());
        }

        return $this->orgs👷ListPatGrantRequests;
    }

    public function orgs👷ReviewPatGrantRequestsInBulk(): ReviewPatGrantRequestsInBulk
    {
        if ($this->orgs👷ReviewPatGrantRequestsInBulk instanceof ReviewPatGrantRequestsInBulk === false) {
            $this->orgs👷ReviewPatGrantRequestsInBulk = new ReviewPatGrantRequestsInBulk($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests());
        }

        return $this->orgs👷ReviewPatGrantRequestsInBulk;
    }

    public function orgs👷ReviewPatGrantRequest(): ReviewPatGrantRequest
    {
        if ($this->orgs👷ReviewPatGrantRequest instanceof ReviewPatGrantRequest === false) {
            $this->orgs👷ReviewPatGrantRequest = new ReviewPatGrantRequest($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId());
        }

        return $this->orgs👷ReviewPatGrantRequest;
    }

    public function orgs👷ListPatGrantRequestRepositories(): ListPatGrantRequestRepositories
    {
        if ($this->orgs👷ListPatGrantRequestRepositories instanceof ListPatGrantRequestRepositories === false) {
            $this->orgs👷ListPatGrantRequestRepositories = new ListPatGrantRequestRepositories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId🌀Repositories());
        }

        return $this->orgs👷ListPatGrantRequestRepositories;
    }

    public function orgs👷ListPatGrants(): ListPatGrants
    {
        if ($this->orgs👷ListPatGrants instanceof ListPatGrants === false) {
            $this->orgs👷ListPatGrants = new ListPatGrants($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens());
        }

        return $this->orgs👷ListPatGrants;
    }

    public function orgs👷UpdatePatAccesses(): UpdatePatAccesses
    {
        if ($this->orgs👷UpdatePatAccesses instanceof UpdatePatAccesses === false) {
            $this->orgs👷UpdatePatAccesses = new UpdatePatAccesses($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens());
        }

        return $this->orgs👷UpdatePatAccesses;
    }

    public function orgs👷UpdatePatAccess(): UpdatePatAccess
    {
        if ($this->orgs👷UpdatePatAccess instanceof UpdatePatAccess === false) {
            $this->orgs👷UpdatePatAccess = new UpdatePatAccess($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId());
        }

        return $this->orgs👷UpdatePatAccess;
    }

    public function orgs👷ListPatGrantRepositories(): ListPatGrantRepositories
    {
        if ($this->orgs👷ListPatGrantRepositories instanceof ListPatGrantRepositories === false) {
            $this->orgs👷ListPatGrantRepositories = new ListPatGrantRepositories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId🌀Repositories());
        }

        return $this->orgs👷ListPatGrantRepositories;
    }

    public function projects👷ListForOrg(): \ApiClients\Client\GitHub\Internal\Operator\Projects\ListForOrg
    {
        if ($this->projects👷ListForOrg instanceof \ApiClients\Client\GitHub\Internal\Operator\Projects\ListForOrg === false) {
            $this->projects👷ListForOrg = new \ApiClients\Client\GitHub\Internal\Operator\Projects\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Projects());
        }

        return $this->projects👷ListForOrg;
    }

    public function projects👷CreateForOrg(): CreateForOrg
    {
        if ($this->projects👷CreateForOrg instanceof CreateForOrg === false) {
            $this->projects👷CreateForOrg = new CreateForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Projects());
        }

        return $this->projects👷CreateForOrg;
    }

    public function orgs👷GetAllCustomProperties(): GetAllCustomProperties
    {
        if ($this->orgs👷GetAllCustomProperties instanceof GetAllCustomProperties === false) {
            $this->orgs👷GetAllCustomProperties = new GetAllCustomProperties($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema());
        }

        return $this->orgs👷GetAllCustomProperties;
    }

    public function orgs👷CreateOrUpdateCustomProperties(): CreateOrUpdateCustomProperties
    {
        if ($this->orgs👷CreateOrUpdateCustomProperties instanceof CreateOrUpdateCustomProperties === false) {
            $this->orgs👷CreateOrUpdateCustomProperties = new CreateOrUpdateCustomProperties($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema());
        }

        return $this->orgs👷CreateOrUpdateCustomProperties;
    }

    public function orgs👷GetCustomProperty(): GetCustomProperty
    {
        if ($this->orgs👷GetCustomProperty instanceof GetCustomProperty === false) {
            $this->orgs👷GetCustomProperty = new GetCustomProperty($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName());
        }

        return $this->orgs👷GetCustomProperty;
    }

    public function orgs👷CreateOrUpdateCustomProperty(): CreateOrUpdateCustomProperty
    {
        if ($this->orgs👷CreateOrUpdateCustomProperty instanceof CreateOrUpdateCustomProperty === false) {
            $this->orgs👷CreateOrUpdateCustomProperty = new CreateOrUpdateCustomProperty($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName());
        }

        return $this->orgs👷CreateOrUpdateCustomProperty;
    }

    public function orgs👷RemoveCustomProperty(): RemoveCustomProperty
    {
        if ($this->orgs👷RemoveCustomProperty instanceof RemoveCustomProperty === false) {
            $this->orgs👷RemoveCustomProperty = new RemoveCustomProperty($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName());
        }

        return $this->orgs👷RemoveCustomProperty;
    }

    public function orgs👷ListCustomPropertiesValuesForRepos(): ListCustomPropertiesValuesForRepos
    {
        if ($this->orgs👷ListCustomPropertiesValuesForRepos instanceof ListCustomPropertiesValuesForRepos === false) {
            $this->orgs👷ListCustomPropertiesValuesForRepos = new ListCustomPropertiesValuesForRepos($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Values());
        }

        return $this->orgs👷ListCustomPropertiesValuesForRepos;
    }

    public function orgs👷CreateOrUpdateCustomPropertiesValuesForRepos(): CreateOrUpdateCustomPropertiesValuesForRepos
    {
        if ($this->orgs👷CreateOrUpdateCustomPropertiesValuesForRepos instanceof CreateOrUpdateCustomPropertiesValuesForRepos === false) {
            $this->orgs👷CreateOrUpdateCustomPropertiesValuesForRepos = new CreateOrUpdateCustomPropertiesValuesForRepos($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Values());
        }

        return $this->orgs👷CreateOrUpdateCustomPropertiesValuesForRepos;
    }

    public function orgs👷ListPublicMembers(): ListPublicMembers
    {
        if ($this->orgs👷ListPublicMembers instanceof ListPublicMembers === false) {
            $this->orgs👷ListPublicMembers = new ListPublicMembers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers());
        }

        return $this->orgs👷ListPublicMembers;
    }

    public function orgs👷CheckPublicMembershipForUser(): CheckPublicMembershipForUser
    {
        if ($this->orgs👷CheckPublicMembershipForUser instanceof CheckPublicMembershipForUser === false) {
            $this->orgs👷CheckPublicMembershipForUser = new CheckPublicMembershipForUser($this->browser, $this->authentication);
        }

        return $this->orgs👷CheckPublicMembershipForUser;
    }

    public function orgs👷SetPublicMembershipForAuthenticatedUser(): SetPublicMembershipForAuthenticatedUser
    {
        if ($this->orgs👷SetPublicMembershipForAuthenticatedUser instanceof SetPublicMembershipForAuthenticatedUser === false) {
            $this->orgs👷SetPublicMembershipForAuthenticatedUser = new SetPublicMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers🌀Username());
        }

        return $this->orgs👷SetPublicMembershipForAuthenticatedUser;
    }

    public function orgs👷RemovePublicMembershipForAuthenticatedUser(): RemovePublicMembershipForAuthenticatedUser
    {
        if ($this->orgs👷RemovePublicMembershipForAuthenticatedUser instanceof RemovePublicMembershipForAuthenticatedUser === false) {
            $this->orgs👷RemovePublicMembershipForAuthenticatedUser = new RemovePublicMembershipForAuthenticatedUser($this->browser, $this->authentication);
        }

        return $this->orgs👷RemovePublicMembershipForAuthenticatedUser;
    }

    public function repos👷ListForOrg(): \ApiClients\Client\GitHub\Internal\Operator\Repos\ListForOrg
    {
        if ($this->repos👷ListForOrg instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\ListForOrg === false) {
            $this->repos👷ListForOrg = new \ApiClients\Client\GitHub\Internal\Operator\Repos\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Repos());
        }

        return $this->repos👷ListForOrg;
    }

    public function repos👷CreateInOrg(): CreateInOrg
    {
        if ($this->repos👷CreateInOrg instanceof CreateInOrg === false) {
            $this->repos👷CreateInOrg = new CreateInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Repos());
        }

        return $this->repos👷CreateInOrg;
    }

    public function repos👷GetOrgRulesets(): GetOrgRulesets
    {
        if ($this->repos👷GetOrgRulesets instanceof GetOrgRulesets === false) {
            $this->repos👷GetOrgRulesets = new GetOrgRulesets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets());
        }

        return $this->repos👷GetOrgRulesets;
    }

    public function repos👷CreateOrgRuleset(): CreateOrgRuleset
    {
        if ($this->repos👷CreateOrgRuleset instanceof CreateOrgRuleset === false) {
            $this->repos👷CreateOrgRuleset = new CreateOrgRuleset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets());
        }

        return $this->repos👷CreateOrgRuleset;
    }

    public function repos👷GetOrgRuleSuites(): GetOrgRuleSuites
    {
        if ($this->repos👷GetOrgRuleSuites instanceof GetOrgRuleSuites === false) {
            $this->repos👷GetOrgRuleSuites = new GetOrgRuleSuites($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites());
        }

        return $this->repos👷GetOrgRuleSuites;
    }

    public function repos👷GetOrgRuleSuite(): GetOrgRuleSuite
    {
        if ($this->repos👷GetOrgRuleSuite instanceof GetOrgRuleSuite === false) {
            $this->repos👷GetOrgRuleSuite = new GetOrgRuleSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites🌀RuleSuiteId());
        }

        return $this->repos👷GetOrgRuleSuite;
    }

    public function repos👷GetOrgRuleset(): GetOrgRuleset
    {
        if ($this->repos👷GetOrgRuleset instanceof GetOrgRuleset === false) {
            $this->repos👷GetOrgRuleset = new GetOrgRuleset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RulesetId());
        }

        return $this->repos👷GetOrgRuleset;
    }

    public function repos👷UpdateOrgRuleset(): UpdateOrgRuleset
    {
        if ($this->repos👷UpdateOrgRuleset instanceof UpdateOrgRuleset === false) {
            $this->repos👷UpdateOrgRuleset = new UpdateOrgRuleset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RulesetId());
        }

        return $this->repos👷UpdateOrgRuleset;
    }

    public function repos👷DeleteOrgRuleset(): DeleteOrgRuleset
    {
        if ($this->repos👷DeleteOrgRuleset instanceof DeleteOrgRuleset === false) {
            $this->repos👷DeleteOrgRuleset = new DeleteOrgRuleset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RulesetId());
        }

        return $this->repos👷DeleteOrgRuleset;
    }

    public function secretScanning👷ListAlertsForOrg(): \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\ListAlertsForOrg
    {
        if ($this->secretScanning👷ListAlertsForOrg instanceof \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\ListAlertsForOrg === false) {
            $this->secretScanning👷ListAlertsForOrg = new \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\ListAlertsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecretScanning🌀Alerts());
        }

        return $this->secretScanning👷ListAlertsForOrg;
    }

    public function securityAdvisories👷ListOrgRepositoryAdvisories(): ListOrgRepositoryAdvisories
    {
        if ($this->securityAdvisories👷ListOrgRepositoryAdvisories instanceof ListOrgRepositoryAdvisories === false) {
            $this->securityAdvisories👷ListOrgRepositoryAdvisories = new ListOrgRepositoryAdvisories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecurityAdvisories());
        }

        return $this->securityAdvisories👷ListOrgRepositoryAdvisories;
    }

    public function orgs👷ListSecurityManagerTeams(): ListSecurityManagerTeams
    {
        if ($this->orgs👷ListSecurityManagerTeams instanceof ListSecurityManagerTeams === false) {
            $this->orgs👷ListSecurityManagerTeams = new ListSecurityManagerTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecurityManagers());
        }

        return $this->orgs👷ListSecurityManagerTeams;
    }

    public function orgs👷AddSecurityManagerTeam(): AddSecurityManagerTeam
    {
        if ($this->orgs👷AddSecurityManagerTeam instanceof AddSecurityManagerTeam === false) {
            $this->orgs👷AddSecurityManagerTeam = new AddSecurityManagerTeam($this->browser, $this->authentication);
        }

        return $this->orgs👷AddSecurityManagerTeam;
    }

    public function orgs👷RemoveSecurityManagerTeam(): RemoveSecurityManagerTeam
    {
        if ($this->orgs👷RemoveSecurityManagerTeam instanceof RemoveSecurityManagerTeam === false) {
            $this->orgs👷RemoveSecurityManagerTeam = new RemoveSecurityManagerTeam($this->browser, $this->authentication);
        }

        return $this->orgs👷RemoveSecurityManagerTeam;
    }

    public function billing👷GetGithubActionsBillingOrg(): GetGithubActionsBillingOrg
    {
        if ($this->billing👷GetGithubActionsBillingOrg instanceof GetGithubActionsBillingOrg === false) {
            $this->billing👷GetGithubActionsBillingOrg = new GetGithubActionsBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions());
        }

        return $this->billing👷GetGithubActionsBillingOrg;
    }

    public function billing👷GetGithubPackagesBillingOrg(): GetGithubPackagesBillingOrg
    {
        if ($this->billing👷GetGithubPackagesBillingOrg instanceof GetGithubPackagesBillingOrg === false) {
            $this->billing👷GetGithubPackagesBillingOrg = new GetGithubPackagesBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages());
        }

        return $this->billing👷GetGithubPackagesBillingOrg;
    }

    public function billing👷GetSharedStorageBillingOrg(): GetSharedStorageBillingOrg
    {
        if ($this->billing👷GetSharedStorageBillingOrg instanceof GetSharedStorageBillingOrg === false) {
            $this->billing👷GetSharedStorageBillingOrg = new GetSharedStorageBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage());
        }

        return $this->billing👷GetSharedStorageBillingOrg;
    }

    public function copilot👷CopilotMetricsForTeam(): CopilotMetricsForTeam
    {
        if ($this->copilot👷CopilotMetricsForTeam instanceof CopilotMetricsForTeam === false) {
            $this->copilot👷CopilotMetricsForTeam = new CopilotMetricsForTeam($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Team🌀TeamSlug🌀Copilot🌀Metrics());
        }

        return $this->copilot👷CopilotMetricsForTeam;
    }

    public function copilot👷UsageMetricsForTeam(): UsageMetricsForTeam
    {
        if ($this->copilot👷UsageMetricsForTeam instanceof UsageMetricsForTeam === false) {
            $this->copilot👷UsageMetricsForTeam = new UsageMetricsForTeam($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Team🌀TeamSlug🌀Copilot🌀Usage());
        }

        return $this->copilot👷UsageMetricsForTeam;
    }

    public function teams👷List_(): \ApiClients\Client\GitHub\Internal\Operator\Teams\List_
    {
        if ($this->teams👷List_ instanceof \ApiClients\Client\GitHub\Internal\Operator\Teams\List_ === false) {
            $this->teams👷List_ = new \ApiClients\Client\GitHub\Internal\Operator\Teams\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams());
        }

        return $this->teams👷List_;
    }

    public function teams👷Create(): \ApiClients\Client\GitHub\Internal\Operator\Teams\Create
    {
        if ($this->teams👷Create instanceof \ApiClients\Client\GitHub\Internal\Operator\Teams\Create === false) {
            $this->teams👷Create = new \ApiClients\Client\GitHub\Internal\Operator\Teams\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams());
        }

        return $this->teams👷Create;
    }

    public function teams👷GetByName(): GetByName
    {
        if ($this->teams👷GetByName instanceof GetByName === false) {
            $this->teams👷GetByName = new GetByName($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug());
        }

        return $this->teams👷GetByName;
    }

    public function teams👷DeleteInOrg(): DeleteInOrg
    {
        if ($this->teams👷DeleteInOrg instanceof DeleteInOrg === false) {
            $this->teams👷DeleteInOrg = new DeleteInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteInOrg;
    }

    public function teams👷UpdateInOrg(): UpdateInOrg
    {
        if ($this->teams👷UpdateInOrg instanceof UpdateInOrg === false) {
            $this->teams👷UpdateInOrg = new UpdateInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug());
        }

        return $this->teams👷UpdateInOrg;
    }

    public function teams👷ListDiscussionsInOrg(): ListDiscussionsInOrg
    {
        if ($this->teams👷ListDiscussionsInOrg instanceof ListDiscussionsInOrg === false) {
            $this->teams👷ListDiscussionsInOrg = new ListDiscussionsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions());
        }

        return $this->teams👷ListDiscussionsInOrg;
    }

    public function teams👷CreateDiscussionInOrg(): CreateDiscussionInOrg
    {
        if ($this->teams👷CreateDiscussionInOrg instanceof CreateDiscussionInOrg === false) {
            $this->teams👷CreateDiscussionInOrg = new CreateDiscussionInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions());
        }

        return $this->teams👷CreateDiscussionInOrg;
    }

    public function teams👷GetDiscussionInOrg(): GetDiscussionInOrg
    {
        if ($this->teams👷GetDiscussionInOrg instanceof GetDiscussionInOrg === false) {
            $this->teams👷GetDiscussionInOrg = new GetDiscussionInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber());
        }

        return $this->teams👷GetDiscussionInOrg;
    }

    public function teams👷DeleteDiscussionInOrg(): DeleteDiscussionInOrg
    {
        if ($this->teams👷DeleteDiscussionInOrg instanceof DeleteDiscussionInOrg === false) {
            $this->teams👷DeleteDiscussionInOrg = new DeleteDiscussionInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteDiscussionInOrg;
    }

    public function teams👷UpdateDiscussionInOrg(): UpdateDiscussionInOrg
    {
        if ($this->teams👷UpdateDiscussionInOrg instanceof UpdateDiscussionInOrg === false) {
            $this->teams👷UpdateDiscussionInOrg = new UpdateDiscussionInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber());
        }

        return $this->teams👷UpdateDiscussionInOrg;
    }

    public function teams👷ListDiscussionCommentsInOrg(): ListDiscussionCommentsInOrg
    {
        if ($this->teams👷ListDiscussionCommentsInOrg instanceof ListDiscussionCommentsInOrg === false) {
            $this->teams👷ListDiscussionCommentsInOrg = new ListDiscussionCommentsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷ListDiscussionCommentsInOrg;
    }

    public function teams👷CreateDiscussionCommentInOrg(): CreateDiscussionCommentInOrg
    {
        if ($this->teams👷CreateDiscussionCommentInOrg instanceof CreateDiscussionCommentInOrg === false) {
            $this->teams👷CreateDiscussionCommentInOrg = new CreateDiscussionCommentInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷CreateDiscussionCommentInOrg;
    }

    public function teams👷GetDiscussionCommentInOrg(): GetDiscussionCommentInOrg
    {
        if ($this->teams👷GetDiscussionCommentInOrg instanceof GetDiscussionCommentInOrg === false) {
            $this->teams👷GetDiscussionCommentInOrg = new GetDiscussionCommentInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->teams👷GetDiscussionCommentInOrg;
    }

    public function teams👷DeleteDiscussionCommentInOrg(): DeleteDiscussionCommentInOrg
    {
        if ($this->teams👷DeleteDiscussionCommentInOrg instanceof DeleteDiscussionCommentInOrg === false) {
            $this->teams👷DeleteDiscussionCommentInOrg = new DeleteDiscussionCommentInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteDiscussionCommentInOrg;
    }

    public function teams👷UpdateDiscussionCommentInOrg(): UpdateDiscussionCommentInOrg
    {
        if ($this->teams👷UpdateDiscussionCommentInOrg instanceof UpdateDiscussionCommentInOrg === false) {
            $this->teams👷UpdateDiscussionCommentInOrg = new UpdateDiscussionCommentInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->teams👷UpdateDiscussionCommentInOrg;
    }

    public function reactions👷ListForTeamDiscussionCommentInOrg(): ListForTeamDiscussionCommentInOrg
    {
        if ($this->reactions👷ListForTeamDiscussionCommentInOrg instanceof ListForTeamDiscussionCommentInOrg === false) {
            $this->reactions👷ListForTeamDiscussionCommentInOrg = new ListForTeamDiscussionCommentInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionCommentInOrg;
    }

    public function reactions👷CreateForTeamDiscussionCommentInOrg(): CreateForTeamDiscussionCommentInOrg
    {
        if ($this->reactions👷CreateForTeamDiscussionCommentInOrg instanceof CreateForTeamDiscussionCommentInOrg === false) {
            $this->reactions👷CreateForTeamDiscussionCommentInOrg = new CreateForTeamDiscussionCommentInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷CreateForTeamDiscussionCommentInOrg;
    }

    public function reactions👷DeleteForTeamDiscussionComment(): DeleteForTeamDiscussionComment
    {
        if ($this->reactions👷DeleteForTeamDiscussionComment instanceof DeleteForTeamDiscussionComment === false) {
            $this->reactions👷DeleteForTeamDiscussionComment = new DeleteForTeamDiscussionComment($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForTeamDiscussionComment;
    }

    public function reactions👷ListForTeamDiscussionInOrg(): ListForTeamDiscussionInOrg
    {
        if ($this->reactions👷ListForTeamDiscussionInOrg instanceof ListForTeamDiscussionInOrg === false) {
            $this->reactions👷ListForTeamDiscussionInOrg = new ListForTeamDiscussionInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionInOrg;
    }

    public function reactions👷CreateForTeamDiscussionInOrg(): CreateForTeamDiscussionInOrg
    {
        if ($this->reactions👷CreateForTeamDiscussionInOrg instanceof CreateForTeamDiscussionInOrg === false) {
            $this->reactions👷CreateForTeamDiscussionInOrg = new CreateForTeamDiscussionInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷CreateForTeamDiscussionInOrg;
    }

    public function reactions👷DeleteForTeamDiscussion(): DeleteForTeamDiscussion
    {
        if ($this->reactions👷DeleteForTeamDiscussion instanceof DeleteForTeamDiscussion === false) {
            $this->reactions👷DeleteForTeamDiscussion = new DeleteForTeamDiscussion($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForTeamDiscussion;
    }

    public function teams👷ListPendingInvitationsInOrg(): ListPendingInvitationsInOrg
    {
        if ($this->teams👷ListPendingInvitationsInOrg instanceof ListPendingInvitationsInOrg === false) {
            $this->teams👷ListPendingInvitationsInOrg = new ListPendingInvitationsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Invitations());
        }

        return $this->teams👷ListPendingInvitationsInOrg;
    }

    public function teams👷ListMembersInOrg(): ListMembersInOrg
    {
        if ($this->teams👷ListMembersInOrg instanceof ListMembersInOrg === false) {
            $this->teams👷ListMembersInOrg = new ListMembersInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members());
        }

        return $this->teams👷ListMembersInOrg;
    }

    public function teams👷GetMembershipForUserInOrg(): GetMembershipForUserInOrg
    {
        if ($this->teams👷GetMembershipForUserInOrg instanceof GetMembershipForUserInOrg === false) {
            $this->teams👷GetMembershipForUserInOrg = new GetMembershipForUserInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username());
        }

        return $this->teams👷GetMembershipForUserInOrg;
    }

    public function teams👷AddOrUpdateMembershipForUserInOrg(): AddOrUpdateMembershipForUserInOrg
    {
        if ($this->teams👷AddOrUpdateMembershipForUserInOrg instanceof AddOrUpdateMembershipForUserInOrg === false) {
            $this->teams👷AddOrUpdateMembershipForUserInOrg = new AddOrUpdateMembershipForUserInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username());
        }

        return $this->teams👷AddOrUpdateMembershipForUserInOrg;
    }

    public function teams👷RemoveMembershipForUserInOrg(): RemoveMembershipForUserInOrg
    {
        if ($this->teams👷RemoveMembershipForUserInOrg instanceof RemoveMembershipForUserInOrg === false) {
            $this->teams👷RemoveMembershipForUserInOrg = new RemoveMembershipForUserInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveMembershipForUserInOrg;
    }

    public function teams👷ListProjectsInOrg(): ListProjectsInOrg
    {
        if ($this->teams👷ListProjectsInOrg instanceof ListProjectsInOrg === false) {
            $this->teams👷ListProjectsInOrg = new ListProjectsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects());
        }

        return $this->teams👷ListProjectsInOrg;
    }

    public function teams👷CheckPermissionsForProjectInOrg(): CheckPermissionsForProjectInOrg
    {
        if ($this->teams👷CheckPermissionsForProjectInOrg instanceof CheckPermissionsForProjectInOrg === false) {
            $this->teams👷CheckPermissionsForProjectInOrg = new CheckPermissionsForProjectInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId());
        }

        return $this->teams👷CheckPermissionsForProjectInOrg;
    }

    public function teams👷AddOrUpdateProjectPermissionsInOrg(): AddOrUpdateProjectPermissionsInOrg
    {
        if ($this->teams👷AddOrUpdateProjectPermissionsInOrg instanceof AddOrUpdateProjectPermissionsInOrg === false) {
            $this->teams👷AddOrUpdateProjectPermissionsInOrg = new AddOrUpdateProjectPermissionsInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId());
        }

        return $this->teams👷AddOrUpdateProjectPermissionsInOrg;
    }

    public function teams👷RemoveProjectInOrg(): RemoveProjectInOrg
    {
        if ($this->teams👷RemoveProjectInOrg instanceof RemoveProjectInOrg === false) {
            $this->teams👷RemoveProjectInOrg = new RemoveProjectInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveProjectInOrg;
    }

    public function teams👷ListReposInOrg(): ListReposInOrg
    {
        if ($this->teams👷ListReposInOrg instanceof ListReposInOrg === false) {
            $this->teams👷ListReposInOrg = new ListReposInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos());
        }

        return $this->teams👷ListReposInOrg;
    }

    public function teams👷CheckPermissionsForRepoInOrg(): CheckPermissionsForRepoInOrg
    {
        if ($this->teams👷CheckPermissionsForRepoInOrg instanceof CheckPermissionsForRepoInOrg === false) {
            $this->teams👷CheckPermissionsForRepoInOrg = new CheckPermissionsForRepoInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo());
        }

        return $this->teams👷CheckPermissionsForRepoInOrg;
    }

    public function teams👷AddOrUpdateRepoPermissionsInOrg(): AddOrUpdateRepoPermissionsInOrg
    {
        if ($this->teams👷AddOrUpdateRepoPermissionsInOrg instanceof AddOrUpdateRepoPermissionsInOrg === false) {
            $this->teams👷AddOrUpdateRepoPermissionsInOrg = new AddOrUpdateRepoPermissionsInOrg($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->teams👷AddOrUpdateRepoPermissionsInOrg;
    }

    public function teams👷RemoveRepoInOrg(): RemoveRepoInOrg
    {
        if ($this->teams👷RemoveRepoInOrg instanceof RemoveRepoInOrg === false) {
            $this->teams👷RemoveRepoInOrg = new RemoveRepoInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveRepoInOrg;
    }

    public function teams👷ListChildInOrg(): ListChildInOrg
    {
        if ($this->teams👷ListChildInOrg instanceof ListChildInOrg === false) {
            $this->teams👷ListChildInOrg = new ListChildInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams());
        }

        return $this->teams👷ListChildInOrg;
    }

    public function orgs👷EnableOrDisableSecurityProductOnAllOrgRepos(): EnableOrDisableSecurityProductOnAllOrgRepos
    {
        if ($this->orgs👷EnableOrDisableSecurityProductOnAllOrgRepos instanceof EnableOrDisableSecurityProductOnAllOrgRepos === false) {
            $this->orgs👷EnableOrDisableSecurityProductOnAllOrgRepos = new EnableOrDisableSecurityProductOnAllOrgRepos($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->orgs👷EnableOrDisableSecurityProductOnAllOrgRepos;
    }

    public function projects👷GetCard(): GetCard
    {
        if ($this->projects👷GetCard instanceof GetCard === false) {
            $this->projects👷GetCard = new GetCard($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId());
        }

        return $this->projects👷GetCard;
    }

    public function projects👷DeleteCard(): DeleteCard
    {
        if ($this->projects👷DeleteCard instanceof DeleteCard === false) {
            $this->projects👷DeleteCard = new DeleteCard($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId());
        }

        return $this->projects👷DeleteCard;
    }

    public function projects👷UpdateCard(): UpdateCard
    {
        if ($this->projects👷UpdateCard instanceof UpdateCard === false) {
            $this->projects👷UpdateCard = new UpdateCard($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId());
        }

        return $this->projects👷UpdateCard;
    }

    public function projects👷MoveCard(): MoveCard
    {
        if ($this->projects👷MoveCard instanceof MoveCard === false) {
            $this->projects👷MoveCard = new MoveCard($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves());
        }

        return $this->projects👷MoveCard;
    }

    public function projects👷GetColumn(): GetColumn
    {
        if ($this->projects👷GetColumn instanceof GetColumn === false) {
            $this->projects👷GetColumn = new GetColumn($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId());
        }

        return $this->projects👷GetColumn;
    }

    public function projects👷DeleteColumn(): DeleteColumn
    {
        if ($this->projects👷DeleteColumn instanceof DeleteColumn === false) {
            $this->projects👷DeleteColumn = new DeleteColumn($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId());
        }

        return $this->projects👷DeleteColumn;
    }

    public function projects👷UpdateColumn(): UpdateColumn
    {
        if ($this->projects👷UpdateColumn instanceof UpdateColumn === false) {
            $this->projects👷UpdateColumn = new UpdateColumn($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId());
        }

        return $this->projects👷UpdateColumn;
    }

    public function projects👷ListCards(): ListCards
    {
        if ($this->projects👷ListCards instanceof ListCards === false) {
            $this->projects👷ListCards = new ListCards($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards());
        }

        return $this->projects👷ListCards;
    }

    public function projects👷CreateCard(): CreateCard
    {
        if ($this->projects👷CreateCard instanceof CreateCard === false) {
            $this->projects👷CreateCard = new CreateCard($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards());
        }

        return $this->projects👷CreateCard;
    }

    public function projects👷MoveColumn(): MoveColumn
    {
        if ($this->projects👷MoveColumn instanceof MoveColumn === false) {
            $this->projects👷MoveColumn = new MoveColumn($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Moves());
        }

        return $this->projects👷MoveColumn;
    }

    public function projects👷Get(): \ApiClients\Client\GitHub\Internal\Operator\Projects\Get
    {
        if ($this->projects👷Get instanceof \ApiClients\Client\GitHub\Internal\Operator\Projects\Get === false) {
            $this->projects👷Get = new \ApiClients\Client\GitHub\Internal\Operator\Projects\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId());
        }

        return $this->projects👷Get;
    }

    public function projects👷Delete(): \ApiClients\Client\GitHub\Internal\Operator\Projects\Delete
    {
        if ($this->projects👷Delete instanceof \ApiClients\Client\GitHub\Internal\Operator\Projects\Delete === false) {
            $this->projects👷Delete = new \ApiClients\Client\GitHub\Internal\Operator\Projects\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId());
        }

        return $this->projects👷Delete;
    }

    public function projects👷Update(): \ApiClients\Client\GitHub\Internal\Operator\Projects\Update
    {
        if ($this->projects👷Update instanceof \ApiClients\Client\GitHub\Internal\Operator\Projects\Update === false) {
            $this->projects👷Update = new \ApiClients\Client\GitHub\Internal\Operator\Projects\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId());
        }

        return $this->projects👷Update;
    }

    public function projects👷ListCollaborators(): ListCollaborators
    {
        if ($this->projects👷ListCollaborators instanceof ListCollaborators === false) {
            $this->projects👷ListCollaborators = new ListCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators());
        }

        return $this->projects👷ListCollaborators;
    }

    public function projects👷AddCollaborator(): AddCollaborator
    {
        if ($this->projects👷AddCollaborator instanceof AddCollaborator === false) {
            $this->projects👷AddCollaborator = new AddCollaborator($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username());
        }

        return $this->projects👷AddCollaborator;
    }

    public function projects👷RemoveCollaborator(): RemoveCollaborator
    {
        if ($this->projects👷RemoveCollaborator instanceof RemoveCollaborator === false) {
            $this->projects👷RemoveCollaborator = new RemoveCollaborator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username());
        }

        return $this->projects👷RemoveCollaborator;
    }

    public function projects👷GetPermissionForUser(): GetPermissionForUser
    {
        if ($this->projects👷GetPermissionForUser instanceof GetPermissionForUser === false) {
            $this->projects👷GetPermissionForUser = new GetPermissionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission());
        }

        return $this->projects👷GetPermissionForUser;
    }

    public function projects👷ListColumns(): ListColumns
    {
        if ($this->projects👷ListColumns instanceof ListColumns === false) {
            $this->projects👷ListColumns = new ListColumns($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Columns());
        }

        return $this->projects👷ListColumns;
    }

    public function projects👷CreateColumn(): CreateColumn
    {
        if ($this->projects👷CreateColumn instanceof CreateColumn === false) {
            $this->projects👷CreateColumn = new CreateColumn($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Columns());
        }

        return $this->projects👷CreateColumn;
    }

    public function rateLimit👷Get(): \ApiClients\Client\GitHub\Internal\Operator\RateLimit\Get
    {
        if ($this->rateLimit👷Get instanceof \ApiClients\Client\GitHub\Internal\Operator\RateLimit\Get === false) {
            $this->rateLimit👷Get = new \ApiClients\Client\GitHub\Internal\Operator\RateLimit\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀RateLimit());
        }

        return $this->rateLimit👷Get;
    }

    public function repos👷Get(): \ApiClients\Client\GitHub\Internal\Operator\Repos\Get
    {
        if ($this->repos👷Get instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\Get === false) {
            $this->repos👷Get = new \ApiClients\Client\GitHub\Internal\Operator\Repos\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo());
        }

        return $this->repos👷Get;
    }

    public function repos👷Delete(): \ApiClients\Client\GitHub\Internal\Operator\Repos\Delete
    {
        if ($this->repos👷Delete instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\Delete === false) {
            $this->repos👷Delete = new \ApiClients\Client\GitHub\Internal\Operator\Repos\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo());
        }

        return $this->repos👷Delete;
    }

    public function repos👷Update(): \ApiClients\Client\GitHub\Internal\Operator\Repos\Update
    {
        if ($this->repos👷Update instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\Update === false) {
            $this->repos👷Update = new \ApiClients\Client\GitHub\Internal\Operator\Repos\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo());
        }

        return $this->repos👷Update;
    }

    public function actions👷ListArtifactsForRepo(): ListArtifactsForRepo
    {
        if ($this->actions👷ListArtifactsForRepo instanceof ListArtifactsForRepo === false) {
            $this->actions👷ListArtifactsForRepo = new ListArtifactsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts());
        }

        return $this->actions👷ListArtifactsForRepo;
    }

    public function actions👷GetArtifact(): GetArtifact
    {
        if ($this->actions👷GetArtifact instanceof GetArtifact === false) {
            $this->actions👷GetArtifact = new GetArtifact($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId());
        }

        return $this->actions👷GetArtifact;
    }

    public function actions👷DeleteArtifact(): DeleteArtifact
    {
        if ($this->actions👷DeleteArtifact instanceof DeleteArtifact === false) {
            $this->actions👷DeleteArtifact = new DeleteArtifact($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteArtifact;
    }

    public function actions👷DownloadArtifact(): DownloadArtifact
    {
        if ($this->actions👷DownloadArtifact instanceof DownloadArtifact === false) {
            $this->actions👷DownloadArtifact = new DownloadArtifact($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat());
        }

        return $this->actions👷DownloadArtifact;
    }

    public function actions👷GetActionsCacheUsage(): GetActionsCacheUsage
    {
        if ($this->actions👷GetActionsCacheUsage instanceof GetActionsCacheUsage === false) {
            $this->actions👷GetActionsCacheUsage = new GetActionsCacheUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage());
        }

        return $this->actions👷GetActionsCacheUsage;
    }

    public function actions👷GetActionsCacheList(): GetActionsCacheList
    {
        if ($this->actions👷GetActionsCacheList instanceof GetActionsCacheList === false) {
            $this->actions👷GetActionsCacheList = new GetActionsCacheList($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches());
        }

        return $this->actions👷GetActionsCacheList;
    }

    public function actions👷DeleteActionsCacheByKey(): DeleteActionsCacheByKey
    {
        if ($this->actions👷DeleteActionsCacheByKey instanceof DeleteActionsCacheByKey === false) {
            $this->actions👷DeleteActionsCacheByKey = new DeleteActionsCacheByKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches());
        }

        return $this->actions👷DeleteActionsCacheByKey;
    }

    public function actions👷DeleteActionsCacheById(): DeleteActionsCacheById
    {
        if ($this->actions👷DeleteActionsCacheById instanceof DeleteActionsCacheById === false) {
            $this->actions👷DeleteActionsCacheById = new DeleteActionsCacheById($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteActionsCacheById;
    }

    public function actions👷GetJobForWorkflowRun(): GetJobForWorkflowRun
    {
        if ($this->actions👷GetJobForWorkflowRun instanceof GetJobForWorkflowRun === false) {
            $this->actions👷GetJobForWorkflowRun = new GetJobForWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId());
        }

        return $this->actions👷GetJobForWorkflowRun;
    }

    public function actions👷DownloadJobLogsForWorkflowRun(): DownloadJobLogsForWorkflowRun
    {
        if ($this->actions👷DownloadJobLogsForWorkflowRun instanceof DownloadJobLogsForWorkflowRun === false) {
            $this->actions👷DownloadJobLogsForWorkflowRun = new DownloadJobLogsForWorkflowRun($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadJobLogsForWorkflowRun;
    }

    public function actions👷ReRunJobForWorkflowRun(): ReRunJobForWorkflowRun
    {
        if ($this->actions👷ReRunJobForWorkflowRun instanceof ReRunJobForWorkflowRun === false) {
            $this->actions👷ReRunJobForWorkflowRun = new ReRunJobForWorkflowRun($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Rerun());
        }

        return $this->actions👷ReRunJobForWorkflowRun;
    }

    public function actions👷GetCustomOidcSubClaimForRepo(): GetCustomOidcSubClaimForRepo
    {
        if ($this->actions👷GetCustomOidcSubClaimForRepo instanceof GetCustomOidcSubClaimForRepo === false) {
            $this->actions👷GetCustomOidcSubClaimForRepo = new GetCustomOidcSubClaimForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub());
        }

        return $this->actions👷GetCustomOidcSubClaimForRepo;
    }

    public function actions👷SetCustomOidcSubClaimForRepo(): SetCustomOidcSubClaimForRepo
    {
        if ($this->actions👷SetCustomOidcSubClaimForRepo instanceof SetCustomOidcSubClaimForRepo === false) {
            $this->actions👷SetCustomOidcSubClaimForRepo = new SetCustomOidcSubClaimForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub());
        }

        return $this->actions👷SetCustomOidcSubClaimForRepo;
    }

    public function actions👷ListRepoOrganizationSecrets(): ListRepoOrganizationSecrets
    {
        if ($this->actions👷ListRepoOrganizationSecrets instanceof ListRepoOrganizationSecrets === false) {
            $this->actions👷ListRepoOrganizationSecrets = new ListRepoOrganizationSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets());
        }

        return $this->actions👷ListRepoOrganizationSecrets;
    }

    public function actions👷ListRepoOrganizationVariables(): ListRepoOrganizationVariables
    {
        if ($this->actions👷ListRepoOrganizationVariables instanceof ListRepoOrganizationVariables === false) {
            $this->actions👷ListRepoOrganizationVariables = new ListRepoOrganizationVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables());
        }

        return $this->actions👷ListRepoOrganizationVariables;
    }

    public function actions👷GetGithubActionsPermissionsRepository(): GetGithubActionsPermissionsRepository
    {
        if ($this->actions👷GetGithubActionsPermissionsRepository instanceof GetGithubActionsPermissionsRepository === false) {
            $this->actions👷GetGithubActionsPermissionsRepository = new GetGithubActionsPermissionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions());
        }

        return $this->actions👷GetGithubActionsPermissionsRepository;
    }

    public function actions👷SetGithubActionsPermissionsRepository(): SetGithubActionsPermissionsRepository
    {
        if ($this->actions👷SetGithubActionsPermissionsRepository instanceof SetGithubActionsPermissionsRepository === false) {
            $this->actions👷SetGithubActionsPermissionsRepository = new SetGithubActionsPermissionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetGithubActionsPermissionsRepository;
    }

    public function actions👷GetWorkflowAccessToRepository(): GetWorkflowAccessToRepository
    {
        if ($this->actions👷GetWorkflowAccessToRepository instanceof GetWorkflowAccessToRepository === false) {
            $this->actions👷GetWorkflowAccessToRepository = new GetWorkflowAccessToRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access());
        }

        return $this->actions👷GetWorkflowAccessToRepository;
    }

    public function actions👷SetWorkflowAccessToRepository(): SetWorkflowAccessToRepository
    {
        if ($this->actions👷SetWorkflowAccessToRepository instanceof SetWorkflowAccessToRepository === false) {
            $this->actions👷SetWorkflowAccessToRepository = new SetWorkflowAccessToRepository($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetWorkflowAccessToRepository;
    }

    public function actions👷GetAllowedActionsRepository(): GetAllowedActionsRepository
    {
        if ($this->actions👷GetAllowedActionsRepository instanceof GetAllowedActionsRepository === false) {
            $this->actions👷GetAllowedActionsRepository = new GetAllowedActionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->actions👷GetAllowedActionsRepository;
    }

    public function actions👷SetAllowedActionsRepository(): SetAllowedActionsRepository
    {
        if ($this->actions👷SetAllowedActionsRepository instanceof SetAllowedActionsRepository === false) {
            $this->actions👷SetAllowedActionsRepository = new SetAllowedActionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetAllowedActionsRepository;
    }

    public function actions👷GetGithubActionsDefaultWorkflowPermissionsRepository(): GetGithubActionsDefaultWorkflowPermissionsRepository
    {
        if ($this->actions👷GetGithubActionsDefaultWorkflowPermissionsRepository instanceof GetGithubActionsDefaultWorkflowPermissionsRepository === false) {
            $this->actions👷GetGithubActionsDefaultWorkflowPermissionsRepository = new GetGithubActionsDefaultWorkflowPermissionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Workflow());
        }

        return $this->actions👷GetGithubActionsDefaultWorkflowPermissionsRepository;
    }

    public function actions👷SetGithubActionsDefaultWorkflowPermissionsRepository(): SetGithubActionsDefaultWorkflowPermissionsRepository
    {
        if ($this->actions👷SetGithubActionsDefaultWorkflowPermissionsRepository instanceof SetGithubActionsDefaultWorkflowPermissionsRepository === false) {
            $this->actions👷SetGithubActionsDefaultWorkflowPermissionsRepository = new SetGithubActionsDefaultWorkflowPermissionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetGithubActionsDefaultWorkflowPermissionsRepository;
    }

    public function actions👷ListSelfHostedRunnersForRepo(): ListSelfHostedRunnersForRepo
    {
        if ($this->actions👷ListSelfHostedRunnersForRepo instanceof ListSelfHostedRunnersForRepo === false) {
            $this->actions👷ListSelfHostedRunnersForRepo = new ListSelfHostedRunnersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners());
        }

        return $this->actions👷ListSelfHostedRunnersForRepo;
    }

    public function actions👷ListRunnerApplicationsForRepo(): ListRunnerApplicationsForRepo
    {
        if ($this->actions👷ListRunnerApplicationsForRepo instanceof ListRunnerApplicationsForRepo === false) {
            $this->actions👷ListRunnerApplicationsForRepo = new ListRunnerApplicationsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads());
        }

        return $this->actions👷ListRunnerApplicationsForRepo;
    }

    public function actions👷GenerateRunnerJitconfigForRepo(): GenerateRunnerJitconfigForRepo
    {
        if ($this->actions👷GenerateRunnerJitconfigForRepo instanceof GenerateRunnerJitconfigForRepo === false) {
            $this->actions👷GenerateRunnerJitconfigForRepo = new GenerateRunnerJitconfigForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀GenerateJitconfig());
        }

        return $this->actions👷GenerateRunnerJitconfigForRepo;
    }

    public function actions👷CreateRegistrationTokenForRepo(): CreateRegistrationTokenForRepo
    {
        if ($this->actions👷CreateRegistrationTokenForRepo instanceof CreateRegistrationTokenForRepo === false) {
            $this->actions👷CreateRegistrationTokenForRepo = new CreateRegistrationTokenForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken());
        }

        return $this->actions👷CreateRegistrationTokenForRepo;
    }

    public function actions👷CreateRemoveTokenForRepo(): CreateRemoveTokenForRepo
    {
        if ($this->actions👷CreateRemoveTokenForRepo instanceof CreateRemoveTokenForRepo === false) {
            $this->actions👷CreateRemoveTokenForRepo = new CreateRemoveTokenForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken());
        }

        return $this->actions👷CreateRemoveTokenForRepo;
    }

    public function actions👷GetSelfHostedRunnerForRepo(): GetSelfHostedRunnerForRepo
    {
        if ($this->actions👷GetSelfHostedRunnerForRepo instanceof GetSelfHostedRunnerForRepo === false) {
            $this->actions👷GetSelfHostedRunnerForRepo = new GetSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->actions👷GetSelfHostedRunnerForRepo;
    }

    public function actions👷DeleteSelfHostedRunnerFromRepo(): DeleteSelfHostedRunnerFromRepo
    {
        if ($this->actions👷DeleteSelfHostedRunnerFromRepo instanceof DeleteSelfHostedRunnerFromRepo === false) {
            $this->actions👷DeleteSelfHostedRunnerFromRepo = new DeleteSelfHostedRunnerFromRepo($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteSelfHostedRunnerFromRepo;
    }

    public function actions👷ListLabelsForSelfHostedRunnerForRepo(): ListLabelsForSelfHostedRunnerForRepo
    {
        if ($this->actions👷ListLabelsForSelfHostedRunnerForRepo instanceof ListLabelsForSelfHostedRunnerForRepo === false) {
            $this->actions👷ListLabelsForSelfHostedRunnerForRepo = new ListLabelsForSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷ListLabelsForSelfHostedRunnerForRepo;
    }

    public function actions👷SetCustomLabelsForSelfHostedRunnerForRepo(): SetCustomLabelsForSelfHostedRunnerForRepo
    {
        if ($this->actions👷SetCustomLabelsForSelfHostedRunnerForRepo instanceof SetCustomLabelsForSelfHostedRunnerForRepo === false) {
            $this->actions👷SetCustomLabelsForSelfHostedRunnerForRepo = new SetCustomLabelsForSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷SetCustomLabelsForSelfHostedRunnerForRepo;
    }

    public function actions👷AddCustomLabelsToSelfHostedRunnerForRepo(): AddCustomLabelsToSelfHostedRunnerForRepo
    {
        if ($this->actions👷AddCustomLabelsToSelfHostedRunnerForRepo instanceof AddCustomLabelsToSelfHostedRunnerForRepo === false) {
            $this->actions👷AddCustomLabelsToSelfHostedRunnerForRepo = new AddCustomLabelsToSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷AddCustomLabelsToSelfHostedRunnerForRepo;
    }

    public function actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForRepo(): RemoveAllCustomLabelsFromSelfHostedRunnerForRepo
    {
        if ($this->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForRepo instanceof RemoveAllCustomLabelsFromSelfHostedRunnerForRepo === false) {
            $this->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForRepo = new RemoveAllCustomLabelsFromSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForRepo;
    }

    public function actions👷RemoveCustomLabelFromSelfHostedRunnerForRepo(): RemoveCustomLabelFromSelfHostedRunnerForRepo
    {
        if ($this->actions👷RemoveCustomLabelFromSelfHostedRunnerForRepo instanceof RemoveCustomLabelFromSelfHostedRunnerForRepo === false) {
            $this->actions👷RemoveCustomLabelFromSelfHostedRunnerForRepo = new RemoveCustomLabelFromSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name());
        }

        return $this->actions👷RemoveCustomLabelFromSelfHostedRunnerForRepo;
    }

    public function actions👷ListWorkflowRunsForRepo(): ListWorkflowRunsForRepo
    {
        if ($this->actions👷ListWorkflowRunsForRepo instanceof ListWorkflowRunsForRepo === false) {
            $this->actions👷ListWorkflowRunsForRepo = new ListWorkflowRunsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs());
        }

        return $this->actions👷ListWorkflowRunsForRepo;
    }

    public function actions👷GetWorkflowRun(): GetWorkflowRun
    {
        if ($this->actions👷GetWorkflowRun instanceof GetWorkflowRun === false) {
            $this->actions👷GetWorkflowRun = new GetWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId());
        }

        return $this->actions👷GetWorkflowRun;
    }

    public function actions👷DeleteWorkflowRun(): DeleteWorkflowRun
    {
        if ($this->actions👷DeleteWorkflowRun instanceof DeleteWorkflowRun === false) {
            $this->actions👷DeleteWorkflowRun = new DeleteWorkflowRun($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteWorkflowRun;
    }

    public function actions👷GetReviewsForRun(): GetReviewsForRun
    {
        if ($this->actions👷GetReviewsForRun instanceof GetReviewsForRun === false) {
            $this->actions👷GetReviewsForRun = new GetReviewsForRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approvals());
        }

        return $this->actions👷GetReviewsForRun;
    }

    public function actions👷ApproveWorkflowRun(): ApproveWorkflowRun
    {
        if ($this->actions👷ApproveWorkflowRun instanceof ApproveWorkflowRun === false) {
            $this->actions👷ApproveWorkflowRun = new ApproveWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approve());
        }

        return $this->actions👷ApproveWorkflowRun;
    }

    public function actions👷ListWorkflowRunArtifacts(): ListWorkflowRunArtifacts
    {
        if ($this->actions👷ListWorkflowRunArtifacts instanceof ListWorkflowRunArtifacts === false) {
            $this->actions👷ListWorkflowRunArtifacts = new ListWorkflowRunArtifacts($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts());
        }

        return $this->actions👷ListWorkflowRunArtifacts;
    }

    public function actions👷GetWorkflowRunAttempt(): GetWorkflowRunAttempt
    {
        if ($this->actions👷GetWorkflowRunAttempt instanceof GetWorkflowRunAttempt === false) {
            $this->actions👷GetWorkflowRunAttempt = new GetWorkflowRunAttempt($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber());
        }

        return $this->actions👷GetWorkflowRunAttempt;
    }

    public function actions👷ListJobsForWorkflowRunAttempt(): ListJobsForWorkflowRunAttempt
    {
        if ($this->actions👷ListJobsForWorkflowRunAttempt instanceof ListJobsForWorkflowRunAttempt === false) {
            $this->actions👷ListJobsForWorkflowRunAttempt = new ListJobsForWorkflowRunAttempt($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs());
        }

        return $this->actions👷ListJobsForWorkflowRunAttempt;
    }

    public function actions👷DownloadWorkflowRunAttemptLogs(): DownloadWorkflowRunAttemptLogs
    {
        if ($this->actions👷DownloadWorkflowRunAttemptLogs instanceof DownloadWorkflowRunAttemptLogs === false) {
            $this->actions👷DownloadWorkflowRunAttemptLogs = new DownloadWorkflowRunAttemptLogs($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadWorkflowRunAttemptLogs;
    }

    public function actions👷CancelWorkflowRun(): CancelWorkflowRun
    {
        if ($this->actions👷CancelWorkflowRun instanceof CancelWorkflowRun === false) {
            $this->actions👷CancelWorkflowRun = new CancelWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel());
        }

        return $this->actions👷CancelWorkflowRun;
    }

    public function actions👷ReviewCustomGatesForRun(): ReviewCustomGatesForRun
    {
        if ($this->actions👷ReviewCustomGatesForRun instanceof ReviewCustomGatesForRun === false) {
            $this->actions👷ReviewCustomGatesForRun = new ReviewCustomGatesForRun($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷ReviewCustomGatesForRun;
    }

    public function actions👷ForceCancelWorkflowRun(): ForceCancelWorkflowRun
    {
        if ($this->actions👷ForceCancelWorkflowRun instanceof ForceCancelWorkflowRun === false) {
            $this->actions👷ForceCancelWorkflowRun = new ForceCancelWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀ForceCancel());
        }

        return $this->actions👷ForceCancelWorkflowRun;
    }

    public function actions👷ListJobsForWorkflowRun(): ListJobsForWorkflowRun
    {
        if ($this->actions👷ListJobsForWorkflowRun instanceof ListJobsForWorkflowRun === false) {
            $this->actions👷ListJobsForWorkflowRun = new ListJobsForWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs());
        }

        return $this->actions👷ListJobsForWorkflowRun;
    }

    public function actions👷DownloadWorkflowRunLogs(): DownloadWorkflowRunLogs
    {
        if ($this->actions👷DownloadWorkflowRunLogs instanceof DownloadWorkflowRunLogs === false) {
            $this->actions👷DownloadWorkflowRunLogs = new DownloadWorkflowRunLogs($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadWorkflowRunLogs;
    }

    public function actions👷DeleteWorkflowRunLogs(): DeleteWorkflowRunLogs
    {
        if ($this->actions👷DeleteWorkflowRunLogs instanceof DeleteWorkflowRunLogs === false) {
            $this->actions👷DeleteWorkflowRunLogs = new DeleteWorkflowRunLogs($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs());
        }

        return $this->actions👷DeleteWorkflowRunLogs;
    }

    public function actions👷GetPendingDeploymentsForRun(): GetPendingDeploymentsForRun
    {
        if ($this->actions👷GetPendingDeploymentsForRun instanceof GetPendingDeploymentsForRun === false) {
            $this->actions👷GetPendingDeploymentsForRun = new GetPendingDeploymentsForRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments());
        }

        return $this->actions👷GetPendingDeploymentsForRun;
    }

    public function actions👷ReviewPendingDeploymentsForRun(): ReviewPendingDeploymentsForRun
    {
        if ($this->actions👷ReviewPendingDeploymentsForRun instanceof ReviewPendingDeploymentsForRun === false) {
            $this->actions👷ReviewPendingDeploymentsForRun = new ReviewPendingDeploymentsForRun($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments());
        }

        return $this->actions👷ReviewPendingDeploymentsForRun;
    }

    public function actions👷ReRunWorkflow(): ReRunWorkflow
    {
        if ($this->actions👷ReRunWorkflow instanceof ReRunWorkflow === false) {
            $this->actions👷ReRunWorkflow = new ReRunWorkflow($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun());
        }

        return $this->actions👷ReRunWorkflow;
    }

    public function actions👷ReRunWorkflowFailedJobs(): ReRunWorkflowFailedJobs
    {
        if ($this->actions👷ReRunWorkflowFailedJobs instanceof ReRunWorkflowFailedJobs === false) {
            $this->actions👷ReRunWorkflowFailedJobs = new ReRunWorkflowFailedJobs($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀RerunFailedJobs());
        }

        return $this->actions👷ReRunWorkflowFailedJobs;
    }

    public function actions👷GetWorkflowRunUsage(): GetWorkflowRunUsage
    {
        if ($this->actions👷GetWorkflowRunUsage instanceof GetWorkflowRunUsage === false) {
            $this->actions👷GetWorkflowRunUsage = new GetWorkflowRunUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing());
        }

        return $this->actions👷GetWorkflowRunUsage;
    }

    public function actions👷ListRepoSecrets(): ListRepoSecrets
    {
        if ($this->actions👷ListRepoSecrets instanceof ListRepoSecrets === false) {
            $this->actions👷ListRepoSecrets = new ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets());
        }

        return $this->actions👷ListRepoSecrets;
    }

    public function actions👷GetRepoPublicKey(): GetRepoPublicKey
    {
        if ($this->actions👷GetRepoPublicKey instanceof GetRepoPublicKey === false) {
            $this->actions👷GetRepoPublicKey = new GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey());
        }

        return $this->actions👷GetRepoPublicKey;
    }

    public function actions👷GetRepoSecret(): GetRepoSecret
    {
        if ($this->actions👷GetRepoSecret instanceof GetRepoSecret === false) {
            $this->actions👷GetRepoSecret = new GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->actions👷GetRepoSecret;
    }

    public function actions👷CreateOrUpdateRepoSecret(): CreateOrUpdateRepoSecret
    {
        if ($this->actions👷CreateOrUpdateRepoSecret instanceof CreateOrUpdateRepoSecret === false) {
            $this->actions👷CreateOrUpdateRepoSecret = new CreateOrUpdateRepoSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->actions👷CreateOrUpdateRepoSecret;
    }

    public function actions👷DeleteRepoSecret(): DeleteRepoSecret
    {
        if ($this->actions👷DeleteRepoSecret instanceof DeleteRepoSecret === false) {
            $this->actions👷DeleteRepoSecret = new DeleteRepoSecret($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteRepoSecret;
    }

    public function actions👷ListRepoVariables(): ListRepoVariables
    {
        if ($this->actions👷ListRepoVariables instanceof ListRepoVariables === false) {
            $this->actions👷ListRepoVariables = new ListRepoVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables());
        }

        return $this->actions👷ListRepoVariables;
    }

    public function actions👷CreateRepoVariable(): CreateRepoVariable
    {
        if ($this->actions👷CreateRepoVariable instanceof CreateRepoVariable === false) {
            $this->actions👷CreateRepoVariable = new CreateRepoVariable($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables());
        }

        return $this->actions👷CreateRepoVariable;
    }

    public function actions👷GetRepoVariable(): GetRepoVariable
    {
        if ($this->actions👷GetRepoVariable instanceof GetRepoVariable === false) {
            $this->actions👷GetRepoVariable = new GetRepoVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name());
        }

        return $this->actions👷GetRepoVariable;
    }

    public function actions👷DeleteRepoVariable(): DeleteRepoVariable
    {
        if ($this->actions👷DeleteRepoVariable instanceof DeleteRepoVariable === false) {
            $this->actions👷DeleteRepoVariable = new DeleteRepoVariable($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteRepoVariable;
    }

    public function actions👷UpdateRepoVariable(): UpdateRepoVariable
    {
        if ($this->actions👷UpdateRepoVariable instanceof UpdateRepoVariable === false) {
            $this->actions👷UpdateRepoVariable = new UpdateRepoVariable($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷UpdateRepoVariable;
    }

    public function actions👷ListRepoWorkflows(): ListRepoWorkflows
    {
        if ($this->actions👷ListRepoWorkflows instanceof ListRepoWorkflows === false) {
            $this->actions👷ListRepoWorkflows = new ListRepoWorkflows($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows());
        }

        return $this->actions👷ListRepoWorkflows;
    }

    public function actions👷GetWorkflow(): GetWorkflow
    {
        if ($this->actions👷GetWorkflow instanceof GetWorkflow === false) {
            $this->actions👷GetWorkflow = new GetWorkflow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId());
        }

        return $this->actions👷GetWorkflow;
    }

    public function actions👷DisableWorkflow(): DisableWorkflow
    {
        if ($this->actions👷DisableWorkflow instanceof DisableWorkflow === false) {
            $this->actions👷DisableWorkflow = new DisableWorkflow($this->browser, $this->authentication);
        }

        return $this->actions👷DisableWorkflow;
    }

    public function actions👷CreateWorkflowDispatch(): CreateWorkflowDispatch
    {
        if ($this->actions👷CreateWorkflowDispatch instanceof CreateWorkflowDispatch === false) {
            $this->actions👷CreateWorkflowDispatch = new CreateWorkflowDispatch($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷CreateWorkflowDispatch;
    }

    public function actions👷EnableWorkflow(): EnableWorkflow
    {
        if ($this->actions👷EnableWorkflow instanceof EnableWorkflow === false) {
            $this->actions👷EnableWorkflow = new EnableWorkflow($this->browser, $this->authentication);
        }

        return $this->actions👷EnableWorkflow;
    }

    public function actions👷ListWorkflowRuns(): ListWorkflowRuns
    {
        if ($this->actions👷ListWorkflowRuns instanceof ListWorkflowRuns === false) {
            $this->actions👷ListWorkflowRuns = new ListWorkflowRuns($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs());
        }

        return $this->actions👷ListWorkflowRuns;
    }

    public function actions👷GetWorkflowUsage(): GetWorkflowUsage
    {
        if ($this->actions👷GetWorkflowUsage instanceof GetWorkflowUsage === false) {
            $this->actions👷GetWorkflowUsage = new GetWorkflowUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing());
        }

        return $this->actions👷GetWorkflowUsage;
    }

    public function repos👷ListActivities(): ListActivities
    {
        if ($this->repos👷ListActivities instanceof ListActivities === false) {
            $this->repos👷ListActivities = new ListActivities($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Activity());
        }

        return $this->repos👷ListActivities;
    }

    public function issues👷ListAssignees(): ListAssignees
    {
        if ($this->issues👷ListAssignees instanceof ListAssignees === false) {
            $this->issues👷ListAssignees = new ListAssignees($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees());
        }

        return $this->issues👷ListAssignees;
    }

    public function issues👷CheckUserCanBeAssigned(): CheckUserCanBeAssigned
    {
        if ($this->issues👷CheckUserCanBeAssigned instanceof CheckUserCanBeAssigned === false) {
            $this->issues👷CheckUserCanBeAssigned = new CheckUserCanBeAssigned($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee());
        }

        return $this->issues👷CheckUserCanBeAssigned;
    }

    public function repos👷CreateAttestation(): CreateAttestation
    {
        if ($this->repos👷CreateAttestation instanceof CreateAttestation === false) {
            $this->repos👷CreateAttestation = new CreateAttestation($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Attestations());
        }

        return $this->repos👷CreateAttestation;
    }

    public function repos👷ListAttestations(): \ApiClients\Client\GitHub\Internal\Operator\Repos\ListAttestations
    {
        if ($this->repos👷ListAttestations instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\ListAttestations === false) {
            $this->repos👷ListAttestations = new \ApiClients\Client\GitHub\Internal\Operator\Repos\ListAttestations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Attestations🌀SubjectDigest());
        }

        return $this->repos👷ListAttestations;
    }

    public function repos👷ListAutolinks(): ListAutolinks
    {
        if ($this->repos👷ListAutolinks instanceof ListAutolinks === false) {
            $this->repos👷ListAutolinks = new ListAutolinks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks());
        }

        return $this->repos👷ListAutolinks;
    }

    public function repos👷CreateAutolink(): CreateAutolink
    {
        if ($this->repos👷CreateAutolink instanceof CreateAutolink === false) {
            $this->repos👷CreateAutolink = new CreateAutolink($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks());
        }

        return $this->repos👷CreateAutolink;
    }

    public function repos👷GetAutolink(): GetAutolink
    {
        if ($this->repos👷GetAutolink instanceof GetAutolink === false) {
            $this->repos👷GetAutolink = new GetAutolink($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId());
        }

        return $this->repos👷GetAutolink;
    }

    public function repos👷DeleteAutolink(): DeleteAutolink
    {
        if ($this->repos👷DeleteAutolink instanceof DeleteAutolink === false) {
            $this->repos👷DeleteAutolink = new DeleteAutolink($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId());
        }

        return $this->repos👷DeleteAutolink;
    }

    public function repos👷CheckAutomatedSecurityFixes(): CheckAutomatedSecurityFixes
    {
        if ($this->repos👷CheckAutomatedSecurityFixes instanceof CheckAutomatedSecurityFixes === false) {
            $this->repos👷CheckAutomatedSecurityFixes = new CheckAutomatedSecurityFixes($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes());
        }

        return $this->repos👷CheckAutomatedSecurityFixes;
    }

    public function repos👷EnableAutomatedSecurityFixes(): EnableAutomatedSecurityFixes
    {
        if ($this->repos👷EnableAutomatedSecurityFixes instanceof EnableAutomatedSecurityFixes === false) {
            $this->repos👷EnableAutomatedSecurityFixes = new EnableAutomatedSecurityFixes($this->browser, $this->authentication);
        }

        return $this->repos👷EnableAutomatedSecurityFixes;
    }

    public function repos👷DisableAutomatedSecurityFixes(): DisableAutomatedSecurityFixes
    {
        if ($this->repos👷DisableAutomatedSecurityFixes instanceof DisableAutomatedSecurityFixes === false) {
            $this->repos👷DisableAutomatedSecurityFixes = new DisableAutomatedSecurityFixes($this->browser, $this->authentication);
        }

        return $this->repos👷DisableAutomatedSecurityFixes;
    }

    public function repos👷ListBranches(): ListBranches
    {
        if ($this->repos👷ListBranches instanceof ListBranches === false) {
            $this->repos👷ListBranches = new ListBranches($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches());
        }

        return $this->repos👷ListBranches;
    }

    public function repos👷GetBranch(): GetBranch
    {
        if ($this->repos👷GetBranch instanceof GetBranch === false) {
            $this->repos👷GetBranch = new GetBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch());
        }

        return $this->repos👷GetBranch;
    }

    public function repos👷GetBranchProtection(): GetBranchProtection
    {
        if ($this->repos👷GetBranchProtection instanceof GetBranchProtection === false) {
            $this->repos👷GetBranchProtection = new GetBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection());
        }

        return $this->repos👷GetBranchProtection;
    }

    public function repos👷UpdateBranchProtection(): UpdateBranchProtection
    {
        if ($this->repos👷UpdateBranchProtection instanceof UpdateBranchProtection === false) {
            $this->repos👷UpdateBranchProtection = new UpdateBranchProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection());
        }

        return $this->repos👷UpdateBranchProtection;
    }

    public function repos👷DeleteBranchProtection(): DeleteBranchProtection
    {
        if ($this->repos👷DeleteBranchProtection instanceof DeleteBranchProtection === false) {
            $this->repos👷DeleteBranchProtection = new DeleteBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection());
        }

        return $this->repos👷DeleteBranchProtection;
    }

    public function repos👷GetAdminBranchProtection(): GetAdminBranchProtection
    {
        if ($this->repos👷GetAdminBranchProtection instanceof GetAdminBranchProtection === false) {
            $this->repos👷GetAdminBranchProtection = new GetAdminBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins());
        }

        return $this->repos👷GetAdminBranchProtection;
    }

    public function repos👷SetAdminBranchProtection(): SetAdminBranchProtection
    {
        if ($this->repos👷SetAdminBranchProtection instanceof SetAdminBranchProtection === false) {
            $this->repos👷SetAdminBranchProtection = new SetAdminBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins());
        }

        return $this->repos👷SetAdminBranchProtection;
    }

    public function repos👷DeleteAdminBranchProtection(): DeleteAdminBranchProtection
    {
        if ($this->repos👷DeleteAdminBranchProtection instanceof DeleteAdminBranchProtection === false) {
            $this->repos👷DeleteAdminBranchProtection = new DeleteAdminBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins());
        }

        return $this->repos👷DeleteAdminBranchProtection;
    }

    public function repos👷GetPullRequestReviewProtection(): GetPullRequestReviewProtection
    {
        if ($this->repos👷GetPullRequestReviewProtection instanceof GetPullRequestReviewProtection === false) {
            $this->repos👷GetPullRequestReviewProtection = new GetPullRequestReviewProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews());
        }

        return $this->repos👷GetPullRequestReviewProtection;
    }

    public function repos👷DeletePullRequestReviewProtection(): DeletePullRequestReviewProtection
    {
        if ($this->repos👷DeletePullRequestReviewProtection instanceof DeletePullRequestReviewProtection === false) {
            $this->repos👷DeletePullRequestReviewProtection = new DeletePullRequestReviewProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews());
        }

        return $this->repos👷DeletePullRequestReviewProtection;
    }

    public function repos👷UpdatePullRequestReviewProtection(): UpdatePullRequestReviewProtection
    {
        if ($this->repos👷UpdatePullRequestReviewProtection instanceof UpdatePullRequestReviewProtection === false) {
            $this->repos👷UpdatePullRequestReviewProtection = new UpdatePullRequestReviewProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews());
        }

        return $this->repos👷UpdatePullRequestReviewProtection;
    }

    public function repos👷GetCommitSignatureProtection(): GetCommitSignatureProtection
    {
        if ($this->repos👷GetCommitSignatureProtection instanceof GetCommitSignatureProtection === false) {
            $this->repos👷GetCommitSignatureProtection = new GetCommitSignatureProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures());
        }

        return $this->repos👷GetCommitSignatureProtection;
    }

    public function repos👷CreateCommitSignatureProtection(): CreateCommitSignatureProtection
    {
        if ($this->repos👷CreateCommitSignatureProtection instanceof CreateCommitSignatureProtection === false) {
            $this->repos👷CreateCommitSignatureProtection = new CreateCommitSignatureProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures());
        }

        return $this->repos👷CreateCommitSignatureProtection;
    }

    public function repos👷DeleteCommitSignatureProtection(): DeleteCommitSignatureProtection
    {
        if ($this->repos👷DeleteCommitSignatureProtection instanceof DeleteCommitSignatureProtection === false) {
            $this->repos👷DeleteCommitSignatureProtection = new DeleteCommitSignatureProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures());
        }

        return $this->repos👷DeleteCommitSignatureProtection;
    }

    public function repos👷GetStatusChecksProtection(): GetStatusChecksProtection
    {
        if ($this->repos👷GetStatusChecksProtection instanceof GetStatusChecksProtection === false) {
            $this->repos👷GetStatusChecksProtection = new GetStatusChecksProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks());
        }

        return $this->repos👷GetStatusChecksProtection;
    }

    public function repos👷RemoveStatusCheckProtection(): RemoveStatusCheckProtection
    {
        if ($this->repos👷RemoveStatusCheckProtection instanceof RemoveStatusCheckProtection === false) {
            $this->repos👷RemoveStatusCheckProtection = new RemoveStatusCheckProtection($this->browser, $this->authentication);
        }

        return $this->repos👷RemoveStatusCheckProtection;
    }

    public function repos👷UpdateStatusCheckProtection(): UpdateStatusCheckProtection
    {
        if ($this->repos👷UpdateStatusCheckProtection instanceof UpdateStatusCheckProtection === false) {
            $this->repos👷UpdateStatusCheckProtection = new UpdateStatusCheckProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks());
        }

        return $this->repos👷UpdateStatusCheckProtection;
    }

    public function repos👷GetAllStatusCheckContexts(): GetAllStatusCheckContexts
    {
        if ($this->repos👷GetAllStatusCheckContexts instanceof GetAllStatusCheckContexts === false) {
            $this->repos👷GetAllStatusCheckContexts = new GetAllStatusCheckContexts($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->repos👷GetAllStatusCheckContexts;
    }

    public function repos👷SetStatusCheckContexts(): SetStatusCheckContexts
    {
        if ($this->repos👷SetStatusCheckContexts instanceof SetStatusCheckContexts === false) {
            $this->repos👷SetStatusCheckContexts = new SetStatusCheckContexts($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->repos👷SetStatusCheckContexts;
    }

    public function repos👷AddStatusCheckContexts(): AddStatusCheckContexts
    {
        if ($this->repos👷AddStatusCheckContexts instanceof AddStatusCheckContexts === false) {
            $this->repos👷AddStatusCheckContexts = new AddStatusCheckContexts($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->repos👷AddStatusCheckContexts;
    }

    public function repos👷RemoveStatusCheckContexts(): RemoveStatusCheckContexts
    {
        if ($this->repos👷RemoveStatusCheckContexts instanceof RemoveStatusCheckContexts === false) {
            $this->repos👷RemoveStatusCheckContexts = new RemoveStatusCheckContexts($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->repos👷RemoveStatusCheckContexts;
    }

    public function repos👷GetAccessRestrictions(): GetAccessRestrictions
    {
        if ($this->repos👷GetAccessRestrictions instanceof GetAccessRestrictions === false) {
            $this->repos👷GetAccessRestrictions = new GetAccessRestrictions($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions());
        }

        return $this->repos👷GetAccessRestrictions;
    }

    public function repos👷DeleteAccessRestrictions(): DeleteAccessRestrictions
    {
        if ($this->repos👷DeleteAccessRestrictions instanceof DeleteAccessRestrictions === false) {
            $this->repos👷DeleteAccessRestrictions = new DeleteAccessRestrictions($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteAccessRestrictions;
    }

    public function repos👷GetAppsWithAccessToProtectedBranch(): GetAppsWithAccessToProtectedBranch
    {
        if ($this->repos👷GetAppsWithAccessToProtectedBranch instanceof GetAppsWithAccessToProtectedBranch === false) {
            $this->repos👷GetAppsWithAccessToProtectedBranch = new GetAppsWithAccessToProtectedBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->repos👷GetAppsWithAccessToProtectedBranch;
    }

    public function repos👷SetAppAccessRestrictions(): SetAppAccessRestrictions
    {
        if ($this->repos👷SetAppAccessRestrictions instanceof SetAppAccessRestrictions === false) {
            $this->repos👷SetAppAccessRestrictions = new SetAppAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->repos👷SetAppAccessRestrictions;
    }

    public function repos👷AddAppAccessRestrictions(): AddAppAccessRestrictions
    {
        if ($this->repos👷AddAppAccessRestrictions instanceof AddAppAccessRestrictions === false) {
            $this->repos👷AddAppAccessRestrictions = new AddAppAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->repos👷AddAppAccessRestrictions;
    }

    public function repos👷RemoveAppAccessRestrictions(): RemoveAppAccessRestrictions
    {
        if ($this->repos👷RemoveAppAccessRestrictions instanceof RemoveAppAccessRestrictions === false) {
            $this->repos👷RemoveAppAccessRestrictions = new RemoveAppAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->repos👷RemoveAppAccessRestrictions;
    }

    public function repos👷GetTeamsWithAccessToProtectedBranch(): GetTeamsWithAccessToProtectedBranch
    {
        if ($this->repos👷GetTeamsWithAccessToProtectedBranch instanceof GetTeamsWithAccessToProtectedBranch === false) {
            $this->repos👷GetTeamsWithAccessToProtectedBranch = new GetTeamsWithAccessToProtectedBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->repos👷GetTeamsWithAccessToProtectedBranch;
    }

    public function repos👷SetTeamAccessRestrictions(): SetTeamAccessRestrictions
    {
        if ($this->repos👷SetTeamAccessRestrictions instanceof SetTeamAccessRestrictions === false) {
            $this->repos👷SetTeamAccessRestrictions = new SetTeamAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->repos👷SetTeamAccessRestrictions;
    }

    public function repos👷AddTeamAccessRestrictions(): AddTeamAccessRestrictions
    {
        if ($this->repos👷AddTeamAccessRestrictions instanceof AddTeamAccessRestrictions === false) {
            $this->repos👷AddTeamAccessRestrictions = new AddTeamAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->repos👷AddTeamAccessRestrictions;
    }

    public function repos👷RemoveTeamAccessRestrictions(): RemoveTeamAccessRestrictions
    {
        if ($this->repos👷RemoveTeamAccessRestrictions instanceof RemoveTeamAccessRestrictions === false) {
            $this->repos👷RemoveTeamAccessRestrictions = new RemoveTeamAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->repos👷RemoveTeamAccessRestrictions;
    }

    public function repos👷GetUsersWithAccessToProtectedBranch(): GetUsersWithAccessToProtectedBranch
    {
        if ($this->repos👷GetUsersWithAccessToProtectedBranch instanceof GetUsersWithAccessToProtectedBranch === false) {
            $this->repos👷GetUsersWithAccessToProtectedBranch = new GetUsersWithAccessToProtectedBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->repos👷GetUsersWithAccessToProtectedBranch;
    }

    public function repos👷SetUserAccessRestrictions(): SetUserAccessRestrictions
    {
        if ($this->repos👷SetUserAccessRestrictions instanceof SetUserAccessRestrictions === false) {
            $this->repos👷SetUserAccessRestrictions = new SetUserAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->repos👷SetUserAccessRestrictions;
    }

    public function repos👷AddUserAccessRestrictions(): AddUserAccessRestrictions
    {
        if ($this->repos👷AddUserAccessRestrictions instanceof AddUserAccessRestrictions === false) {
            $this->repos👷AddUserAccessRestrictions = new AddUserAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->repos👷AddUserAccessRestrictions;
    }

    public function repos👷RemoveUserAccessRestrictions(): RemoveUserAccessRestrictions
    {
        if ($this->repos👷RemoveUserAccessRestrictions instanceof RemoveUserAccessRestrictions === false) {
            $this->repos👷RemoveUserAccessRestrictions = new RemoveUserAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->repos👷RemoveUserAccessRestrictions;
    }

    public function repos👷RenameBranch(): RenameBranch
    {
        if ($this->repos👷RenameBranch instanceof RenameBranch === false) {
            $this->repos👷RenameBranch = new RenameBranch($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename());
        }

        return $this->repos👷RenameBranch;
    }

    public function checks👷Create(): \ApiClients\Client\GitHub\Internal\Operator\Checks\Create
    {
        if ($this->checks👷Create instanceof \ApiClients\Client\GitHub\Internal\Operator\Checks\Create === false) {
            $this->checks👷Create = new \ApiClients\Client\GitHub\Internal\Operator\Checks\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns());
        }

        return $this->checks👷Create;
    }

    public function checks👷Get(): \ApiClients\Client\GitHub\Internal\Operator\Checks\Get
    {
        if ($this->checks👷Get instanceof \ApiClients\Client\GitHub\Internal\Operator\Checks\Get === false) {
            $this->checks👷Get = new \ApiClients\Client\GitHub\Internal\Operator\Checks\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId());
        }

        return $this->checks👷Get;
    }

    public function checks👷Update(): \ApiClients\Client\GitHub\Internal\Operator\Checks\Update
    {
        if ($this->checks👷Update instanceof \ApiClients\Client\GitHub\Internal\Operator\Checks\Update === false) {
            $this->checks👷Update = new \ApiClients\Client\GitHub\Internal\Operator\Checks\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId());
        }

        return $this->checks👷Update;
    }

    public function checks👷ListAnnotations(): ListAnnotations
    {
        if ($this->checks👷ListAnnotations instanceof ListAnnotations === false) {
            $this->checks👷ListAnnotations = new ListAnnotations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations());
        }

        return $this->checks👷ListAnnotations;
    }

    public function checks👷RerequestRun(): RerequestRun
    {
        if ($this->checks👷RerequestRun instanceof RerequestRun === false) {
            $this->checks👷RerequestRun = new RerequestRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Rerequest());
        }

        return $this->checks👷RerequestRun;
    }

    public function checks👷CreateSuite(): CreateSuite
    {
        if ($this->checks👷CreateSuite instanceof CreateSuite === false) {
            $this->checks👷CreateSuite = new CreateSuite($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites());
        }

        return $this->checks👷CreateSuite;
    }

    public function checks👷SetSuitesPreferences(): SetSuitesPreferences
    {
        if ($this->checks👷SetSuitesPreferences instanceof SetSuitesPreferences === false) {
            $this->checks👷SetSuitesPreferences = new SetSuitesPreferences($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences());
        }

        return $this->checks👷SetSuitesPreferences;
    }

    public function checks👷GetSuite(): GetSuite
    {
        if ($this->checks👷GetSuite instanceof GetSuite === false) {
            $this->checks👷GetSuite = new GetSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId());
        }

        return $this->checks👷GetSuite;
    }

    public function checks👷ListForSuite(): ListForSuite
    {
        if ($this->checks👷ListForSuite instanceof ListForSuite === false) {
            $this->checks👷ListForSuite = new ListForSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns());
        }

        return $this->checks👷ListForSuite;
    }

    public function checks👷RerequestSuite(): RerequestSuite
    {
        if ($this->checks👷RerequestSuite instanceof RerequestSuite === false) {
            $this->checks👷RerequestSuite = new RerequestSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest());
        }

        return $this->checks👷RerequestSuite;
    }

    public function codeScanning👷ListAlertsForRepo(): ListAlertsForRepo
    {
        if ($this->codeScanning👷ListAlertsForRepo instanceof ListAlertsForRepo === false) {
            $this->codeScanning👷ListAlertsForRepo = new ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts());
        }

        return $this->codeScanning👷ListAlertsForRepo;
    }

    public function codeScanning👷GetAlert(): GetAlert
    {
        if ($this->codeScanning👷GetAlert instanceof GetAlert === false) {
            $this->codeScanning👷GetAlert = new GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber());
        }

        return $this->codeScanning👷GetAlert;
    }

    public function codeScanning👷UpdateAlert(): UpdateAlert
    {
        if ($this->codeScanning👷UpdateAlert instanceof UpdateAlert === false) {
            $this->codeScanning👷UpdateAlert = new UpdateAlert($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber());
        }

        return $this->codeScanning👷UpdateAlert;
    }

    public function codeScanning👷ListAlertInstances(): ListAlertInstances
    {
        if ($this->codeScanning👷ListAlertInstances instanceof ListAlertInstances === false) {
            $this->codeScanning👷ListAlertInstances = new ListAlertInstances($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances());
        }

        return $this->codeScanning👷ListAlertInstances;
    }

    public function codeScanning👷ListRecentAnalyses(): ListRecentAnalyses
    {
        if ($this->codeScanning👷ListRecentAnalyses instanceof ListRecentAnalyses === false) {
            $this->codeScanning👷ListRecentAnalyses = new ListRecentAnalyses($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses());
        }

        return $this->codeScanning👷ListRecentAnalyses;
    }

    public function codeScanning👷GetAnalysis(): GetAnalysis
    {
        if ($this->codeScanning👷GetAnalysis instanceof GetAnalysis === false) {
            $this->codeScanning👷GetAnalysis = new GetAnalysis($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId());
        }

        return $this->codeScanning👷GetAnalysis;
    }

    public function codeScanning👷DeleteAnalysis(): DeleteAnalysis
    {
        if ($this->codeScanning👷DeleteAnalysis instanceof DeleteAnalysis === false) {
            $this->codeScanning👷DeleteAnalysis = new DeleteAnalysis($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId());
        }

        return $this->codeScanning👷DeleteAnalysis;
    }

    public function codeScanning👷ListCodeqlDatabases(): ListCodeqlDatabases
    {
        if ($this->codeScanning👷ListCodeqlDatabases instanceof ListCodeqlDatabases === false) {
            $this->codeScanning👷ListCodeqlDatabases = new ListCodeqlDatabases($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases());
        }

        return $this->codeScanning👷ListCodeqlDatabases;
    }

    public function codeScanning👷GetCodeqlDatabase(): GetCodeqlDatabase
    {
        if ($this->codeScanning👷GetCodeqlDatabase instanceof GetCodeqlDatabase === false) {
            $this->codeScanning👷GetCodeqlDatabase = new GetCodeqlDatabase($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language());
        }

        return $this->codeScanning👷GetCodeqlDatabase;
    }

    public function codeScanning👷DeleteCodeqlDatabase(): DeleteCodeqlDatabase
    {
        if ($this->codeScanning👷DeleteCodeqlDatabase instanceof DeleteCodeqlDatabase === false) {
            $this->codeScanning👷DeleteCodeqlDatabase = new DeleteCodeqlDatabase($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language());
        }

        return $this->codeScanning👷DeleteCodeqlDatabase;
    }

    public function codeScanning👷CreateVariantAnalysis(): CreateVariantAnalysis
    {
        if ($this->codeScanning👷CreateVariantAnalysis instanceof CreateVariantAnalysis === false) {
            $this->codeScanning👷CreateVariantAnalysis = new CreateVariantAnalysis($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses());
        }

        return $this->codeScanning👷CreateVariantAnalysis;
    }

    public function codeScanning👷GetVariantAnalysis(): GetVariantAnalysis
    {
        if ($this->codeScanning👷GetVariantAnalysis instanceof GetVariantAnalysis === false) {
            $this->codeScanning👷GetVariantAnalysis = new GetVariantAnalysis($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses🌀CodeqlVariantAnalysisId());
        }

        return $this->codeScanning👷GetVariantAnalysis;
    }

    public function codeScanning👷GetVariantAnalysisRepoTask(): GetVariantAnalysisRepoTask
    {
        if ($this->codeScanning👷GetVariantAnalysisRepoTask instanceof GetVariantAnalysisRepoTask === false) {
            $this->codeScanning👷GetVariantAnalysisRepoTask = new GetVariantAnalysisRepoTask($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses🌀CodeqlVariantAnalysisId🌀Repos🌀RepoOwner🌀RepoName());
        }

        return $this->codeScanning👷GetVariantAnalysisRepoTask;
    }

    public function codeScanning👷GetDefaultSetup(): GetDefaultSetup
    {
        if ($this->codeScanning👷GetDefaultSetup instanceof GetDefaultSetup === false) {
            $this->codeScanning👷GetDefaultSetup = new GetDefaultSetup($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup());
        }

        return $this->codeScanning👷GetDefaultSetup;
    }

    public function codeScanning👷UpdateDefaultSetup(): UpdateDefaultSetup
    {
        if ($this->codeScanning👷UpdateDefaultSetup instanceof UpdateDefaultSetup === false) {
            $this->codeScanning👷UpdateDefaultSetup = new UpdateDefaultSetup($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup());
        }

        return $this->codeScanning👷UpdateDefaultSetup;
    }

    public function codeScanning👷UploadSarif(): UploadSarif
    {
        if ($this->codeScanning👷UploadSarif instanceof UploadSarif === false) {
            $this->codeScanning👷UploadSarif = new UploadSarif($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs());
        }

        return $this->codeScanning👷UploadSarif;
    }

    public function codeScanning👷GetSarif(): GetSarif
    {
        if ($this->codeScanning👷GetSarif instanceof GetSarif === false) {
            $this->codeScanning👷GetSarif = new GetSarif($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId());
        }

        return $this->codeScanning👷GetSarif;
    }

    public function codeSecurity👷GetConfigurationForRepository(): GetConfigurationForRepository
    {
        if ($this->codeSecurity👷GetConfigurationForRepository instanceof GetConfigurationForRepository === false) {
            $this->codeSecurity👷GetConfigurationForRepository = new GetConfigurationForRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeSecurityConfiguration());
        }

        return $this->codeSecurity👷GetConfigurationForRepository;
    }

    public function repos👷CodeownersErrors(): CodeownersErrors
    {
        if ($this->repos👷CodeownersErrors instanceof CodeownersErrors === false) {
            $this->repos👷CodeownersErrors = new CodeownersErrors($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors());
        }

        return $this->repos👷CodeownersErrors;
    }

    public function codespaces👷ListInRepositoryForAuthenticatedUser(): ListInRepositoryForAuthenticatedUser
    {
        if ($this->codespaces👷ListInRepositoryForAuthenticatedUser instanceof ListInRepositoryForAuthenticatedUser === false) {
            $this->codespaces👷ListInRepositoryForAuthenticatedUser = new ListInRepositoryForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces());
        }

        return $this->codespaces👷ListInRepositoryForAuthenticatedUser;
    }

    public function codespaces👷CreateWithRepoForAuthenticatedUser(): CreateWithRepoForAuthenticatedUser
    {
        if ($this->codespaces👷CreateWithRepoForAuthenticatedUser instanceof CreateWithRepoForAuthenticatedUser === false) {
            $this->codespaces👷CreateWithRepoForAuthenticatedUser = new CreateWithRepoForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces());
        }

        return $this->codespaces👷CreateWithRepoForAuthenticatedUser;
    }

    public function codespaces👷ListDevcontainersInRepositoryForAuthenticatedUser(): ListDevcontainersInRepositoryForAuthenticatedUser
    {
        if ($this->codespaces👷ListDevcontainersInRepositoryForAuthenticatedUser instanceof ListDevcontainersInRepositoryForAuthenticatedUser === false) {
            $this->codespaces👷ListDevcontainersInRepositoryForAuthenticatedUser = new ListDevcontainersInRepositoryForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers());
        }

        return $this->codespaces👷ListDevcontainersInRepositoryForAuthenticatedUser;
    }

    public function codespaces👷RepoMachinesForAuthenticatedUser(): RepoMachinesForAuthenticatedUser
    {
        if ($this->codespaces👷RepoMachinesForAuthenticatedUser instanceof RepoMachinesForAuthenticatedUser === false) {
            $this->codespaces👷RepoMachinesForAuthenticatedUser = new RepoMachinesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines());
        }

        return $this->codespaces👷RepoMachinesForAuthenticatedUser;
    }

    public function codespaces👷PreFlightWithRepoForAuthenticatedUser(): PreFlightWithRepoForAuthenticatedUser
    {
        if ($this->codespaces👷PreFlightWithRepoForAuthenticatedUser instanceof PreFlightWithRepoForAuthenticatedUser === false) {
            $this->codespaces👷PreFlightWithRepoForAuthenticatedUser = new PreFlightWithRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_());
        }

        return $this->codespaces👷PreFlightWithRepoForAuthenticatedUser;
    }

    public function codespaces👷CheckPermissionsForDevcontainer(): CheckPermissionsForDevcontainer
    {
        if ($this->codespaces👷CheckPermissionsForDevcontainer instanceof CheckPermissionsForDevcontainer === false) {
            $this->codespaces👷CheckPermissionsForDevcontainer = new CheckPermissionsForDevcontainer($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀PermissionsCheck());
        }

        return $this->codespaces👷CheckPermissionsForDevcontainer;
    }

    public function codespaces👷ListRepoSecrets(): \ApiClients\Client\GitHub\Internal\Operator\Codespaces\ListRepoSecrets
    {
        if ($this->codespaces👷ListRepoSecrets instanceof \ApiClients\Client\GitHub\Internal\Operator\Codespaces\ListRepoSecrets === false) {
            $this->codespaces👷ListRepoSecrets = new \ApiClients\Client\GitHub\Internal\Operator\Codespaces\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets());
        }

        return $this->codespaces👷ListRepoSecrets;
    }

    public function codespaces👷GetRepoPublicKey(): \ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetRepoPublicKey
    {
        if ($this->codespaces👷GetRepoPublicKey instanceof \ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetRepoPublicKey === false) {
            $this->codespaces👷GetRepoPublicKey = new \ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀PublicKey());
        }

        return $this->codespaces👷GetRepoPublicKey;
    }

    public function codespaces👷GetRepoSecret(): \ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetRepoSecret
    {
        if ($this->codespaces👷GetRepoSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetRepoSecret === false) {
            $this->codespaces👷GetRepoSecret = new \ApiClients\Client\GitHub\Internal\Operator\Codespaces\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷GetRepoSecret;
    }

    public function codespaces👷CreateOrUpdateRepoSecret(): \ApiClients\Client\GitHub\Internal\Operator\Codespaces\CreateOrUpdateRepoSecret
    {
        if ($this->codespaces👷CreateOrUpdateRepoSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Codespaces\CreateOrUpdateRepoSecret === false) {
            $this->codespaces👷CreateOrUpdateRepoSecret = new \ApiClients\Client\GitHub\Internal\Operator\Codespaces\CreateOrUpdateRepoSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷CreateOrUpdateRepoSecret;
    }

    public function codespaces👷DeleteRepoSecret(): \ApiClients\Client\GitHub\Internal\Operator\Codespaces\DeleteRepoSecret
    {
        if ($this->codespaces👷DeleteRepoSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Codespaces\DeleteRepoSecret === false) {
            $this->codespaces👷DeleteRepoSecret = new \ApiClients\Client\GitHub\Internal\Operator\Codespaces\DeleteRepoSecret($this->browser, $this->authentication);
        }

        return $this->codespaces👷DeleteRepoSecret;
    }

    public function repos👷ListCollaborators(): \ApiClients\Client\GitHub\Internal\Operator\Repos\ListCollaborators
    {
        if ($this->repos👷ListCollaborators instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\ListCollaborators === false) {
            $this->repos👷ListCollaborators = new \ApiClients\Client\GitHub\Internal\Operator\Repos\ListCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators());
        }

        return $this->repos👷ListCollaborators;
    }

    public function repos👷CheckCollaborator(): CheckCollaborator
    {
        if ($this->repos👷CheckCollaborator instanceof CheckCollaborator === false) {
            $this->repos👷CheckCollaborator = new CheckCollaborator($this->browser, $this->authentication);
        }

        return $this->repos👷CheckCollaborator;
    }

    public function repos👷AddCollaborator(): \ApiClients\Client\GitHub\Internal\Operator\Repos\AddCollaborator
    {
        if ($this->repos👷AddCollaborator instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\AddCollaborator === false) {
            $this->repos👷AddCollaborator = new \ApiClients\Client\GitHub\Internal\Operator\Repos\AddCollaborator($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username());
        }

        return $this->repos👷AddCollaborator;
    }

    public function repos👷RemoveCollaborator(): \ApiClients\Client\GitHub\Internal\Operator\Repos\RemoveCollaborator
    {
        if ($this->repos👷RemoveCollaborator instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\RemoveCollaborator === false) {
            $this->repos👷RemoveCollaborator = new \ApiClients\Client\GitHub\Internal\Operator\Repos\RemoveCollaborator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username());
        }

        return $this->repos👷RemoveCollaborator;
    }

    public function repos👷GetCollaboratorPermissionLevel(): GetCollaboratorPermissionLevel
    {
        if ($this->repos👷GetCollaboratorPermissionLevel instanceof GetCollaboratorPermissionLevel === false) {
            $this->repos👷GetCollaboratorPermissionLevel = new GetCollaboratorPermissionLevel($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission());
        }

        return $this->repos👷GetCollaboratorPermissionLevel;
    }

    public function repos👷ListCommitCommentsForRepo(): ListCommitCommentsForRepo
    {
        if ($this->repos👷ListCommitCommentsForRepo instanceof ListCommitCommentsForRepo === false) {
            $this->repos👷ListCommitCommentsForRepo = new ListCommitCommentsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments());
        }

        return $this->repos👷ListCommitCommentsForRepo;
    }

    public function repos👷GetCommitComment(): GetCommitComment
    {
        if ($this->repos👷GetCommitComment instanceof GetCommitComment === false) {
            $this->repos👷GetCommitComment = new GetCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId());
        }

        return $this->repos👷GetCommitComment;
    }

    public function repos👷DeleteCommitComment(): DeleteCommitComment
    {
        if ($this->repos👷DeleteCommitComment instanceof DeleteCommitComment === false) {
            $this->repos👷DeleteCommitComment = new DeleteCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId());
        }

        return $this->repos👷DeleteCommitComment;
    }

    public function repos👷UpdateCommitComment(): UpdateCommitComment
    {
        if ($this->repos👷UpdateCommitComment instanceof UpdateCommitComment === false) {
            $this->repos👷UpdateCommitComment = new UpdateCommitComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId());
        }

        return $this->repos👷UpdateCommitComment;
    }

    public function reactions👷ListForCommitComment(): ListForCommitComment
    {
        if ($this->reactions👷ListForCommitComment instanceof ListForCommitComment === false) {
            $this->reactions👷ListForCommitComment = new ListForCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForCommitComment;
    }

    public function reactions👷CreateForCommitComment(): CreateForCommitComment
    {
        if ($this->reactions👷CreateForCommitComment instanceof CreateForCommitComment === false) {
            $this->reactions👷CreateForCommitComment = new CreateForCommitComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷CreateForCommitComment;
    }

    public function reactions👷DeleteForCommitComment(): DeleteForCommitComment
    {
        if ($this->reactions👷DeleteForCommitComment instanceof DeleteForCommitComment === false) {
            $this->reactions👷DeleteForCommitComment = new DeleteForCommitComment($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForCommitComment;
    }

    public function repos👷ListCommits(): \ApiClients\Client\GitHub\Internal\Operator\Repos\ListCommits
    {
        if ($this->repos👷ListCommits instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\ListCommits === false) {
            $this->repos👷ListCommits = new \ApiClients\Client\GitHub\Internal\Operator\Repos\ListCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits());
        }

        return $this->repos👷ListCommits;
    }

    public function repos👷ListBranchesForHeadCommit(): ListBranchesForHeadCommit
    {
        if ($this->repos👷ListBranchesForHeadCommit instanceof ListBranchesForHeadCommit === false) {
            $this->repos👷ListBranchesForHeadCommit = new ListBranchesForHeadCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead());
        }

        return $this->repos👷ListBranchesForHeadCommit;
    }

    public function repos👷ListCommentsForCommit(): ListCommentsForCommit
    {
        if ($this->repos👷ListCommentsForCommit instanceof ListCommentsForCommit === false) {
            $this->repos👷ListCommentsForCommit = new ListCommentsForCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments());
        }

        return $this->repos👷ListCommentsForCommit;
    }

    public function repos👷CreateCommitComment(): CreateCommitComment
    {
        if ($this->repos👷CreateCommitComment instanceof CreateCommitComment === false) {
            $this->repos👷CreateCommitComment = new CreateCommitComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments());
        }

        return $this->repos👷CreateCommitComment;
    }

    public function repos👷ListPullRequestsAssociatedWithCommit(): ListPullRequestsAssociatedWithCommit
    {
        if ($this->repos👷ListPullRequestsAssociatedWithCommit instanceof ListPullRequestsAssociatedWithCommit === false) {
            $this->repos👷ListPullRequestsAssociatedWithCommit = new ListPullRequestsAssociatedWithCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls());
        }

        return $this->repos👷ListPullRequestsAssociatedWithCommit;
    }

    public function repos👷GetCommit(): GetCommit
    {
        if ($this->repos👷GetCommit instanceof GetCommit === false) {
            $this->repos👷GetCommit = new GetCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref());
        }

        return $this->repos👷GetCommit;
    }

    public function checks👷ListForRef(): ListForRef
    {
        if ($this->checks👷ListForRef instanceof ListForRef === false) {
            $this->checks👷ListForRef = new ListForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns());
        }

        return $this->checks👷ListForRef;
    }

    public function checks👷ListSuitesForRef(): ListSuitesForRef
    {
        if ($this->checks👷ListSuitesForRef instanceof ListSuitesForRef === false) {
            $this->checks👷ListSuitesForRef = new ListSuitesForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites());
        }

        return $this->checks👷ListSuitesForRef;
    }

    public function repos👷GetCombinedStatusForRef(): GetCombinedStatusForRef
    {
        if ($this->repos👷GetCombinedStatusForRef instanceof GetCombinedStatusForRef === false) {
            $this->repos👷GetCombinedStatusForRef = new GetCombinedStatusForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status());
        }

        return $this->repos👷GetCombinedStatusForRef;
    }

    public function repos👷ListCommitStatusesForRef(): ListCommitStatusesForRef
    {
        if ($this->repos👷ListCommitStatusesForRef instanceof ListCommitStatusesForRef === false) {
            $this->repos👷ListCommitStatusesForRef = new ListCommitStatusesForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses());
        }

        return $this->repos👷ListCommitStatusesForRef;
    }

    public function repos👷GetCommunityProfileMetrics(): GetCommunityProfileMetrics
    {
        if ($this->repos👷GetCommunityProfileMetrics instanceof GetCommunityProfileMetrics === false) {
            $this->repos👷GetCommunityProfileMetrics = new GetCommunityProfileMetrics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Community🌀Profile());
        }

        return $this->repos👷GetCommunityProfileMetrics;
    }

    public function repos👷CompareCommits(): CompareCommits
    {
        if ($this->repos👷CompareCommits instanceof CompareCommits === false) {
            $this->repos👷CompareCommits = new CompareCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead());
        }

        return $this->repos👷CompareCommits;
    }

    public function repos👷GetContent(): GetContent
    {
        if ($this->repos👷GetContent instanceof GetContent === false) {
            $this->repos👷GetContent = new GetContent($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path());
        }

        return $this->repos👷GetContent;
    }

    public function repos👷CreateOrUpdateFileContents(): CreateOrUpdateFileContents
    {
        if ($this->repos👷CreateOrUpdateFileContents instanceof CreateOrUpdateFileContents === false) {
            $this->repos👷CreateOrUpdateFileContents = new CreateOrUpdateFileContents($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path());
        }

        return $this->repos👷CreateOrUpdateFileContents;
    }

    public function repos👷DeleteFile(): DeleteFile
    {
        if ($this->repos👷DeleteFile instanceof DeleteFile === false) {
            $this->repos👷DeleteFile = new DeleteFile($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path());
        }

        return $this->repos👷DeleteFile;
    }

    public function repos👷ListContributors(): ListContributors
    {
        if ($this->repos👷ListContributors instanceof ListContributors === false) {
            $this->repos👷ListContributors = new ListContributors($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contributors());
        }

        return $this->repos👷ListContributors;
    }

    public function dependabot👷ListAlertsForRepo(): \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListAlertsForRepo
    {
        if ($this->dependabot👷ListAlertsForRepo instanceof \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListAlertsForRepo === false) {
            $this->dependabot👷ListAlertsForRepo = new \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts());
        }

        return $this->dependabot👷ListAlertsForRepo;
    }

    public function dependabot👷GetAlert(): \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetAlert
    {
        if ($this->dependabot👷GetAlert instanceof \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetAlert === false) {
            $this->dependabot👷GetAlert = new \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber());
        }

        return $this->dependabot👷GetAlert;
    }

    public function dependabot👷UpdateAlert(): \ApiClients\Client\GitHub\Internal\Operator\Dependabot\UpdateAlert
    {
        if ($this->dependabot👷UpdateAlert instanceof \ApiClients\Client\GitHub\Internal\Operator\Dependabot\UpdateAlert === false) {
            $this->dependabot👷UpdateAlert = new \ApiClients\Client\GitHub\Internal\Operator\Dependabot\UpdateAlert($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber());
        }

        return $this->dependabot👷UpdateAlert;
    }

    public function dependabot👷ListRepoSecrets(): \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListRepoSecrets
    {
        if ($this->dependabot👷ListRepoSecrets instanceof \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListRepoSecrets === false) {
            $this->dependabot👷ListRepoSecrets = new \ApiClients\Client\GitHub\Internal\Operator\Dependabot\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets());
        }

        return $this->dependabot👷ListRepoSecrets;
    }

    public function dependabot👷GetRepoPublicKey(): \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetRepoPublicKey
    {
        if ($this->dependabot👷GetRepoPublicKey instanceof \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetRepoPublicKey === false) {
            $this->dependabot👷GetRepoPublicKey = new \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀PublicKey());
        }

        return $this->dependabot👷GetRepoPublicKey;
    }

    public function dependabot👷GetRepoSecret(): \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetRepoSecret
    {
        if ($this->dependabot👷GetRepoSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetRepoSecret === false) {
            $this->dependabot👷GetRepoSecret = new \ApiClients\Client\GitHub\Internal\Operator\Dependabot\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->dependabot👷GetRepoSecret;
    }

    public function dependabot👷CreateOrUpdateRepoSecret(): \ApiClients\Client\GitHub\Internal\Operator\Dependabot\CreateOrUpdateRepoSecret
    {
        if ($this->dependabot👷CreateOrUpdateRepoSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Dependabot\CreateOrUpdateRepoSecret === false) {
            $this->dependabot👷CreateOrUpdateRepoSecret = new \ApiClients\Client\GitHub\Internal\Operator\Dependabot\CreateOrUpdateRepoSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->dependabot👷CreateOrUpdateRepoSecret;
    }

    public function dependabot👷DeleteRepoSecret(): \ApiClients\Client\GitHub\Internal\Operator\Dependabot\DeleteRepoSecret
    {
        if ($this->dependabot👷DeleteRepoSecret instanceof \ApiClients\Client\GitHub\Internal\Operator\Dependabot\DeleteRepoSecret === false) {
            $this->dependabot👷DeleteRepoSecret = new \ApiClients\Client\GitHub\Internal\Operator\Dependabot\DeleteRepoSecret($this->browser, $this->authentication);
        }

        return $this->dependabot👷DeleteRepoSecret;
    }

    public function dependencyGraph👷DiffRange(): DiffRange
    {
        if ($this->dependencyGraph👷DiffRange instanceof DiffRange === false) {
            $this->dependencyGraph👷DiffRange = new DiffRange($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Compare🌀Basehead());
        }

        return $this->dependencyGraph👷DiffRange;
    }

    public function dependencyGraph👷ExportSbom(): ExportSbom
    {
        if ($this->dependencyGraph👷ExportSbom instanceof ExportSbom === false) {
            $this->dependencyGraph👷ExportSbom = new ExportSbom($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom());
        }

        return $this->dependencyGraph👷ExportSbom;
    }

    public function dependencyGraph👷CreateRepositorySnapshot(): CreateRepositorySnapshot
    {
        if ($this->dependencyGraph👷CreateRepositorySnapshot instanceof CreateRepositorySnapshot === false) {
            $this->dependencyGraph👷CreateRepositorySnapshot = new CreateRepositorySnapshot($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Snapshots());
        }

        return $this->dependencyGraph👷CreateRepositorySnapshot;
    }

    public function repos👷ListDeployments(): ListDeployments
    {
        if ($this->repos👷ListDeployments instanceof ListDeployments === false) {
            $this->repos👷ListDeployments = new ListDeployments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments());
        }

        return $this->repos👷ListDeployments;
    }

    public function repos👷CreateDeployment(): CreateDeployment
    {
        if ($this->repos👷CreateDeployment instanceof CreateDeployment === false) {
            $this->repos👷CreateDeployment = new CreateDeployment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments());
        }

        return $this->repos👷CreateDeployment;
    }

    public function repos👷GetDeployment(): GetDeployment
    {
        if ($this->repos👷GetDeployment instanceof GetDeployment === false) {
            $this->repos👷GetDeployment = new GetDeployment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId());
        }

        return $this->repos👷GetDeployment;
    }

    public function repos👷DeleteDeployment(): DeleteDeployment
    {
        if ($this->repos👷DeleteDeployment instanceof DeleteDeployment === false) {
            $this->repos👷DeleteDeployment = new DeleteDeployment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId());
        }

        return $this->repos👷DeleteDeployment;
    }

    public function repos👷ListDeploymentStatuses(): ListDeploymentStatuses
    {
        if ($this->repos👷ListDeploymentStatuses instanceof ListDeploymentStatuses === false) {
            $this->repos👷ListDeploymentStatuses = new ListDeploymentStatuses($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses());
        }

        return $this->repos👷ListDeploymentStatuses;
    }

    public function repos👷CreateDeploymentStatus(): CreateDeploymentStatus
    {
        if ($this->repos👷CreateDeploymentStatus instanceof CreateDeploymentStatus === false) {
            $this->repos👷CreateDeploymentStatus = new CreateDeploymentStatus($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses());
        }

        return $this->repos👷CreateDeploymentStatus;
    }

    public function repos👷GetDeploymentStatus(): GetDeploymentStatus
    {
        if ($this->repos👷GetDeploymentStatus instanceof GetDeploymentStatus === false) {
            $this->repos👷GetDeploymentStatus = new GetDeploymentStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId());
        }

        return $this->repos👷GetDeploymentStatus;
    }

    public function repos👷CreateDispatchEvent(): CreateDispatchEvent
    {
        if ($this->repos👷CreateDispatchEvent instanceof CreateDispatchEvent === false) {
            $this->repos👷CreateDispatchEvent = new CreateDispatchEvent($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dispatches());
        }

        return $this->repos👷CreateDispatchEvent;
    }

    public function repos👷GetAllEnvironments(): GetAllEnvironments
    {
        if ($this->repos👷GetAllEnvironments instanceof GetAllEnvironments === false) {
            $this->repos👷GetAllEnvironments = new GetAllEnvironments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments());
        }

        return $this->repos👷GetAllEnvironments;
    }

    public function repos👷GetEnvironment(): GetEnvironment
    {
        if ($this->repos👷GetEnvironment instanceof GetEnvironment === false) {
            $this->repos👷GetEnvironment = new GetEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName());
        }

        return $this->repos👷GetEnvironment;
    }

    public function repos👷CreateOrUpdateEnvironment(): CreateOrUpdateEnvironment
    {
        if ($this->repos👷CreateOrUpdateEnvironment instanceof CreateOrUpdateEnvironment === false) {
            $this->repos👷CreateOrUpdateEnvironment = new CreateOrUpdateEnvironment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName());
        }

        return $this->repos👷CreateOrUpdateEnvironment;
    }

    public function repos👷DeleteAnEnvironment(): DeleteAnEnvironment
    {
        if ($this->repos👷DeleteAnEnvironment instanceof DeleteAnEnvironment === false) {
            $this->repos👷DeleteAnEnvironment = new DeleteAnEnvironment($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteAnEnvironment;
    }

    public function repos👷ListDeploymentBranchPolicies(): ListDeploymentBranchPolicies
    {
        if ($this->repos👷ListDeploymentBranchPolicies instanceof ListDeploymentBranchPolicies === false) {
            $this->repos👷ListDeploymentBranchPolicies = new ListDeploymentBranchPolicies($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies());
        }

        return $this->repos👷ListDeploymentBranchPolicies;
    }

    public function repos👷CreateDeploymentBranchPolicy(): CreateDeploymentBranchPolicy
    {
        if ($this->repos👷CreateDeploymentBranchPolicy instanceof CreateDeploymentBranchPolicy === false) {
            $this->repos👷CreateDeploymentBranchPolicy = new CreateDeploymentBranchPolicy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies());
        }

        return $this->repos👷CreateDeploymentBranchPolicy;
    }

    public function repos👷GetDeploymentBranchPolicy(): GetDeploymentBranchPolicy
    {
        if ($this->repos👷GetDeploymentBranchPolicy instanceof GetDeploymentBranchPolicy === false) {
            $this->repos👷GetDeploymentBranchPolicy = new GetDeploymentBranchPolicy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId());
        }

        return $this->repos👷GetDeploymentBranchPolicy;
    }

    public function repos👷UpdateDeploymentBranchPolicy(): UpdateDeploymentBranchPolicy
    {
        if ($this->repos👷UpdateDeploymentBranchPolicy instanceof UpdateDeploymentBranchPolicy === false) {
            $this->repos👷UpdateDeploymentBranchPolicy = new UpdateDeploymentBranchPolicy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId());
        }

        return $this->repos👷UpdateDeploymentBranchPolicy;
    }

    public function repos👷DeleteDeploymentBranchPolicy(): DeleteDeploymentBranchPolicy
    {
        if ($this->repos👷DeleteDeploymentBranchPolicy instanceof DeleteDeploymentBranchPolicy === false) {
            $this->repos👷DeleteDeploymentBranchPolicy = new DeleteDeploymentBranchPolicy($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteDeploymentBranchPolicy;
    }

    public function repos👷GetAllDeploymentProtectionRules(): GetAllDeploymentProtectionRules
    {
        if ($this->repos👷GetAllDeploymentProtectionRules instanceof GetAllDeploymentProtectionRules === false) {
            $this->repos👷GetAllDeploymentProtectionRules = new GetAllDeploymentProtectionRules($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules());
        }

        return $this->repos👷GetAllDeploymentProtectionRules;
    }

    public function repos👷CreateDeploymentProtectionRule(): CreateDeploymentProtectionRule
    {
        if ($this->repos👷CreateDeploymentProtectionRule instanceof CreateDeploymentProtectionRule === false) {
            $this->repos👷CreateDeploymentProtectionRule = new CreateDeploymentProtectionRule($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules());
        }

        return $this->repos👷CreateDeploymentProtectionRule;
    }

    public function repos👷ListCustomDeploymentRuleIntegrations(): ListCustomDeploymentRuleIntegrations
    {
        if ($this->repos👷ListCustomDeploymentRuleIntegrations instanceof ListCustomDeploymentRuleIntegrations === false) {
            $this->repos👷ListCustomDeploymentRuleIntegrations = new ListCustomDeploymentRuleIntegrations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀Apps());
        }

        return $this->repos👷ListCustomDeploymentRuleIntegrations;
    }

    public function repos👷GetCustomDeploymentProtectionRule(): GetCustomDeploymentProtectionRule
    {
        if ($this->repos👷GetCustomDeploymentProtectionRule instanceof GetCustomDeploymentProtectionRule === false) {
            $this->repos👷GetCustomDeploymentProtectionRule = new GetCustomDeploymentProtectionRule($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀ProtectionRuleId());
        }

        return $this->repos👷GetCustomDeploymentProtectionRule;
    }

    public function repos👷DisableDeploymentProtectionRule(): DisableDeploymentProtectionRule
    {
        if ($this->repos👷DisableDeploymentProtectionRule instanceof DisableDeploymentProtectionRule === false) {
            $this->repos👷DisableDeploymentProtectionRule = new DisableDeploymentProtectionRule($this->browser, $this->authentication);
        }

        return $this->repos👷DisableDeploymentProtectionRule;
    }

    public function actions👷ListEnvironmentSecrets(): ListEnvironmentSecrets
    {
        if ($this->actions👷ListEnvironmentSecrets instanceof ListEnvironmentSecrets === false) {
            $this->actions👷ListEnvironmentSecrets = new ListEnvironmentSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets());
        }

        return $this->actions👷ListEnvironmentSecrets;
    }

    public function actions👷GetEnvironmentPublicKey(): GetEnvironmentPublicKey
    {
        if ($this->actions👷GetEnvironmentPublicKey instanceof GetEnvironmentPublicKey === false) {
            $this->actions👷GetEnvironmentPublicKey = new GetEnvironmentPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀PublicKey());
        }

        return $this->actions👷GetEnvironmentPublicKey;
    }

    public function actions👷GetEnvironmentSecret(): GetEnvironmentSecret
    {
        if ($this->actions👷GetEnvironmentSecret instanceof GetEnvironmentSecret === false) {
            $this->actions👷GetEnvironmentSecret = new GetEnvironmentSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName());
        }

        return $this->actions👷GetEnvironmentSecret;
    }

    public function actions👷CreateOrUpdateEnvironmentSecret(): CreateOrUpdateEnvironmentSecret
    {
        if ($this->actions👷CreateOrUpdateEnvironmentSecret instanceof CreateOrUpdateEnvironmentSecret === false) {
            $this->actions👷CreateOrUpdateEnvironmentSecret = new CreateOrUpdateEnvironmentSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName());
        }

        return $this->actions👷CreateOrUpdateEnvironmentSecret;
    }

    public function actions👷DeleteEnvironmentSecret(): DeleteEnvironmentSecret
    {
        if ($this->actions👷DeleteEnvironmentSecret instanceof DeleteEnvironmentSecret === false) {
            $this->actions👷DeleteEnvironmentSecret = new DeleteEnvironmentSecret($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteEnvironmentSecret;
    }

    public function actions👷ListEnvironmentVariables(): ListEnvironmentVariables
    {
        if ($this->actions👷ListEnvironmentVariables instanceof ListEnvironmentVariables === false) {
            $this->actions👷ListEnvironmentVariables = new ListEnvironmentVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables());
        }

        return $this->actions👷ListEnvironmentVariables;
    }

    public function actions👷CreateEnvironmentVariable(): CreateEnvironmentVariable
    {
        if ($this->actions👷CreateEnvironmentVariable instanceof CreateEnvironmentVariable === false) {
            $this->actions👷CreateEnvironmentVariable = new CreateEnvironmentVariable($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables());
        }

        return $this->actions👷CreateEnvironmentVariable;
    }

    public function actions👷GetEnvironmentVariable(): GetEnvironmentVariable
    {
        if ($this->actions👷GetEnvironmentVariable instanceof GetEnvironmentVariable === false) {
            $this->actions👷GetEnvironmentVariable = new GetEnvironmentVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables🌀Name());
        }

        return $this->actions👷GetEnvironmentVariable;
    }

    public function actions👷DeleteEnvironmentVariable(): DeleteEnvironmentVariable
    {
        if ($this->actions👷DeleteEnvironmentVariable instanceof DeleteEnvironmentVariable === false) {
            $this->actions👷DeleteEnvironmentVariable = new DeleteEnvironmentVariable($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteEnvironmentVariable;
    }

    public function actions👷UpdateEnvironmentVariable(): UpdateEnvironmentVariable
    {
        if ($this->actions👷UpdateEnvironmentVariable instanceof UpdateEnvironmentVariable === false) {
            $this->actions👷UpdateEnvironmentVariable = new UpdateEnvironmentVariable($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷UpdateEnvironmentVariable;
    }

    public function activity👷ListRepoEvents(): ListRepoEvents
    {
        if ($this->activity👷ListRepoEvents instanceof ListRepoEvents === false) {
            $this->activity👷ListRepoEvents = new ListRepoEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Events());
        }

        return $this->activity👷ListRepoEvents;
    }

    public function repos👷ListForks(): \ApiClients\Client\GitHub\Internal\Operator\Repos\ListForks
    {
        if ($this->repos👷ListForks instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\ListForks === false) {
            $this->repos👷ListForks = new \ApiClients\Client\GitHub\Internal\Operator\Repos\ListForks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Forks());
        }

        return $this->repos👷ListForks;
    }

    public function repos👷CreateFork(): CreateFork
    {
        if ($this->repos👷CreateFork instanceof CreateFork === false) {
            $this->repos👷CreateFork = new CreateFork($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Forks());
        }

        return $this->repos👷CreateFork;
    }

    public function git👷CreateBlob(): CreateBlob
    {
        if ($this->git👷CreateBlob instanceof CreateBlob === false) {
            $this->git👷CreateBlob = new CreateBlob($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs());
        }

        return $this->git👷CreateBlob;
    }

    public function git👷GetBlob(): GetBlob
    {
        if ($this->git👷GetBlob instanceof GetBlob === false) {
            $this->git👷GetBlob = new GetBlob($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha());
        }

        return $this->git👷GetBlob;
    }

    public function git👷CreateCommit(): CreateCommit
    {
        if ($this->git👷CreateCommit instanceof CreateCommit === false) {
            $this->git👷CreateCommit = new CreateCommit($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits());
        }

        return $this->git👷CreateCommit;
    }

    public function git👷GetCommit(): \ApiClients\Client\GitHub\Internal\Operator\Git\GetCommit
    {
        if ($this->git👷GetCommit instanceof \ApiClients\Client\GitHub\Internal\Operator\Git\GetCommit === false) {
            $this->git👷GetCommit = new \ApiClients\Client\GitHub\Internal\Operator\Git\GetCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha());
        }

        return $this->git👷GetCommit;
    }

    public function git👷ListMatchingRefs(): ListMatchingRefs
    {
        if ($this->git👷ListMatchingRefs instanceof ListMatchingRefs === false) {
            $this->git👷ListMatchingRefs = new ListMatchingRefs($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref());
        }

        return $this->git👷ListMatchingRefs;
    }

    public function git👷GetRef(): GetRef
    {
        if ($this->git👷GetRef instanceof GetRef === false) {
            $this->git👷GetRef = new GetRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref());
        }

        return $this->git👷GetRef;
    }

    public function git👷CreateRef(): CreateRef
    {
        if ($this->git👷CreateRef instanceof CreateRef === false) {
            $this->git👷CreateRef = new CreateRef($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs());
        }

        return $this->git👷CreateRef;
    }

    public function git👷DeleteRef(): DeleteRef
    {
        if ($this->git👷DeleteRef instanceof DeleteRef === false) {
            $this->git👷DeleteRef = new DeleteRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref());
        }

        return $this->git👷DeleteRef;
    }

    public function git👷UpdateRef(): UpdateRef
    {
        if ($this->git👷UpdateRef instanceof UpdateRef === false) {
            $this->git👷UpdateRef = new UpdateRef($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref());
        }

        return $this->git👷UpdateRef;
    }

    public function git👷CreateTag(): CreateTag
    {
        if ($this->git👷CreateTag instanceof CreateTag === false) {
            $this->git👷CreateTag = new CreateTag($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags());
        }

        return $this->git👷CreateTag;
    }

    public function git👷GetTag(): GetTag
    {
        if ($this->git👷GetTag instanceof GetTag === false) {
            $this->git👷GetTag = new GetTag($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha());
        }

        return $this->git👷GetTag;
    }

    public function git👷CreateTree(): CreateTree
    {
        if ($this->git👷CreateTree instanceof CreateTree === false) {
            $this->git👷CreateTree = new CreateTree($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees());
        }

        return $this->git👷CreateTree;
    }

    public function git👷GetTree(): GetTree
    {
        if ($this->git👷GetTree instanceof GetTree === false) {
            $this->git👷GetTree = new GetTree($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha());
        }

        return $this->git👷GetTree;
    }

    public function repos👷ListWebhooks(): \ApiClients\Client\GitHub\Internal\Operator\Repos\ListWebhooks
    {
        if ($this->repos👷ListWebhooks instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\ListWebhooks === false) {
            $this->repos👷ListWebhooks = new \ApiClients\Client\GitHub\Internal\Operator\Repos\ListWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks());
        }

        return $this->repos👷ListWebhooks;
    }

    public function repos👷CreateWebhook(): \ApiClients\Client\GitHub\Internal\Operator\Repos\CreateWebhook
    {
        if ($this->repos👷CreateWebhook instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\CreateWebhook === false) {
            $this->repos👷CreateWebhook = new \ApiClients\Client\GitHub\Internal\Operator\Repos\CreateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks());
        }

        return $this->repos👷CreateWebhook;
    }

    public function repos👷GetWebhook(): \ApiClients\Client\GitHub\Internal\Operator\Repos\GetWebhook
    {
        if ($this->repos👷GetWebhook instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\GetWebhook === false) {
            $this->repos👷GetWebhook = new \ApiClients\Client\GitHub\Internal\Operator\Repos\GetWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId());
        }

        return $this->repos👷GetWebhook;
    }

    public function repos👷DeleteWebhook(): \ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteWebhook
    {
        if ($this->repos👷DeleteWebhook instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteWebhook === false) {
            $this->repos👷DeleteWebhook = new \ApiClients\Client\GitHub\Internal\Operator\Repos\DeleteWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId());
        }

        return $this->repos👷DeleteWebhook;
    }

    public function repos👷UpdateWebhook(): \ApiClients\Client\GitHub\Internal\Operator\Repos\UpdateWebhook
    {
        if ($this->repos👷UpdateWebhook instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\UpdateWebhook === false) {
            $this->repos👷UpdateWebhook = new \ApiClients\Client\GitHub\Internal\Operator\Repos\UpdateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId());
        }

        return $this->repos👷UpdateWebhook;
    }

    public function repos👷GetWebhookConfigForRepo(): GetWebhookConfigForRepo
    {
        if ($this->repos👷GetWebhookConfigForRepo instanceof GetWebhookConfigForRepo === false) {
            $this->repos👷GetWebhookConfigForRepo = new GetWebhookConfigForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config());
        }

        return $this->repos👷GetWebhookConfigForRepo;
    }

    public function repos👷UpdateWebhookConfigForRepo(): UpdateWebhookConfigForRepo
    {
        if ($this->repos👷UpdateWebhookConfigForRepo instanceof UpdateWebhookConfigForRepo === false) {
            $this->repos👷UpdateWebhookConfigForRepo = new UpdateWebhookConfigForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config());
        }

        return $this->repos👷UpdateWebhookConfigForRepo;
    }

    public function repos👷ListWebhookDeliveries(): \ApiClients\Client\GitHub\Internal\Operator\Repos\ListWebhookDeliveries
    {
        if ($this->repos👷ListWebhookDeliveries instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\ListWebhookDeliveries === false) {
            $this->repos👷ListWebhookDeliveries = new \ApiClients\Client\GitHub\Internal\Operator\Repos\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries());
        }

        return $this->repos👷ListWebhookDeliveries;
    }

    public function repos👷GetWebhookDelivery(): \ApiClients\Client\GitHub\Internal\Operator\Repos\GetWebhookDelivery
    {
        if ($this->repos👷GetWebhookDelivery instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\GetWebhookDelivery === false) {
            $this->repos👷GetWebhookDelivery = new \ApiClients\Client\GitHub\Internal\Operator\Repos\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId());
        }

        return $this->repos👷GetWebhookDelivery;
    }

    public function repos👷RedeliverWebhookDelivery(): \ApiClients\Client\GitHub\Internal\Operator\Repos\RedeliverWebhookDelivery
    {
        if ($this->repos👷RedeliverWebhookDelivery instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\RedeliverWebhookDelivery === false) {
            $this->repos👷RedeliverWebhookDelivery = new \ApiClients\Client\GitHub\Internal\Operator\Repos\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts());
        }

        return $this->repos👷RedeliverWebhookDelivery;
    }

    public function repos👷PingWebhook(): \ApiClients\Client\GitHub\Internal\Operator\Repos\PingWebhook
    {
        if ($this->repos👷PingWebhook instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\PingWebhook === false) {
            $this->repos👷PingWebhook = new \ApiClients\Client\GitHub\Internal\Operator\Repos\PingWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings());
        }

        return $this->repos👷PingWebhook;
    }

    public function repos👷TestPushWebhook(): TestPushWebhook
    {
        if ($this->repos👷TestPushWebhook instanceof TestPushWebhook === false) {
            $this->repos👷TestPushWebhook = new TestPushWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests());
        }

        return $this->repos👷TestPushWebhook;
    }

    public function migrations👷GetImportStatus(): GetImportStatus
    {
        if ($this->migrations👷GetImportStatus instanceof GetImportStatus === false) {
            $this->migrations👷GetImportStatus = new GetImportStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import());
        }

        return $this->migrations👷GetImportStatus;
    }

    public function migrations👷StartImport(): StartImport
    {
        if ($this->migrations👷StartImport instanceof StartImport === false) {
            $this->migrations👷StartImport = new StartImport($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import());
        }

        return $this->migrations👷StartImport;
    }

    public function migrations👷CancelImport(): CancelImport
    {
        if ($this->migrations👷CancelImport instanceof CancelImport === false) {
            $this->migrations👷CancelImport = new CancelImport($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import());
        }

        return $this->migrations👷CancelImport;
    }

    public function migrations👷UpdateImport(): UpdateImport
    {
        if ($this->migrations👷UpdateImport instanceof UpdateImport === false) {
            $this->migrations👷UpdateImport = new UpdateImport($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import());
        }

        return $this->migrations👷UpdateImport;
    }

    public function migrations👷GetCommitAuthors(): GetCommitAuthors
    {
        if ($this->migrations👷GetCommitAuthors instanceof GetCommitAuthors === false) {
            $this->migrations👷GetCommitAuthors = new GetCommitAuthors($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors());
        }

        return $this->migrations👷GetCommitAuthors;
    }

    public function migrations👷MapCommitAuthor(): MapCommitAuthor
    {
        if ($this->migrations👷MapCommitAuthor instanceof MapCommitAuthor === false) {
            $this->migrations👷MapCommitAuthor = new MapCommitAuthor($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors🌀AuthorId());
        }

        return $this->migrations👷MapCommitAuthor;
    }

    public function migrations👷GetLargeFiles(): GetLargeFiles
    {
        if ($this->migrations👷GetLargeFiles instanceof GetLargeFiles === false) {
            $this->migrations👷GetLargeFiles = new GetLargeFiles($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀LargeFiles());
        }

        return $this->migrations👷GetLargeFiles;
    }

    public function migrations👷SetLfsPreference(): SetLfsPreference
    {
        if ($this->migrations👷SetLfsPreference instanceof SetLfsPreference === false) {
            $this->migrations👷SetLfsPreference = new SetLfsPreference($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Lfs());
        }

        return $this->migrations👷SetLfsPreference;
    }

    public function apps👷GetRepoInstallation(): GetRepoInstallation
    {
        if ($this->apps👷GetRepoInstallation instanceof GetRepoInstallation === false) {
            $this->apps👷GetRepoInstallation = new GetRepoInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Installation());
        }

        return $this->apps👷GetRepoInstallation;
    }

    public function interactions👷GetRestrictionsForRepo(): GetRestrictionsForRepo
    {
        if ($this->interactions👷GetRestrictionsForRepo instanceof GetRestrictionsForRepo === false) {
            $this->interactions👷GetRestrictionsForRepo = new GetRestrictionsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀InteractionLimits());
        }

        return $this->interactions👷GetRestrictionsForRepo;
    }

    public function interactions👷SetRestrictionsForRepo(): SetRestrictionsForRepo
    {
        if ($this->interactions👷SetRestrictionsForRepo instanceof SetRestrictionsForRepo === false) {
            $this->interactions👷SetRestrictionsForRepo = new SetRestrictionsForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀InteractionLimits());
        }

        return $this->interactions👷SetRestrictionsForRepo;
    }

    public function interactions👷RemoveRestrictionsForRepo(): RemoveRestrictionsForRepo
    {
        if ($this->interactions👷RemoveRestrictionsForRepo instanceof RemoveRestrictionsForRepo === false) {
            $this->interactions👷RemoveRestrictionsForRepo = new RemoveRestrictionsForRepo($this->browser, $this->authentication);
        }

        return $this->interactions👷RemoveRestrictionsForRepo;
    }

    public function repos👷ListInvitations(): ListInvitations
    {
        if ($this->repos👷ListInvitations instanceof ListInvitations === false) {
            $this->repos👷ListInvitations = new ListInvitations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations());
        }

        return $this->repos👷ListInvitations;
    }

    public function repos👷DeleteInvitation(): DeleteInvitation
    {
        if ($this->repos👷DeleteInvitation instanceof DeleteInvitation === false) {
            $this->repos👷DeleteInvitation = new DeleteInvitation($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteInvitation;
    }

    public function repos👷UpdateInvitation(): UpdateInvitation
    {
        if ($this->repos👷UpdateInvitation instanceof UpdateInvitation === false) {
            $this->repos👷UpdateInvitation = new UpdateInvitation($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId());
        }

        return $this->repos👷UpdateInvitation;
    }

    public function issues👷ListForRepo(): ListForRepo
    {
        if ($this->issues👷ListForRepo instanceof ListForRepo === false) {
            $this->issues👷ListForRepo = new ListForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues());
        }

        return $this->issues👷ListForRepo;
    }

    public function issues👷Create(): \ApiClients\Client\GitHub\Internal\Operator\Issues\Create
    {
        if ($this->issues👷Create instanceof \ApiClients\Client\GitHub\Internal\Operator\Issues\Create === false) {
            $this->issues👷Create = new \ApiClients\Client\GitHub\Internal\Operator\Issues\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues());
        }

        return $this->issues👷Create;
    }

    public function issues👷ListCommentsForRepo(): ListCommentsForRepo
    {
        if ($this->issues👷ListCommentsForRepo instanceof ListCommentsForRepo === false) {
            $this->issues👷ListCommentsForRepo = new ListCommentsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments());
        }

        return $this->issues👷ListCommentsForRepo;
    }

    public function issues👷GetComment(): \ApiClients\Client\GitHub\Internal\Operator\Issues\GetComment
    {
        if ($this->issues👷GetComment instanceof \ApiClients\Client\GitHub\Internal\Operator\Issues\GetComment === false) {
            $this->issues👷GetComment = new \ApiClients\Client\GitHub\Internal\Operator\Issues\GetComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId());
        }

        return $this->issues👷GetComment;
    }

    public function issues👷DeleteComment(): \ApiClients\Client\GitHub\Internal\Operator\Issues\DeleteComment
    {
        if ($this->issues👷DeleteComment instanceof \ApiClients\Client\GitHub\Internal\Operator\Issues\DeleteComment === false) {
            $this->issues👷DeleteComment = new \ApiClients\Client\GitHub\Internal\Operator\Issues\DeleteComment($this->browser, $this->authentication);
        }

        return $this->issues👷DeleteComment;
    }

    public function issues👷UpdateComment(): \ApiClients\Client\GitHub\Internal\Operator\Issues\UpdateComment
    {
        if ($this->issues👷UpdateComment instanceof \ApiClients\Client\GitHub\Internal\Operator\Issues\UpdateComment === false) {
            $this->issues👷UpdateComment = new \ApiClients\Client\GitHub\Internal\Operator\Issues\UpdateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId());
        }

        return $this->issues👷UpdateComment;
    }

    public function reactions👷ListForIssueComment(): ListForIssueComment
    {
        if ($this->reactions👷ListForIssueComment instanceof ListForIssueComment === false) {
            $this->reactions👷ListForIssueComment = new ListForIssueComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForIssueComment;
    }

    public function reactions👷CreateForIssueComment(): CreateForIssueComment
    {
        if ($this->reactions👷CreateForIssueComment instanceof CreateForIssueComment === false) {
            $this->reactions👷CreateForIssueComment = new CreateForIssueComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷CreateForIssueComment;
    }

    public function reactions👷DeleteForIssueComment(): DeleteForIssueComment
    {
        if ($this->reactions👷DeleteForIssueComment instanceof DeleteForIssueComment === false) {
            $this->reactions👷DeleteForIssueComment = new DeleteForIssueComment($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForIssueComment;
    }

    public function issues👷ListEventsForRepo(): ListEventsForRepo
    {
        if ($this->issues👷ListEventsForRepo instanceof ListEventsForRepo === false) {
            $this->issues👷ListEventsForRepo = new ListEventsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events());
        }

        return $this->issues👷ListEventsForRepo;
    }

    public function issues👷GetEvent(): GetEvent
    {
        if ($this->issues👷GetEvent instanceof GetEvent === false) {
            $this->issues👷GetEvent = new GetEvent($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId());
        }

        return $this->issues👷GetEvent;
    }

    public function issues👷Get(): \ApiClients\Client\GitHub\Internal\Operator\Issues\Get
    {
        if ($this->issues👷Get instanceof \ApiClients\Client\GitHub\Internal\Operator\Issues\Get === false) {
            $this->issues👷Get = new \ApiClients\Client\GitHub\Internal\Operator\Issues\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber());
        }

        return $this->issues👷Get;
    }

    public function issues👷Update(): \ApiClients\Client\GitHub\Internal\Operator\Issues\Update
    {
        if ($this->issues👷Update instanceof \ApiClients\Client\GitHub\Internal\Operator\Issues\Update === false) {
            $this->issues👷Update = new \ApiClients\Client\GitHub\Internal\Operator\Issues\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber());
        }

        return $this->issues👷Update;
    }

    public function issues👷AddAssignees(): AddAssignees
    {
        if ($this->issues👷AddAssignees instanceof AddAssignees === false) {
            $this->issues👷AddAssignees = new AddAssignees($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees());
        }

        return $this->issues👷AddAssignees;
    }

    public function issues👷RemoveAssignees(): RemoveAssignees
    {
        if ($this->issues👷RemoveAssignees instanceof RemoveAssignees === false) {
            $this->issues👷RemoveAssignees = new RemoveAssignees($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees());
        }

        return $this->issues👷RemoveAssignees;
    }

    public function issues👷CheckUserCanBeAssignedToIssue(): CheckUserCanBeAssignedToIssue
    {
        if ($this->issues👷CheckUserCanBeAssignedToIssue instanceof CheckUserCanBeAssignedToIssue === false) {
            $this->issues👷CheckUserCanBeAssignedToIssue = new CheckUserCanBeAssignedToIssue($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees🌀Assignee());
        }

        return $this->issues👷CheckUserCanBeAssignedToIssue;
    }

    public function issues👷ListComments(): \ApiClients\Client\GitHub\Internal\Operator\Issues\ListComments
    {
        if ($this->issues👷ListComments instanceof \ApiClients\Client\GitHub\Internal\Operator\Issues\ListComments === false) {
            $this->issues👷ListComments = new \ApiClients\Client\GitHub\Internal\Operator\Issues\ListComments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments());
        }

        return $this->issues👷ListComments;
    }

    public function issues👷CreateComment(): \ApiClients\Client\GitHub\Internal\Operator\Issues\CreateComment
    {
        if ($this->issues👷CreateComment instanceof \ApiClients\Client\GitHub\Internal\Operator\Issues\CreateComment === false) {
            $this->issues👷CreateComment = new \ApiClients\Client\GitHub\Internal\Operator\Issues\CreateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments());
        }

        return $this->issues👷CreateComment;
    }

    public function issues👷ListEvents(): ListEvents
    {
        if ($this->issues👷ListEvents instanceof ListEvents === false) {
            $this->issues👷ListEvents = new ListEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events());
        }

        return $this->issues👷ListEvents;
    }

    public function issues👷ListLabelsOnIssue(): ListLabelsOnIssue
    {
        if ($this->issues👷ListLabelsOnIssue instanceof ListLabelsOnIssue === false) {
            $this->issues👷ListLabelsOnIssue = new ListLabelsOnIssue($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷ListLabelsOnIssue;
    }

    public function issues👷SetLabels(): SetLabels
    {
        if ($this->issues👷SetLabels instanceof SetLabels === false) {
            $this->issues👷SetLabels = new SetLabels($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷SetLabels;
    }

    public function issues👷AddLabels(): AddLabels
    {
        if ($this->issues👷AddLabels instanceof AddLabels === false) {
            $this->issues👷AddLabels = new AddLabels($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷AddLabels;
    }

    public function issues👷RemoveAllLabels(): RemoveAllLabels
    {
        if ($this->issues👷RemoveAllLabels instanceof RemoveAllLabels === false) {
            $this->issues👷RemoveAllLabels = new RemoveAllLabels($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷RemoveAllLabels;
    }

    public function issues👷RemoveLabel(): RemoveLabel
    {
        if ($this->issues👷RemoveLabel instanceof RemoveLabel === false) {
            $this->issues👷RemoveLabel = new RemoveLabel($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name());
        }

        return $this->issues👷RemoveLabel;
    }

    public function issues👷Lock(): Lock
    {
        if ($this->issues👷Lock instanceof Lock === false) {
            $this->issues👷Lock = new Lock($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock());
        }

        return $this->issues👷Lock;
    }

    public function issues👷Unlock(): Unlock
    {
        if ($this->issues👷Unlock instanceof Unlock === false) {
            $this->issues👷Unlock = new Unlock($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock());
        }

        return $this->issues👷Unlock;
    }

    public function reactions👷ListForIssue(): ListForIssue
    {
        if ($this->reactions👷ListForIssue instanceof ListForIssue === false) {
            $this->reactions👷ListForIssue = new ListForIssue($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions());
        }

        return $this->reactions👷ListForIssue;
    }

    public function reactions👷CreateForIssue(): CreateForIssue
    {
        if ($this->reactions👷CreateForIssue instanceof CreateForIssue === false) {
            $this->reactions👷CreateForIssue = new CreateForIssue($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions());
        }

        return $this->reactions👷CreateForIssue;
    }

    public function reactions👷DeleteForIssue(): DeleteForIssue
    {
        if ($this->reactions👷DeleteForIssue instanceof DeleteForIssue === false) {
            $this->reactions👷DeleteForIssue = new DeleteForIssue($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForIssue;
    }

    public function issues👷RemoveSubIssue(): RemoveSubIssue
    {
        if ($this->issues👷RemoveSubIssue instanceof RemoveSubIssue === false) {
            $this->issues👷RemoveSubIssue = new RemoveSubIssue($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssue());
        }

        return $this->issues👷RemoveSubIssue;
    }

    public function issues👷ListSubIssues(): ListSubIssues
    {
        if ($this->issues👷ListSubIssues instanceof ListSubIssues === false) {
            $this->issues👷ListSubIssues = new ListSubIssues($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssues());
        }

        return $this->issues👷ListSubIssues;
    }

    public function issues👷AddSubIssue(): AddSubIssue
    {
        if ($this->issues👷AddSubIssue instanceof AddSubIssue === false) {
            $this->issues👷AddSubIssue = new AddSubIssue($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssues());
        }

        return $this->issues👷AddSubIssue;
    }

    public function issues👷ReprioritizeSubIssue(): ReprioritizeSubIssue
    {
        if ($this->issues👷ReprioritizeSubIssue instanceof ReprioritizeSubIssue === false) {
            $this->issues👷ReprioritizeSubIssue = new ReprioritizeSubIssue($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssues🌀Priority());
        }

        return $this->issues👷ReprioritizeSubIssue;
    }

    public function issues👷ListEventsForTimeline(): ListEventsForTimeline
    {
        if ($this->issues👷ListEventsForTimeline instanceof ListEventsForTimeline === false) {
            $this->issues👷ListEventsForTimeline = new ListEventsForTimeline($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline());
        }

        return $this->issues👷ListEventsForTimeline;
    }

    public function repos👷ListDeployKeys(): ListDeployKeys
    {
        if ($this->repos👷ListDeployKeys instanceof ListDeployKeys === false) {
            $this->repos👷ListDeployKeys = new ListDeployKeys($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys());
        }

        return $this->repos👷ListDeployKeys;
    }

    public function repos👷CreateDeployKey(): CreateDeployKey
    {
        if ($this->repos👷CreateDeployKey instanceof CreateDeployKey === false) {
            $this->repos👷CreateDeployKey = new CreateDeployKey($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys());
        }

        return $this->repos👷CreateDeployKey;
    }

    public function repos👷GetDeployKey(): GetDeployKey
    {
        if ($this->repos👷GetDeployKey instanceof GetDeployKey === false) {
            $this->repos👷GetDeployKey = new GetDeployKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId());
        }

        return $this->repos👷GetDeployKey;
    }

    public function repos👷DeleteDeployKey(): DeleteDeployKey
    {
        if ($this->repos👷DeleteDeployKey instanceof DeleteDeployKey === false) {
            $this->repos👷DeleteDeployKey = new DeleteDeployKey($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteDeployKey;
    }

    public function issues👷ListLabelsForRepo(): ListLabelsForRepo
    {
        if ($this->issues👷ListLabelsForRepo instanceof ListLabelsForRepo === false) {
            $this->issues👷ListLabelsForRepo = new ListLabelsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels());
        }

        return $this->issues👷ListLabelsForRepo;
    }

    public function issues👷CreateLabel(): CreateLabel
    {
        if ($this->issues👷CreateLabel instanceof CreateLabel === false) {
            $this->issues👷CreateLabel = new CreateLabel($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels());
        }

        return $this->issues👷CreateLabel;
    }

    public function issues👷GetLabel(): GetLabel
    {
        if ($this->issues👷GetLabel instanceof GetLabel === false) {
            $this->issues👷GetLabel = new GetLabel($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name());
        }

        return $this->issues👷GetLabel;
    }

    public function issues👷DeleteLabel(): DeleteLabel
    {
        if ($this->issues👷DeleteLabel instanceof DeleteLabel === false) {
            $this->issues👷DeleteLabel = new DeleteLabel($this->browser, $this->authentication);
        }

        return $this->issues👷DeleteLabel;
    }

    public function issues👷UpdateLabel(): UpdateLabel
    {
        if ($this->issues👷UpdateLabel instanceof UpdateLabel === false) {
            $this->issues👷UpdateLabel = new UpdateLabel($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name());
        }

        return $this->issues👷UpdateLabel;
    }

    public function repos👷ListLanguages(): ListLanguages
    {
        if ($this->repos👷ListLanguages instanceof ListLanguages === false) {
            $this->repos👷ListLanguages = new ListLanguages($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Languages());
        }

        return $this->repos👷ListLanguages;
    }

    public function licenses👷GetForRepo(): GetForRepo
    {
        if ($this->licenses👷GetForRepo instanceof GetForRepo === false) {
            $this->licenses👷GetForRepo = new GetForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀License());
        }

        return $this->licenses👷GetForRepo;
    }

    public function repos👷MergeUpstream(): MergeUpstream
    {
        if ($this->repos👷MergeUpstream instanceof MergeUpstream === false) {
            $this->repos👷MergeUpstream = new MergeUpstream($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀MergeUpstream());
        }

        return $this->repos👷MergeUpstream;
    }

    public function repos👷Merge(): Merge
    {
        if ($this->repos👷Merge instanceof Merge === false) {
            $this->repos👷Merge = new Merge($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Merges());
        }

        return $this->repos👷Merge;
    }

    public function issues👷ListMilestones(): ListMilestones
    {
        if ($this->issues👷ListMilestones instanceof ListMilestones === false) {
            $this->issues👷ListMilestones = new ListMilestones($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones());
        }

        return $this->issues👷ListMilestones;
    }

    public function issues👷CreateMilestone(): CreateMilestone
    {
        if ($this->issues👷CreateMilestone instanceof CreateMilestone === false) {
            $this->issues👷CreateMilestone = new CreateMilestone($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones());
        }

        return $this->issues👷CreateMilestone;
    }

    public function issues👷GetMilestone(): GetMilestone
    {
        if ($this->issues👷GetMilestone instanceof GetMilestone === false) {
            $this->issues👷GetMilestone = new GetMilestone($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber());
        }

        return $this->issues👷GetMilestone;
    }

    public function issues👷DeleteMilestone(): DeleteMilestone
    {
        if ($this->issues👷DeleteMilestone instanceof DeleteMilestone === false) {
            $this->issues👷DeleteMilestone = new DeleteMilestone($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber());
        }

        return $this->issues👷DeleteMilestone;
    }

    public function issues👷UpdateMilestone(): UpdateMilestone
    {
        if ($this->issues👷UpdateMilestone instanceof UpdateMilestone === false) {
            $this->issues👷UpdateMilestone = new UpdateMilestone($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber());
        }

        return $this->issues👷UpdateMilestone;
    }

    public function issues👷ListLabelsForMilestone(): ListLabelsForMilestone
    {
        if ($this->issues👷ListLabelsForMilestone instanceof ListLabelsForMilestone === false) {
            $this->issues👷ListLabelsForMilestone = new ListLabelsForMilestone($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels());
        }

        return $this->issues👷ListLabelsForMilestone;
    }

    public function activity👷ListRepoNotificationsForAuthenticatedUser(): ListRepoNotificationsForAuthenticatedUser
    {
        if ($this->activity👷ListRepoNotificationsForAuthenticatedUser instanceof ListRepoNotificationsForAuthenticatedUser === false) {
            $this->activity👷ListRepoNotificationsForAuthenticatedUser = new ListRepoNotificationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications());
        }

        return $this->activity👷ListRepoNotificationsForAuthenticatedUser;
    }

    public function activity👷MarkRepoNotificationsAsRead(): MarkRepoNotificationsAsRead
    {
        if ($this->activity👷MarkRepoNotificationsAsRead instanceof MarkRepoNotificationsAsRead === false) {
            $this->activity👷MarkRepoNotificationsAsRead = new MarkRepoNotificationsAsRead($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications());
        }

        return $this->activity👷MarkRepoNotificationsAsRead;
    }

    public function repos👷GetPages(): GetPages
    {
        if ($this->repos👷GetPages instanceof GetPages === false) {
            $this->repos👷GetPages = new GetPages($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->repos👷GetPages;
    }

    public function repos👷UpdateInformationAboutPagesSite(): UpdateInformationAboutPagesSite
    {
        if ($this->repos👷UpdateInformationAboutPagesSite instanceof UpdateInformationAboutPagesSite === false) {
            $this->repos👷UpdateInformationAboutPagesSite = new UpdateInformationAboutPagesSite($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->repos👷UpdateInformationAboutPagesSite;
    }

    public function repos👷CreatePagesSite(): CreatePagesSite
    {
        if ($this->repos👷CreatePagesSite instanceof CreatePagesSite === false) {
            $this->repos👷CreatePagesSite = new CreatePagesSite($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->repos👷CreatePagesSite;
    }

    public function repos👷DeletePagesSite(): DeletePagesSite
    {
        if ($this->repos👷DeletePagesSite instanceof DeletePagesSite === false) {
            $this->repos👷DeletePagesSite = new DeletePagesSite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->repos👷DeletePagesSite;
    }

    public function repos👷ListPagesBuilds(): ListPagesBuilds
    {
        if ($this->repos👷ListPagesBuilds instanceof ListPagesBuilds === false) {
            $this->repos👷ListPagesBuilds = new ListPagesBuilds($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds());
        }

        return $this->repos👷ListPagesBuilds;
    }

    public function repos👷RequestPagesBuild(): RequestPagesBuild
    {
        if ($this->repos👷RequestPagesBuild instanceof RequestPagesBuild === false) {
            $this->repos👷RequestPagesBuild = new RequestPagesBuild($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds());
        }

        return $this->repos👷RequestPagesBuild;
    }

    public function repos👷GetLatestPagesBuild(): GetLatestPagesBuild
    {
        if ($this->repos👷GetLatestPagesBuild instanceof GetLatestPagesBuild === false) {
            $this->repos👷GetLatestPagesBuild = new GetLatestPagesBuild($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest());
        }

        return $this->repos👷GetLatestPagesBuild;
    }

    public function repos👷GetPagesBuild(): GetPagesBuild
    {
        if ($this->repos👷GetPagesBuild instanceof GetPagesBuild === false) {
            $this->repos👷GetPagesBuild = new GetPagesBuild($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId());
        }

        return $this->repos👷GetPagesBuild;
    }

    public function repos👷CreatePagesDeployment(): CreatePagesDeployment
    {
        if ($this->repos👷CreatePagesDeployment instanceof CreatePagesDeployment === false) {
            $this->repos👷CreatePagesDeployment = new CreatePagesDeployment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments());
        }

        return $this->repos👷CreatePagesDeployment;
    }

    public function repos👷GetPagesDeployment(): GetPagesDeployment
    {
        if ($this->repos👷GetPagesDeployment instanceof GetPagesDeployment === false) {
            $this->repos👷GetPagesDeployment = new GetPagesDeployment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId());
        }

        return $this->repos👷GetPagesDeployment;
    }

    public function repos👷CancelPagesDeployment(): CancelPagesDeployment
    {
        if ($this->repos👷CancelPagesDeployment instanceof CancelPagesDeployment === false) {
            $this->repos👷CancelPagesDeployment = new CancelPagesDeployment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId🌀Cancel());
        }

        return $this->repos👷CancelPagesDeployment;
    }

    public function repos👷GetPagesHealthCheck(): GetPagesHealthCheck
    {
        if ($this->repos👷GetPagesHealthCheck instanceof GetPagesHealthCheck === false) {
            $this->repos👷GetPagesHealthCheck = new GetPagesHealthCheck($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Health());
        }

        return $this->repos👷GetPagesHealthCheck;
    }

    public function repos👷CheckPrivateVulnerabilityReporting(): CheckPrivateVulnerabilityReporting
    {
        if ($this->repos👷CheckPrivateVulnerabilityReporting instanceof CheckPrivateVulnerabilityReporting === false) {
            $this->repos👷CheckPrivateVulnerabilityReporting = new CheckPrivateVulnerabilityReporting($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting());
        }

        return $this->repos👷CheckPrivateVulnerabilityReporting;
    }

    public function repos👷EnablePrivateVulnerabilityReporting(): EnablePrivateVulnerabilityReporting
    {
        if ($this->repos👷EnablePrivateVulnerabilityReporting instanceof EnablePrivateVulnerabilityReporting === false) {
            $this->repos👷EnablePrivateVulnerabilityReporting = new EnablePrivateVulnerabilityReporting($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting());
        }

        return $this->repos👷EnablePrivateVulnerabilityReporting;
    }

    public function repos👷DisablePrivateVulnerabilityReporting(): DisablePrivateVulnerabilityReporting
    {
        if ($this->repos👷DisablePrivateVulnerabilityReporting instanceof DisablePrivateVulnerabilityReporting === false) {
            $this->repos👷DisablePrivateVulnerabilityReporting = new DisablePrivateVulnerabilityReporting($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting());
        }

        return $this->repos👷DisablePrivateVulnerabilityReporting;
    }

    public function projects👷ListForRepo(): \ApiClients\Client\GitHub\Internal\Operator\Projects\ListForRepo
    {
        if ($this->projects👷ListForRepo instanceof \ApiClients\Client\GitHub\Internal\Operator\Projects\ListForRepo === false) {
            $this->projects👷ListForRepo = new \ApiClients\Client\GitHub\Internal\Operator\Projects\ListForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Projects());
        }

        return $this->projects👷ListForRepo;
    }

    public function projects👷CreateForRepo(): CreateForRepo
    {
        if ($this->projects👷CreateForRepo instanceof CreateForRepo === false) {
            $this->projects👷CreateForRepo = new CreateForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Projects());
        }

        return $this->projects👷CreateForRepo;
    }

    public function repos👷GetCustomPropertiesValues(): GetCustomPropertiesValues
    {
        if ($this->repos👷GetCustomPropertiesValues instanceof GetCustomPropertiesValues === false) {
            $this->repos👷GetCustomPropertiesValues = new GetCustomPropertiesValues($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Properties🌀Values());
        }

        return $this->repos👷GetCustomPropertiesValues;
    }

    public function repos👷CreateOrUpdateCustomPropertiesValues(): CreateOrUpdateCustomPropertiesValues
    {
        if ($this->repos👷CreateOrUpdateCustomPropertiesValues instanceof CreateOrUpdateCustomPropertiesValues === false) {
            $this->repos👷CreateOrUpdateCustomPropertiesValues = new CreateOrUpdateCustomPropertiesValues($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Properties🌀Values());
        }

        return $this->repos👷CreateOrUpdateCustomPropertiesValues;
    }

    public function pulls👷List_(): \ApiClients\Client\GitHub\Internal\Operator\Pulls\List_
    {
        if ($this->pulls👷List_ instanceof \ApiClients\Client\GitHub\Internal\Operator\Pulls\List_ === false) {
            $this->pulls👷List_ = new \ApiClients\Client\GitHub\Internal\Operator\Pulls\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls());
        }

        return $this->pulls👷List_;
    }

    public function pulls👷Create(): \ApiClients\Client\GitHub\Internal\Operator\Pulls\Create
    {
        if ($this->pulls👷Create instanceof \ApiClients\Client\GitHub\Internal\Operator\Pulls\Create === false) {
            $this->pulls👷Create = new \ApiClients\Client\GitHub\Internal\Operator\Pulls\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls());
        }

        return $this->pulls👷Create;
    }

    public function pulls👷ListReviewCommentsForRepo(): ListReviewCommentsForRepo
    {
        if ($this->pulls👷ListReviewCommentsForRepo instanceof ListReviewCommentsForRepo === false) {
            $this->pulls👷ListReviewCommentsForRepo = new ListReviewCommentsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments());
        }

        return $this->pulls👷ListReviewCommentsForRepo;
    }

    public function pulls👷GetReviewComment(): GetReviewComment
    {
        if ($this->pulls👷GetReviewComment instanceof GetReviewComment === false) {
            $this->pulls👷GetReviewComment = new GetReviewComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId());
        }

        return $this->pulls👷GetReviewComment;
    }

    public function pulls👷DeleteReviewComment(): DeleteReviewComment
    {
        if ($this->pulls👷DeleteReviewComment instanceof DeleteReviewComment === false) {
            $this->pulls👷DeleteReviewComment = new DeleteReviewComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId());
        }

        return $this->pulls👷DeleteReviewComment;
    }

    public function pulls👷UpdateReviewComment(): UpdateReviewComment
    {
        if ($this->pulls👷UpdateReviewComment instanceof UpdateReviewComment === false) {
            $this->pulls👷UpdateReviewComment = new UpdateReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId());
        }

        return $this->pulls👷UpdateReviewComment;
    }

    public function reactions👷ListForPullRequestReviewComment(): ListForPullRequestReviewComment
    {
        if ($this->reactions👷ListForPullRequestReviewComment instanceof ListForPullRequestReviewComment === false) {
            $this->reactions👷ListForPullRequestReviewComment = new ListForPullRequestReviewComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForPullRequestReviewComment;
    }

    public function reactions👷CreateForPullRequestReviewComment(): CreateForPullRequestReviewComment
    {
        if ($this->reactions👷CreateForPullRequestReviewComment instanceof CreateForPullRequestReviewComment === false) {
            $this->reactions👷CreateForPullRequestReviewComment = new CreateForPullRequestReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷CreateForPullRequestReviewComment;
    }

    public function reactions👷DeleteForPullRequestComment(): DeleteForPullRequestComment
    {
        if ($this->reactions👷DeleteForPullRequestComment instanceof DeleteForPullRequestComment === false) {
            $this->reactions👷DeleteForPullRequestComment = new DeleteForPullRequestComment($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForPullRequestComment;
    }

    public function pulls👷Get(): \ApiClients\Client\GitHub\Internal\Operator\Pulls\Get
    {
        if ($this->pulls👷Get instanceof \ApiClients\Client\GitHub\Internal\Operator\Pulls\Get === false) {
            $this->pulls👷Get = new \ApiClients\Client\GitHub\Internal\Operator\Pulls\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber());
        }

        return $this->pulls👷Get;
    }

    public function pulls👷Update(): \ApiClients\Client\GitHub\Internal\Operator\Pulls\Update
    {
        if ($this->pulls👷Update instanceof \ApiClients\Client\GitHub\Internal\Operator\Pulls\Update === false) {
            $this->pulls👷Update = new \ApiClients\Client\GitHub\Internal\Operator\Pulls\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber());
        }

        return $this->pulls👷Update;
    }

    public function codespaces👷CreateWithPrForAuthenticatedUser(): CreateWithPrForAuthenticatedUser
    {
        if ($this->codespaces👷CreateWithPrForAuthenticatedUser instanceof CreateWithPrForAuthenticatedUser === false) {
            $this->codespaces👷CreateWithPrForAuthenticatedUser = new CreateWithPrForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Codespaces());
        }

        return $this->codespaces👷CreateWithPrForAuthenticatedUser;
    }

    public function pulls👷ListReviewComments(): ListReviewComments
    {
        if ($this->pulls👷ListReviewComments instanceof ListReviewComments === false) {
            $this->pulls👷ListReviewComments = new ListReviewComments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments());
        }

        return $this->pulls👷ListReviewComments;
    }

    public function pulls👷CreateReviewComment(): CreateReviewComment
    {
        if ($this->pulls👷CreateReviewComment instanceof CreateReviewComment === false) {
            $this->pulls👷CreateReviewComment = new CreateReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments());
        }

        return $this->pulls👷CreateReviewComment;
    }

    public function pulls👷CreateReplyForReviewComment(): CreateReplyForReviewComment
    {
        if ($this->pulls👷CreateReplyForReviewComment instanceof CreateReplyForReviewComment === false) {
            $this->pulls👷CreateReplyForReviewComment = new CreateReplyForReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies());
        }

        return $this->pulls👷CreateReplyForReviewComment;
    }

    public function pulls👷ListCommits(): \ApiClients\Client\GitHub\Internal\Operator\Pulls\ListCommits
    {
        if ($this->pulls👷ListCommits instanceof \ApiClients\Client\GitHub\Internal\Operator\Pulls\ListCommits === false) {
            $this->pulls👷ListCommits = new \ApiClients\Client\GitHub\Internal\Operator\Pulls\ListCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits());
        }

        return $this->pulls👷ListCommits;
    }

    public function pulls👷ListFiles(): ListFiles
    {
        if ($this->pulls👷ListFiles instanceof ListFiles === false) {
            $this->pulls👷ListFiles = new ListFiles($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files());
        }

        return $this->pulls👷ListFiles;
    }

    public function pulls👷CheckIfMerged(): CheckIfMerged
    {
        if ($this->pulls👷CheckIfMerged instanceof CheckIfMerged === false) {
            $this->pulls👷CheckIfMerged = new CheckIfMerged($this->browser, $this->authentication);
        }

        return $this->pulls👷CheckIfMerged;
    }

    public function pulls👷Merge(): \ApiClients\Client\GitHub\Internal\Operator\Pulls\Merge
    {
        if ($this->pulls👷Merge instanceof \ApiClients\Client\GitHub\Internal\Operator\Pulls\Merge === false) {
            $this->pulls👷Merge = new \ApiClients\Client\GitHub\Internal\Operator\Pulls\Merge($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge());
        }

        return $this->pulls👷Merge;
    }

    public function pulls👷ListRequestedReviewers(): ListRequestedReviewers
    {
        if ($this->pulls👷ListRequestedReviewers instanceof ListRequestedReviewers === false) {
            $this->pulls👷ListRequestedReviewers = new ListRequestedReviewers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers());
        }

        return $this->pulls👷ListRequestedReviewers;
    }

    public function pulls👷RequestReviewers(): RequestReviewers
    {
        if ($this->pulls👷RequestReviewers instanceof RequestReviewers === false) {
            $this->pulls👷RequestReviewers = new RequestReviewers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers());
        }

        return $this->pulls👷RequestReviewers;
    }

    public function pulls👷RemoveRequestedReviewers(): RemoveRequestedReviewers
    {
        if ($this->pulls👷RemoveRequestedReviewers instanceof RemoveRequestedReviewers === false) {
            $this->pulls👷RemoveRequestedReviewers = new RemoveRequestedReviewers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers());
        }

        return $this->pulls👷RemoveRequestedReviewers;
    }

    public function pulls👷ListReviews(): ListReviews
    {
        if ($this->pulls👷ListReviews instanceof ListReviews === false) {
            $this->pulls👷ListReviews = new ListReviews($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews());
        }

        return $this->pulls👷ListReviews;
    }

    public function pulls👷CreateReview(): CreateReview
    {
        if ($this->pulls👷CreateReview instanceof CreateReview === false) {
            $this->pulls👷CreateReview = new CreateReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews());
        }

        return $this->pulls👷CreateReview;
    }

    public function pulls👷GetReview(): GetReview
    {
        if ($this->pulls👷GetReview instanceof GetReview === false) {
            $this->pulls👷GetReview = new GetReview($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId());
        }

        return $this->pulls👷GetReview;
    }

    public function pulls👷UpdateReview(): UpdateReview
    {
        if ($this->pulls👷UpdateReview instanceof UpdateReview === false) {
            $this->pulls👷UpdateReview = new UpdateReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId());
        }

        return $this->pulls👷UpdateReview;
    }

    public function pulls👷DeletePendingReview(): DeletePendingReview
    {
        if ($this->pulls👷DeletePendingReview instanceof DeletePendingReview === false) {
            $this->pulls👷DeletePendingReview = new DeletePendingReview($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId());
        }

        return $this->pulls👷DeletePendingReview;
    }

    public function pulls👷ListCommentsForReview(): ListCommentsForReview
    {
        if ($this->pulls👷ListCommentsForReview instanceof ListCommentsForReview === false) {
            $this->pulls👷ListCommentsForReview = new ListCommentsForReview($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments());
        }

        return $this->pulls👷ListCommentsForReview;
    }

    public function pulls👷DismissReview(): DismissReview
    {
        if ($this->pulls👷DismissReview instanceof DismissReview === false) {
            $this->pulls👷DismissReview = new DismissReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals());
        }

        return $this->pulls👷DismissReview;
    }

    public function pulls👷SubmitReview(): SubmitReview
    {
        if ($this->pulls👷SubmitReview instanceof SubmitReview === false) {
            $this->pulls👷SubmitReview = new SubmitReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events());
        }

        return $this->pulls👷SubmitReview;
    }

    public function pulls👷UpdateBranch(): UpdateBranch
    {
        if ($this->pulls👷UpdateBranch instanceof UpdateBranch === false) {
            $this->pulls👷UpdateBranch = new UpdateBranch($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch());
        }

        return $this->pulls👷UpdateBranch;
    }

    public function repos👷GetReadme(): GetReadme
    {
        if ($this->repos👷GetReadme instanceof GetReadme === false) {
            $this->repos👷GetReadme = new GetReadme($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme());
        }

        return $this->repos👷GetReadme;
    }

    public function repos👷GetReadmeInDirectory(): GetReadmeInDirectory
    {
        if ($this->repos👷GetReadmeInDirectory instanceof GetReadmeInDirectory === false) {
            $this->repos👷GetReadmeInDirectory = new GetReadmeInDirectory($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir());
        }

        return $this->repos👷GetReadmeInDirectory;
    }

    public function repos👷ListReleases(): ListReleases
    {
        if ($this->repos👷ListReleases instanceof ListReleases === false) {
            $this->repos👷ListReleases = new ListReleases($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases());
        }

        return $this->repos👷ListReleases;
    }

    public function repos👷CreateRelease(): CreateRelease
    {
        if ($this->repos👷CreateRelease instanceof CreateRelease === false) {
            $this->repos👷CreateRelease = new CreateRelease($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases());
        }

        return $this->repos👷CreateRelease;
    }

    public function repos👷GetReleaseAsset(): GetReleaseAsset
    {
        if ($this->repos👷GetReleaseAsset instanceof GetReleaseAsset === false) {
            $this->repos👷GetReleaseAsset = new GetReleaseAsset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId());
        }

        return $this->repos👷GetReleaseAsset;
    }

    public function repos👷DeleteReleaseAsset(): DeleteReleaseAsset
    {
        if ($this->repos👷DeleteReleaseAsset instanceof DeleteReleaseAsset === false) {
            $this->repos👷DeleteReleaseAsset = new DeleteReleaseAsset($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteReleaseAsset;
    }

    public function repos👷UpdateReleaseAsset(): UpdateReleaseAsset
    {
        if ($this->repos👷UpdateReleaseAsset instanceof UpdateReleaseAsset === false) {
            $this->repos👷UpdateReleaseAsset = new UpdateReleaseAsset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId());
        }

        return $this->repos👷UpdateReleaseAsset;
    }

    public function repos👷GenerateReleaseNotes(): GenerateReleaseNotes
    {
        if ($this->repos👷GenerateReleaseNotes instanceof GenerateReleaseNotes === false) {
            $this->repos👷GenerateReleaseNotes = new GenerateReleaseNotes($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀GenerateNotes());
        }

        return $this->repos👷GenerateReleaseNotes;
    }

    public function repos👷GetLatestRelease(): GetLatestRelease
    {
        if ($this->repos👷GetLatestRelease instanceof GetLatestRelease === false) {
            $this->repos👷GetLatestRelease = new GetLatestRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest());
        }

        return $this->repos👷GetLatestRelease;
    }

    public function repos👷GetReleaseByTag(): GetReleaseByTag
    {
        if ($this->repos👷GetReleaseByTag instanceof GetReleaseByTag === false) {
            $this->repos👷GetReleaseByTag = new GetReleaseByTag($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag());
        }

        return $this->repos👷GetReleaseByTag;
    }

    public function repos👷GetRelease(): GetRelease
    {
        if ($this->repos👷GetRelease instanceof GetRelease === false) {
            $this->repos👷GetRelease = new GetRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId());
        }

        return $this->repos👷GetRelease;
    }

    public function repos👷DeleteRelease(): DeleteRelease
    {
        if ($this->repos👷DeleteRelease instanceof DeleteRelease === false) {
            $this->repos👷DeleteRelease = new DeleteRelease($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteRelease;
    }

    public function repos👷UpdateRelease(): UpdateRelease
    {
        if ($this->repos👷UpdateRelease instanceof UpdateRelease === false) {
            $this->repos👷UpdateRelease = new UpdateRelease($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId());
        }

        return $this->repos👷UpdateRelease;
    }

    public function repos👷ListReleaseAssets(): ListReleaseAssets
    {
        if ($this->repos👷ListReleaseAssets instanceof ListReleaseAssets === false) {
            $this->repos👷ListReleaseAssets = new ListReleaseAssets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets());
        }

        return $this->repos👷ListReleaseAssets;
    }

    public function repos👷UploadReleaseAsset(): UploadReleaseAsset
    {
        if ($this->repos👷UploadReleaseAsset instanceof UploadReleaseAsset === false) {
            $this->repos👷UploadReleaseAsset = new UploadReleaseAsset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets());
        }

        return $this->repos👷UploadReleaseAsset;
    }

    public function reactions👷ListForRelease(): ListForRelease
    {
        if ($this->reactions👷ListForRelease instanceof ListForRelease === false) {
            $this->reactions👷ListForRelease = new ListForRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions());
        }

        return $this->reactions👷ListForRelease;
    }

    public function reactions👷CreateForRelease(): CreateForRelease
    {
        if ($this->reactions👷CreateForRelease instanceof CreateForRelease === false) {
            $this->reactions👷CreateForRelease = new CreateForRelease($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions());
        }

        return $this->reactions👷CreateForRelease;
    }

    public function reactions👷DeleteForRelease(): DeleteForRelease
    {
        if ($this->reactions👷DeleteForRelease instanceof DeleteForRelease === false) {
            $this->reactions👷DeleteForRelease = new DeleteForRelease($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForRelease;
    }

    public function repos👷GetBranchRules(): GetBranchRules
    {
        if ($this->repos👷GetBranchRules instanceof GetBranchRules === false) {
            $this->repos👷GetBranchRules = new GetBranchRules($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rules🌀Branches🌀Branch());
        }

        return $this->repos👷GetBranchRules;
    }

    public function repos👷GetRepoRulesets(): GetRepoRulesets
    {
        if ($this->repos👷GetRepoRulesets instanceof GetRepoRulesets === false) {
            $this->repos👷GetRepoRulesets = new GetRepoRulesets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets());
        }

        return $this->repos👷GetRepoRulesets;
    }

    public function repos👷CreateRepoRuleset(): CreateRepoRuleset
    {
        if ($this->repos👷CreateRepoRuleset instanceof CreateRepoRuleset === false) {
            $this->repos👷CreateRepoRuleset = new CreateRepoRuleset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets());
        }

        return $this->repos👷CreateRepoRuleset;
    }

    public function repos👷GetRepoRuleSuites(): GetRepoRuleSuites
    {
        if ($this->repos👷GetRepoRuleSuites instanceof GetRepoRuleSuites === false) {
            $this->repos👷GetRepoRuleSuites = new GetRepoRuleSuites($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites());
        }

        return $this->repos👷GetRepoRuleSuites;
    }

    public function repos👷GetRepoRuleSuite(): GetRepoRuleSuite
    {
        if ($this->repos👷GetRepoRuleSuite instanceof GetRepoRuleSuite === false) {
            $this->repos👷GetRepoRuleSuite = new GetRepoRuleSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites🌀RuleSuiteId());
        }

        return $this->repos👷GetRepoRuleSuite;
    }

    public function repos👷GetRepoRuleset(): GetRepoRuleset
    {
        if ($this->repos👷GetRepoRuleset instanceof GetRepoRuleset === false) {
            $this->repos👷GetRepoRuleset = new GetRepoRuleset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId());
        }

        return $this->repos👷GetRepoRuleset;
    }

    public function repos👷UpdateRepoRuleset(): UpdateRepoRuleset
    {
        if ($this->repos👷UpdateRepoRuleset instanceof UpdateRepoRuleset === false) {
            $this->repos👷UpdateRepoRuleset = new UpdateRepoRuleset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId());
        }

        return $this->repos👷UpdateRepoRuleset;
    }

    public function repos👷DeleteRepoRuleset(): DeleteRepoRuleset
    {
        if ($this->repos👷DeleteRepoRuleset instanceof DeleteRepoRuleset === false) {
            $this->repos👷DeleteRepoRuleset = new DeleteRepoRuleset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId());
        }

        return $this->repos👷DeleteRepoRuleset;
    }

    public function secretScanning👷ListAlertsForRepo(): \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\ListAlertsForRepo
    {
        if ($this->secretScanning👷ListAlertsForRepo instanceof \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\ListAlertsForRepo === false) {
            $this->secretScanning👷ListAlertsForRepo = new \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts());
        }

        return $this->secretScanning👷ListAlertsForRepo;
    }

    public function secretScanning👷GetAlert(): \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\GetAlert
    {
        if ($this->secretScanning👷GetAlert instanceof \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\GetAlert === false) {
            $this->secretScanning👷GetAlert = new \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber());
        }

        return $this->secretScanning👷GetAlert;
    }

    public function secretScanning👷UpdateAlert(): \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\UpdateAlert
    {
        if ($this->secretScanning👷UpdateAlert instanceof \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\UpdateAlert === false) {
            $this->secretScanning👷UpdateAlert = new \ApiClients\Client\GitHub\Internal\Operator\SecretScanning\UpdateAlert($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber());
        }

        return $this->secretScanning👷UpdateAlert;
    }

    public function secretScanning👷ListLocationsForAlert(): ListLocationsForAlert
    {
        if ($this->secretScanning👷ListLocationsForAlert instanceof ListLocationsForAlert === false) {
            $this->secretScanning👷ListLocationsForAlert = new ListLocationsForAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations());
        }

        return $this->secretScanning👷ListLocationsForAlert;
    }

    public function secretScanning👷CreatePushProtectionBypass(): CreatePushProtectionBypass
    {
        if ($this->secretScanning👷CreatePushProtectionBypass instanceof CreatePushProtectionBypass === false) {
            $this->secretScanning👷CreatePushProtectionBypass = new CreatePushProtectionBypass($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀PushProtectionBypasses());
        }

        return $this->secretScanning👷CreatePushProtectionBypass;
    }

    public function secretScanning👷GetScanHistory(): GetScanHistory
    {
        if ($this->secretScanning👷GetScanHistory instanceof GetScanHistory === false) {
            $this->secretScanning👷GetScanHistory = new GetScanHistory($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀ScanHistory());
        }

        return $this->secretScanning👷GetScanHistory;
    }

    public function securityAdvisories👷ListRepositoryAdvisories(): ListRepositoryAdvisories
    {
        if ($this->securityAdvisories👷ListRepositoryAdvisories instanceof ListRepositoryAdvisories === false) {
            $this->securityAdvisories👷ListRepositoryAdvisories = new ListRepositoryAdvisories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories());
        }

        return $this->securityAdvisories👷ListRepositoryAdvisories;
    }

    public function securityAdvisories👷CreateRepositoryAdvisory(): CreateRepositoryAdvisory
    {
        if ($this->securityAdvisories👷CreateRepositoryAdvisory instanceof CreateRepositoryAdvisory === false) {
            $this->securityAdvisories👷CreateRepositoryAdvisory = new CreateRepositoryAdvisory($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories());
        }

        return $this->securityAdvisories👷CreateRepositoryAdvisory;
    }

    public function securityAdvisories👷CreatePrivateVulnerabilityReport(): CreatePrivateVulnerabilityReport
    {
        if ($this->securityAdvisories👷CreatePrivateVulnerabilityReport instanceof CreatePrivateVulnerabilityReport === false) {
            $this->securityAdvisories👷CreatePrivateVulnerabilityReport = new CreatePrivateVulnerabilityReport($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀Reports());
        }

        return $this->securityAdvisories👷CreatePrivateVulnerabilityReport;
    }

    public function securityAdvisories👷GetRepositoryAdvisory(): GetRepositoryAdvisory
    {
        if ($this->securityAdvisories👷GetRepositoryAdvisory instanceof GetRepositoryAdvisory === false) {
            $this->securityAdvisories👷GetRepositoryAdvisory = new GetRepositoryAdvisory($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId());
        }

        return $this->securityAdvisories👷GetRepositoryAdvisory;
    }

    public function securityAdvisories👷UpdateRepositoryAdvisory(): UpdateRepositoryAdvisory
    {
        if ($this->securityAdvisories👷UpdateRepositoryAdvisory instanceof UpdateRepositoryAdvisory === false) {
            $this->securityAdvisories👷UpdateRepositoryAdvisory = new UpdateRepositoryAdvisory($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId());
        }

        return $this->securityAdvisories👷UpdateRepositoryAdvisory;
    }

    public function securityAdvisories👷CreateRepositoryAdvisoryCveRequest(): CreateRepositoryAdvisoryCveRequest
    {
        if ($this->securityAdvisories👷CreateRepositoryAdvisoryCveRequest instanceof CreateRepositoryAdvisoryCveRequest === false) {
            $this->securityAdvisories👷CreateRepositoryAdvisoryCveRequest = new CreateRepositoryAdvisoryCveRequest($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve());
        }

        return $this->securityAdvisories👷CreateRepositoryAdvisoryCveRequest;
    }

    public function securityAdvisories👷CreateFork(): \ApiClients\Client\GitHub\Internal\Operator\SecurityAdvisories\CreateFork
    {
        if ($this->securityAdvisories👷CreateFork instanceof \ApiClients\Client\GitHub\Internal\Operator\SecurityAdvisories\CreateFork === false) {
            $this->securityAdvisories👷CreateFork = new \ApiClients\Client\GitHub\Internal\Operator\SecurityAdvisories\CreateFork($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Forks());
        }

        return $this->securityAdvisories👷CreateFork;
    }

    public function activity👷ListStargazersForRepo(): ListStargazersForRepo
    {
        if ($this->activity👷ListStargazersForRepo instanceof ListStargazersForRepo === false) {
            $this->activity👷ListStargazersForRepo = new ListStargazersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stargazers());
        }

        return $this->activity👷ListStargazersForRepo;
    }

    public function repos👷GetCodeFrequencyStats(): GetCodeFrequencyStats
    {
        if ($this->repos👷GetCodeFrequencyStats instanceof GetCodeFrequencyStats === false) {
            $this->repos👷GetCodeFrequencyStats = new GetCodeFrequencyStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency());
        }

        return $this->repos👷GetCodeFrequencyStats;
    }

    public function repos👷GetCommitActivityStats(): GetCommitActivityStats
    {
        if ($this->repos👷GetCommitActivityStats instanceof GetCommitActivityStats === false) {
            $this->repos👷GetCommitActivityStats = new GetCommitActivityStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity());
        }

        return $this->repos👷GetCommitActivityStats;
    }

    public function repos👷GetContributorsStats(): GetContributorsStats
    {
        if ($this->repos👷GetContributorsStats instanceof GetContributorsStats === false) {
            $this->repos👷GetContributorsStats = new GetContributorsStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors());
        }

        return $this->repos👷GetContributorsStats;
    }

    public function repos👷GetParticipationStats(): GetParticipationStats
    {
        if ($this->repos👷GetParticipationStats instanceof GetParticipationStats === false) {
            $this->repos👷GetParticipationStats = new GetParticipationStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation());
        }

        return $this->repos👷GetParticipationStats;
    }

    public function repos👷GetPunchCardStats(): GetPunchCardStats
    {
        if ($this->repos👷GetPunchCardStats instanceof GetPunchCardStats === false) {
            $this->repos👷GetPunchCardStats = new GetPunchCardStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard());
        }

        return $this->repos👷GetPunchCardStats;
    }

    public function repos👷CreateCommitStatus(): CreateCommitStatus
    {
        if ($this->repos👷CreateCommitStatus instanceof CreateCommitStatus === false) {
            $this->repos👷CreateCommitStatus = new CreateCommitStatus($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha());
        }

        return $this->repos👷CreateCommitStatus;
    }

    public function activity👷ListWatchersForRepo(): ListWatchersForRepo
    {
        if ($this->activity👷ListWatchersForRepo instanceof ListWatchersForRepo === false) {
            $this->activity👷ListWatchersForRepo = new ListWatchersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscribers());
        }

        return $this->activity👷ListWatchersForRepo;
    }

    public function activity👷GetRepoSubscription(): GetRepoSubscription
    {
        if ($this->activity👷GetRepoSubscription instanceof GetRepoSubscription === false) {
            $this->activity👷GetRepoSubscription = new GetRepoSubscription($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription());
        }

        return $this->activity👷GetRepoSubscription;
    }

    public function activity👷SetRepoSubscription(): SetRepoSubscription
    {
        if ($this->activity👷SetRepoSubscription instanceof SetRepoSubscription === false) {
            $this->activity👷SetRepoSubscription = new SetRepoSubscription($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription());
        }

        return $this->activity👷SetRepoSubscription;
    }

    public function activity👷DeleteRepoSubscription(): DeleteRepoSubscription
    {
        if ($this->activity👷DeleteRepoSubscription instanceof DeleteRepoSubscription === false) {
            $this->activity👷DeleteRepoSubscription = new DeleteRepoSubscription($this->browser, $this->authentication);
        }

        return $this->activity👷DeleteRepoSubscription;
    }

    public function repos👷ListTags(): ListTags
    {
        if ($this->repos👷ListTags instanceof ListTags === false) {
            $this->repos👷ListTags = new ListTags($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags());
        }

        return $this->repos👷ListTags;
    }

    public function repos👷ListTagProtection(): ListTagProtection
    {
        if ($this->repos👷ListTagProtection instanceof ListTagProtection === false) {
            $this->repos👷ListTagProtection = new ListTagProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection());
        }

        return $this->repos👷ListTagProtection;
    }

    public function repos👷CreateTagProtection(): CreateTagProtection
    {
        if ($this->repos👷CreateTagProtection instanceof CreateTagProtection === false) {
            $this->repos👷CreateTagProtection = new CreateTagProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection());
        }

        return $this->repos👷CreateTagProtection;
    }

    public function repos👷DeleteTagProtection(): DeleteTagProtection
    {
        if ($this->repos👷DeleteTagProtection instanceof DeleteTagProtection === false) {
            $this->repos👷DeleteTagProtection = new DeleteTagProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection🌀TagProtectionId());
        }

        return $this->repos👷DeleteTagProtection;
    }

    public function repos👷DownloadTarballArchive(): DownloadTarballArchive
    {
        if ($this->repos👷DownloadTarballArchive instanceof DownloadTarballArchive === false) {
            $this->repos👷DownloadTarballArchive = new DownloadTarballArchive($this->browser, $this->authentication);
        }

        return $this->repos👷DownloadTarballArchive;
    }

    public function repos👷ListTeams(): ListTeams
    {
        if ($this->repos👷ListTeams instanceof ListTeams === false) {
            $this->repos👷ListTeams = new ListTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Teams());
        }

        return $this->repos👷ListTeams;
    }

    public function repos👷GetAllTopics(): GetAllTopics
    {
        if ($this->repos👷GetAllTopics instanceof GetAllTopics === false) {
            $this->repos👷GetAllTopics = new GetAllTopics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics());
        }

        return $this->repos👷GetAllTopics;
    }

    public function repos👷ReplaceAllTopics(): ReplaceAllTopics
    {
        if ($this->repos👷ReplaceAllTopics instanceof ReplaceAllTopics === false) {
            $this->repos👷ReplaceAllTopics = new ReplaceAllTopics($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics());
        }

        return $this->repos👷ReplaceAllTopics;
    }

    public function repos👷GetClones(): GetClones
    {
        if ($this->repos👷GetClones instanceof GetClones === false) {
            $this->repos👷GetClones = new GetClones($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Clones());
        }

        return $this->repos👷GetClones;
    }

    public function repos👷GetTopPaths(): GetTopPaths
    {
        if ($this->repos👷GetTopPaths instanceof GetTopPaths === false) {
            $this->repos👷GetTopPaths = new GetTopPaths($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Paths());
        }

        return $this->repos👷GetTopPaths;
    }

    public function repos👷GetTopReferrers(): GetTopReferrers
    {
        if ($this->repos👷GetTopReferrers instanceof GetTopReferrers === false) {
            $this->repos👷GetTopReferrers = new GetTopReferrers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Referrers());
        }

        return $this->repos👷GetTopReferrers;
    }

    public function repos👷GetViews(): GetViews
    {
        if ($this->repos👷GetViews instanceof GetViews === false) {
            $this->repos👷GetViews = new GetViews($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Views());
        }

        return $this->repos👷GetViews;
    }

    public function repos👷Transfer(): Transfer
    {
        if ($this->repos👷Transfer instanceof Transfer === false) {
            $this->repos👷Transfer = new Transfer($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Transfer());
        }

        return $this->repos👷Transfer;
    }

    public function repos👷CheckVulnerabilityAlerts(): CheckVulnerabilityAlerts
    {
        if ($this->repos👷CheckVulnerabilityAlerts instanceof CheckVulnerabilityAlerts === false) {
            $this->repos👷CheckVulnerabilityAlerts = new CheckVulnerabilityAlerts($this->browser, $this->authentication);
        }

        return $this->repos👷CheckVulnerabilityAlerts;
    }

    public function repos👷EnableVulnerabilityAlerts(): EnableVulnerabilityAlerts
    {
        if ($this->repos👷EnableVulnerabilityAlerts instanceof EnableVulnerabilityAlerts === false) {
            $this->repos👷EnableVulnerabilityAlerts = new EnableVulnerabilityAlerts($this->browser, $this->authentication);
        }

        return $this->repos👷EnableVulnerabilityAlerts;
    }

    public function repos👷DisableVulnerabilityAlerts(): DisableVulnerabilityAlerts
    {
        if ($this->repos👷DisableVulnerabilityAlerts instanceof DisableVulnerabilityAlerts === false) {
            $this->repos👷DisableVulnerabilityAlerts = new DisableVulnerabilityAlerts($this->browser, $this->authentication);
        }

        return $this->repos👷DisableVulnerabilityAlerts;
    }

    public function repos👷DownloadZipballArchive(): DownloadZipballArchive
    {
        if ($this->repos👷DownloadZipballArchive instanceof DownloadZipballArchive === false) {
            $this->repos👷DownloadZipballArchive = new DownloadZipballArchive($this->browser, $this->authentication);
        }

        return $this->repos👷DownloadZipballArchive;
    }

    public function repos👷CreateUsingTemplate(): CreateUsingTemplate
    {
        if ($this->repos👷CreateUsingTemplate instanceof CreateUsingTemplate === false) {
            $this->repos👷CreateUsingTemplate = new CreateUsingTemplate($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate());
        }

        return $this->repos👷CreateUsingTemplate;
    }

    public function repos👷ListPublic(): \ApiClients\Client\GitHub\Internal\Operator\Repos\ListPublic
    {
        if ($this->repos👷ListPublic instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\ListPublic === false) {
            $this->repos👷ListPublic = new \ApiClients\Client\GitHub\Internal\Operator\Repos\ListPublic($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories());
        }

        return $this->repos👷ListPublic;
    }

    public function search👷Code(): Code
    {
        if ($this->search👷Code instanceof Code === false) {
            $this->search👷Code = new Code($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Code());
        }

        return $this->search👷Code;
    }

    public function search👷Commits(): Commits
    {
        if ($this->search👷Commits instanceof Commits === false) {
            $this->search👷Commits = new Commits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Commits());
        }

        return $this->search👷Commits;
    }

    public function search👷IssuesAndPullRequests(): IssuesAndPullRequests
    {
        if ($this->search👷IssuesAndPullRequests instanceof IssuesAndPullRequests === false) {
            $this->search👷IssuesAndPullRequests = new IssuesAndPullRequests($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Issues());
        }

        return $this->search👷IssuesAndPullRequests;
    }

    public function search👷Labels(): Labels
    {
        if ($this->search👷Labels instanceof Labels === false) {
            $this->search👷Labels = new Labels($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Labels());
        }

        return $this->search👷Labels;
    }

    public function search👷Repos(): Repos
    {
        if ($this->search👷Repos instanceof Repos === false) {
            $this->search👷Repos = new Repos($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Repositories());
        }

        return $this->search👷Repos;
    }

    public function search👷Topics(): Topics
    {
        if ($this->search👷Topics instanceof Topics === false) {
            $this->search👷Topics = new Topics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Topics());
        }

        return $this->search👷Topics;
    }

    public function search👷Users(): Users
    {
        if ($this->search👷Users instanceof Users === false) {
            $this->search👷Users = new Users($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Users());
        }

        return $this->search👷Users;
    }

    public function teams👷GetLegacy(): GetLegacy
    {
        if ($this->teams👷GetLegacy instanceof GetLegacy === false) {
            $this->teams👷GetLegacy = new GetLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId());
        }

        return $this->teams👷GetLegacy;
    }

    public function teams👷DeleteLegacy(): DeleteLegacy
    {
        if ($this->teams👷DeleteLegacy instanceof DeleteLegacy === false) {
            $this->teams👷DeleteLegacy = new DeleteLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId());
        }

        return $this->teams👷DeleteLegacy;
    }

    public function teams👷UpdateLegacy(): UpdateLegacy
    {
        if ($this->teams👷UpdateLegacy instanceof UpdateLegacy === false) {
            $this->teams👷UpdateLegacy = new UpdateLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId());
        }

        return $this->teams👷UpdateLegacy;
    }

    public function teams👷ListDiscussionsLegacy(): ListDiscussionsLegacy
    {
        if ($this->teams👷ListDiscussionsLegacy instanceof ListDiscussionsLegacy === false) {
            $this->teams👷ListDiscussionsLegacy = new ListDiscussionsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions());
        }

        return $this->teams👷ListDiscussionsLegacy;
    }

    public function teams👷CreateDiscussionLegacy(): CreateDiscussionLegacy
    {
        if ($this->teams👷CreateDiscussionLegacy instanceof CreateDiscussionLegacy === false) {
            $this->teams👷CreateDiscussionLegacy = new CreateDiscussionLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions());
        }

        return $this->teams👷CreateDiscussionLegacy;
    }

    public function teams👷GetDiscussionLegacy(): GetDiscussionLegacy
    {
        if ($this->teams👷GetDiscussionLegacy instanceof GetDiscussionLegacy === false) {
            $this->teams👷GetDiscussionLegacy = new GetDiscussionLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber());
        }

        return $this->teams👷GetDiscussionLegacy;
    }

    public function teams👷DeleteDiscussionLegacy(): DeleteDiscussionLegacy
    {
        if ($this->teams👷DeleteDiscussionLegacy instanceof DeleteDiscussionLegacy === false) {
            $this->teams👷DeleteDiscussionLegacy = new DeleteDiscussionLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteDiscussionLegacy;
    }

    public function teams👷UpdateDiscussionLegacy(): UpdateDiscussionLegacy
    {
        if ($this->teams👷UpdateDiscussionLegacy instanceof UpdateDiscussionLegacy === false) {
            $this->teams👷UpdateDiscussionLegacy = new UpdateDiscussionLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber());
        }

        return $this->teams👷UpdateDiscussionLegacy;
    }

    public function teams👷ListDiscussionCommentsLegacy(): ListDiscussionCommentsLegacy
    {
        if ($this->teams👷ListDiscussionCommentsLegacy instanceof ListDiscussionCommentsLegacy === false) {
            $this->teams👷ListDiscussionCommentsLegacy = new ListDiscussionCommentsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷ListDiscussionCommentsLegacy;
    }

    public function teams👷CreateDiscussionCommentLegacy(): CreateDiscussionCommentLegacy
    {
        if ($this->teams👷CreateDiscussionCommentLegacy instanceof CreateDiscussionCommentLegacy === false) {
            $this->teams👷CreateDiscussionCommentLegacy = new CreateDiscussionCommentLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷CreateDiscussionCommentLegacy;
    }

    public function teams👷GetDiscussionCommentLegacy(): GetDiscussionCommentLegacy
    {
        if ($this->teams👷GetDiscussionCommentLegacy instanceof GetDiscussionCommentLegacy === false) {
            $this->teams👷GetDiscussionCommentLegacy = new GetDiscussionCommentLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->teams👷GetDiscussionCommentLegacy;
    }

    public function teams👷DeleteDiscussionCommentLegacy(): DeleteDiscussionCommentLegacy
    {
        if ($this->teams👷DeleteDiscussionCommentLegacy instanceof DeleteDiscussionCommentLegacy === false) {
            $this->teams👷DeleteDiscussionCommentLegacy = new DeleteDiscussionCommentLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteDiscussionCommentLegacy;
    }

    public function teams👷UpdateDiscussionCommentLegacy(): UpdateDiscussionCommentLegacy
    {
        if ($this->teams👷UpdateDiscussionCommentLegacy instanceof UpdateDiscussionCommentLegacy === false) {
            $this->teams👷UpdateDiscussionCommentLegacy = new UpdateDiscussionCommentLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->teams👷UpdateDiscussionCommentLegacy;
    }

    public function reactions👷ListForTeamDiscussionCommentLegacy(): ListForTeamDiscussionCommentLegacy
    {
        if ($this->reactions👷ListForTeamDiscussionCommentLegacy instanceof ListForTeamDiscussionCommentLegacy === false) {
            $this->reactions👷ListForTeamDiscussionCommentLegacy = new ListForTeamDiscussionCommentLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionCommentLegacy;
    }

    public function reactions👷CreateForTeamDiscussionCommentLegacy(): CreateForTeamDiscussionCommentLegacy
    {
        if ($this->reactions👷CreateForTeamDiscussionCommentLegacy instanceof CreateForTeamDiscussionCommentLegacy === false) {
            $this->reactions👷CreateForTeamDiscussionCommentLegacy = new CreateForTeamDiscussionCommentLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷CreateForTeamDiscussionCommentLegacy;
    }

    public function reactions👷ListForTeamDiscussionLegacy(): ListForTeamDiscussionLegacy
    {
        if ($this->reactions👷ListForTeamDiscussionLegacy instanceof ListForTeamDiscussionLegacy === false) {
            $this->reactions👷ListForTeamDiscussionLegacy = new ListForTeamDiscussionLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionLegacy;
    }

    public function reactions👷CreateForTeamDiscussionLegacy(): CreateForTeamDiscussionLegacy
    {
        if ($this->reactions👷CreateForTeamDiscussionLegacy instanceof CreateForTeamDiscussionLegacy === false) {
            $this->reactions👷CreateForTeamDiscussionLegacy = new CreateForTeamDiscussionLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷CreateForTeamDiscussionLegacy;
    }

    public function teams👷ListPendingInvitationsLegacy(): ListPendingInvitationsLegacy
    {
        if ($this->teams👷ListPendingInvitationsLegacy instanceof ListPendingInvitationsLegacy === false) {
            $this->teams👷ListPendingInvitationsLegacy = new ListPendingInvitationsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Invitations());
        }

        return $this->teams👷ListPendingInvitationsLegacy;
    }

    public function teams👷ListMembersLegacy(): ListMembersLegacy
    {
        if ($this->teams👷ListMembersLegacy instanceof ListMembersLegacy === false) {
            $this->teams👷ListMembersLegacy = new ListMembersLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Members());
        }

        return $this->teams👷ListMembersLegacy;
    }

    public function teams👷GetMemberLegacy(): GetMemberLegacy
    {
        if ($this->teams👷GetMemberLegacy instanceof GetMemberLegacy === false) {
            $this->teams👷GetMemberLegacy = new GetMemberLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷GetMemberLegacy;
    }

    public function teams👷AddMemberLegacy(): AddMemberLegacy
    {
        if ($this->teams👷AddMemberLegacy instanceof AddMemberLegacy === false) {
            $this->teams👷AddMemberLegacy = new AddMemberLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Members🌀Username());
        }

        return $this->teams👷AddMemberLegacy;
    }

    public function teams👷RemoveMemberLegacy(): RemoveMemberLegacy
    {
        if ($this->teams👷RemoveMemberLegacy instanceof RemoveMemberLegacy === false) {
            $this->teams👷RemoveMemberLegacy = new RemoveMemberLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveMemberLegacy;
    }

    public function teams👷GetMembershipForUserLegacy(): GetMembershipForUserLegacy
    {
        if ($this->teams👷GetMembershipForUserLegacy instanceof GetMembershipForUserLegacy === false) {
            $this->teams👷GetMembershipForUserLegacy = new GetMembershipForUserLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Memberships🌀Username());
        }

        return $this->teams👷GetMembershipForUserLegacy;
    }

    public function teams👷AddOrUpdateMembershipForUserLegacy(): AddOrUpdateMembershipForUserLegacy
    {
        if ($this->teams👷AddOrUpdateMembershipForUserLegacy instanceof AddOrUpdateMembershipForUserLegacy === false) {
            $this->teams👷AddOrUpdateMembershipForUserLegacy = new AddOrUpdateMembershipForUserLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Memberships🌀Username());
        }

        return $this->teams👷AddOrUpdateMembershipForUserLegacy;
    }

    public function teams👷RemoveMembershipForUserLegacy(): RemoveMembershipForUserLegacy
    {
        if ($this->teams👷RemoveMembershipForUserLegacy instanceof RemoveMembershipForUserLegacy === false) {
            $this->teams👷RemoveMembershipForUserLegacy = new RemoveMembershipForUserLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveMembershipForUserLegacy;
    }

    public function teams👷ListProjectsLegacy(): ListProjectsLegacy
    {
        if ($this->teams👷ListProjectsLegacy instanceof ListProjectsLegacy === false) {
            $this->teams👷ListProjectsLegacy = new ListProjectsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects());
        }

        return $this->teams👷ListProjectsLegacy;
    }

    public function teams👷CheckPermissionsForProjectLegacy(): CheckPermissionsForProjectLegacy
    {
        if ($this->teams👷CheckPermissionsForProjectLegacy instanceof CheckPermissionsForProjectLegacy === false) {
            $this->teams👷CheckPermissionsForProjectLegacy = new CheckPermissionsForProjectLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId());
        }

        return $this->teams👷CheckPermissionsForProjectLegacy;
    }

    public function teams👷AddOrUpdateProjectPermissionsLegacy(): AddOrUpdateProjectPermissionsLegacy
    {
        if ($this->teams👷AddOrUpdateProjectPermissionsLegacy instanceof AddOrUpdateProjectPermissionsLegacy === false) {
            $this->teams👷AddOrUpdateProjectPermissionsLegacy = new AddOrUpdateProjectPermissionsLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId());
        }

        return $this->teams👷AddOrUpdateProjectPermissionsLegacy;
    }

    public function teams👷RemoveProjectLegacy(): RemoveProjectLegacy
    {
        if ($this->teams👷RemoveProjectLegacy instanceof RemoveProjectLegacy === false) {
            $this->teams👷RemoveProjectLegacy = new RemoveProjectLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId());
        }

        return $this->teams👷RemoveProjectLegacy;
    }

    public function teams👷ListReposLegacy(): ListReposLegacy
    {
        if ($this->teams👷ListReposLegacy instanceof ListReposLegacy === false) {
            $this->teams👷ListReposLegacy = new ListReposLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos());
        }

        return $this->teams👷ListReposLegacy;
    }

    public function teams👷CheckPermissionsForRepoLegacy(): CheckPermissionsForRepoLegacy
    {
        if ($this->teams👷CheckPermissionsForRepoLegacy instanceof CheckPermissionsForRepoLegacy === false) {
            $this->teams👷CheckPermissionsForRepoLegacy = new CheckPermissionsForRepoLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo());
        }

        return $this->teams👷CheckPermissionsForRepoLegacy;
    }

    public function teams👷AddOrUpdateRepoPermissionsLegacy(): AddOrUpdateRepoPermissionsLegacy
    {
        if ($this->teams👷AddOrUpdateRepoPermissionsLegacy instanceof AddOrUpdateRepoPermissionsLegacy === false) {
            $this->teams👷AddOrUpdateRepoPermissionsLegacy = new AddOrUpdateRepoPermissionsLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo());
        }

        return $this->teams👷AddOrUpdateRepoPermissionsLegacy;
    }

    public function teams👷RemoveRepoLegacy(): RemoveRepoLegacy
    {
        if ($this->teams👷RemoveRepoLegacy instanceof RemoveRepoLegacy === false) {
            $this->teams👷RemoveRepoLegacy = new RemoveRepoLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveRepoLegacy;
    }

    public function teams👷ListChildLegacy(): ListChildLegacy
    {
        if ($this->teams👷ListChildLegacy instanceof ListChildLegacy === false) {
            $this->teams👷ListChildLegacy = new ListChildLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Teams());
        }

        return $this->teams👷ListChildLegacy;
    }

    public function users👷GetAuthenticated(): \ApiClients\Client\GitHub\Internal\Operator\Users\GetAuthenticated
    {
        if ($this->users👷GetAuthenticated instanceof \ApiClients\Client\GitHub\Internal\Operator\Users\GetAuthenticated === false) {
            $this->users👷GetAuthenticated = new \ApiClients\Client\GitHub\Internal\Operator\Users\GetAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User());
        }

        return $this->users👷GetAuthenticated;
    }

    public function users👷UpdateAuthenticated(): UpdateAuthenticated
    {
        if ($this->users👷UpdateAuthenticated instanceof UpdateAuthenticated === false) {
            $this->users👷UpdateAuthenticated = new UpdateAuthenticated($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User());
        }

        return $this->users👷UpdateAuthenticated;
    }

    public function users👷ListBlockedByAuthenticatedUser(): ListBlockedByAuthenticatedUser
    {
        if ($this->users👷ListBlockedByAuthenticatedUser instanceof ListBlockedByAuthenticatedUser === false) {
            $this->users👷ListBlockedByAuthenticatedUser = new ListBlockedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks());
        }

        return $this->users👷ListBlockedByAuthenticatedUser;
    }

    public function users👷CheckBlocked(): CheckBlocked
    {
        if ($this->users👷CheckBlocked instanceof CheckBlocked === false) {
            $this->users👷CheckBlocked = new CheckBlocked($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks🌀Username());
        }

        return $this->users👷CheckBlocked;
    }

    public function users👷Block(): Block
    {
        if ($this->users👷Block instanceof Block === false) {
            $this->users👷Block = new Block($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks🌀Username());
        }

        return $this->users👷Block;
    }

    public function users👷Unblock(): Unblock
    {
        if ($this->users👷Unblock instanceof Unblock === false) {
            $this->users👷Unblock = new Unblock($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks🌀Username());
        }

        return $this->users👷Unblock;
    }

    public function codespaces👷ListForAuthenticatedUser(): ListForAuthenticatedUser
    {
        if ($this->codespaces👷ListForAuthenticatedUser instanceof ListForAuthenticatedUser === false) {
            $this->codespaces👷ListForAuthenticatedUser = new ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces());
        }

        return $this->codespaces👷ListForAuthenticatedUser;
    }

    public function codespaces👷CreateForAuthenticatedUser(): CreateForAuthenticatedUser
    {
        if ($this->codespaces👷CreateForAuthenticatedUser instanceof CreateForAuthenticatedUser === false) {
            $this->codespaces👷CreateForAuthenticatedUser = new CreateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces());
        }

        return $this->codespaces👷CreateForAuthenticatedUser;
    }

    public function codespaces👷ListSecretsForAuthenticatedUser(): ListSecretsForAuthenticatedUser
    {
        if ($this->codespaces👷ListSecretsForAuthenticatedUser instanceof ListSecretsForAuthenticatedUser === false) {
            $this->codespaces👷ListSecretsForAuthenticatedUser = new ListSecretsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets());
        }

        return $this->codespaces👷ListSecretsForAuthenticatedUser;
    }

    public function codespaces👷GetPublicKeyForAuthenticatedUser(): GetPublicKeyForAuthenticatedUser
    {
        if ($this->codespaces👷GetPublicKeyForAuthenticatedUser instanceof GetPublicKeyForAuthenticatedUser === false) {
            $this->codespaces👷GetPublicKeyForAuthenticatedUser = new GetPublicKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey());
        }

        return $this->codespaces👷GetPublicKeyForAuthenticatedUser;
    }

    public function codespaces👷GetSecretForAuthenticatedUser(): GetSecretForAuthenticatedUser
    {
        if ($this->codespaces👷GetSecretForAuthenticatedUser instanceof GetSecretForAuthenticatedUser === false) {
            $this->codespaces👷GetSecretForAuthenticatedUser = new GetSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷GetSecretForAuthenticatedUser;
    }

    public function codespaces👷CreateOrUpdateSecretForAuthenticatedUser(): CreateOrUpdateSecretForAuthenticatedUser
    {
        if ($this->codespaces👷CreateOrUpdateSecretForAuthenticatedUser instanceof CreateOrUpdateSecretForAuthenticatedUser === false) {
            $this->codespaces👷CreateOrUpdateSecretForAuthenticatedUser = new CreateOrUpdateSecretForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷CreateOrUpdateSecretForAuthenticatedUser;
    }

    public function codespaces👷DeleteSecretForAuthenticatedUser(): DeleteSecretForAuthenticatedUser
    {
        if ($this->codespaces👷DeleteSecretForAuthenticatedUser instanceof DeleteSecretForAuthenticatedUser === false) {
            $this->codespaces👷DeleteSecretForAuthenticatedUser = new DeleteSecretForAuthenticatedUser($this->browser, $this->authentication);
        }

        return $this->codespaces👷DeleteSecretForAuthenticatedUser;
    }

    public function codespaces👷ListRepositoriesForSecretForAuthenticatedUser(): ListRepositoriesForSecretForAuthenticatedUser
    {
        if ($this->codespaces👷ListRepositoriesForSecretForAuthenticatedUser instanceof ListRepositoriesForSecretForAuthenticatedUser === false) {
            $this->codespaces👷ListRepositoriesForSecretForAuthenticatedUser = new ListRepositoriesForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->codespaces👷ListRepositoriesForSecretForAuthenticatedUser;
    }

    public function codespaces👷SetRepositoriesForSecretForAuthenticatedUser(): SetRepositoriesForSecretForAuthenticatedUser
    {
        if ($this->codespaces👷SetRepositoriesForSecretForAuthenticatedUser instanceof SetRepositoriesForSecretForAuthenticatedUser === false) {
            $this->codespaces👷SetRepositoriesForSecretForAuthenticatedUser = new SetRepositoriesForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->codespaces👷SetRepositoriesForSecretForAuthenticatedUser;
    }

    public function codespaces👷AddRepositoryForSecretForAuthenticatedUser(): AddRepositoryForSecretForAuthenticatedUser
    {
        if ($this->codespaces👷AddRepositoryForSecretForAuthenticatedUser instanceof AddRepositoryForSecretForAuthenticatedUser === false) {
            $this->codespaces👷AddRepositoryForSecretForAuthenticatedUser = new AddRepositoryForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->codespaces👷AddRepositoryForSecretForAuthenticatedUser;
    }

    public function codespaces👷RemoveRepositoryForSecretForAuthenticatedUser(): RemoveRepositoryForSecretForAuthenticatedUser
    {
        if ($this->codespaces👷RemoveRepositoryForSecretForAuthenticatedUser instanceof RemoveRepositoryForSecretForAuthenticatedUser === false) {
            $this->codespaces👷RemoveRepositoryForSecretForAuthenticatedUser = new RemoveRepositoryForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->codespaces👷RemoveRepositoryForSecretForAuthenticatedUser;
    }

    public function codespaces👷GetForAuthenticatedUser(): GetForAuthenticatedUser
    {
        if ($this->codespaces👷GetForAuthenticatedUser instanceof GetForAuthenticatedUser === false) {
            $this->codespaces👷GetForAuthenticatedUser = new GetForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName());
        }

        return $this->codespaces👷GetForAuthenticatedUser;
    }

    public function codespaces👷DeleteForAuthenticatedUser(): DeleteForAuthenticatedUser
    {
        if ($this->codespaces👷DeleteForAuthenticatedUser instanceof DeleteForAuthenticatedUser === false) {
            $this->codespaces👷DeleteForAuthenticatedUser = new DeleteForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName());
        }

        return $this->codespaces👷DeleteForAuthenticatedUser;
    }

    public function codespaces👷UpdateForAuthenticatedUser(): UpdateForAuthenticatedUser
    {
        if ($this->codespaces👷UpdateForAuthenticatedUser instanceof UpdateForAuthenticatedUser === false) {
            $this->codespaces👷UpdateForAuthenticatedUser = new UpdateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName());
        }

        return $this->codespaces👷UpdateForAuthenticatedUser;
    }

    public function codespaces👷ExportForAuthenticatedUser(): ExportForAuthenticatedUser
    {
        if ($this->codespaces👷ExportForAuthenticatedUser instanceof ExportForAuthenticatedUser === false) {
            $this->codespaces👷ExportForAuthenticatedUser = new ExportForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports());
        }

        return $this->codespaces👷ExportForAuthenticatedUser;
    }

    public function codespaces👷GetExportDetailsForAuthenticatedUser(): GetExportDetailsForAuthenticatedUser
    {
        if ($this->codespaces👷GetExportDetailsForAuthenticatedUser instanceof GetExportDetailsForAuthenticatedUser === false) {
            $this->codespaces👷GetExportDetailsForAuthenticatedUser = new GetExportDetailsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports🌀ExportId());
        }

        return $this->codespaces👷GetExportDetailsForAuthenticatedUser;
    }

    public function codespaces👷CodespaceMachinesForAuthenticatedUser(): CodespaceMachinesForAuthenticatedUser
    {
        if ($this->codespaces👷CodespaceMachinesForAuthenticatedUser instanceof CodespaceMachinesForAuthenticatedUser === false) {
            $this->codespaces👷CodespaceMachinesForAuthenticatedUser = new CodespaceMachinesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Machines());
        }

        return $this->codespaces👷CodespaceMachinesForAuthenticatedUser;
    }

    public function codespaces👷PublishForAuthenticatedUser(): PublishForAuthenticatedUser
    {
        if ($this->codespaces👷PublishForAuthenticatedUser instanceof PublishForAuthenticatedUser === false) {
            $this->codespaces👷PublishForAuthenticatedUser = new PublishForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Publish());
        }

        return $this->codespaces👷PublishForAuthenticatedUser;
    }

    public function codespaces👷StartForAuthenticatedUser(): StartForAuthenticatedUser
    {
        if ($this->codespaces👷StartForAuthenticatedUser instanceof StartForAuthenticatedUser === false) {
            $this->codespaces👷StartForAuthenticatedUser = new StartForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Start());
        }

        return $this->codespaces👷StartForAuthenticatedUser;
    }

    public function codespaces👷StopForAuthenticatedUser(): StopForAuthenticatedUser
    {
        if ($this->codespaces👷StopForAuthenticatedUser instanceof StopForAuthenticatedUser === false) {
            $this->codespaces👷StopForAuthenticatedUser = new StopForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Stop());
        }

        return $this->codespaces👷StopForAuthenticatedUser;
    }

    public function packages👷ListDockerMigrationConflictingPackagesForAuthenticatedUser(): ListDockerMigrationConflictingPackagesForAuthenticatedUser
    {
        if ($this->packages👷ListDockerMigrationConflictingPackagesForAuthenticatedUser instanceof ListDockerMigrationConflictingPackagesForAuthenticatedUser === false) {
            $this->packages👷ListDockerMigrationConflictingPackagesForAuthenticatedUser = new ListDockerMigrationConflictingPackagesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Docker🌀Conflicts());
        }

        return $this->packages👷ListDockerMigrationConflictingPackagesForAuthenticatedUser;
    }

    public function users👷SetPrimaryEmailVisibilityForAuthenticatedUser(): SetPrimaryEmailVisibilityForAuthenticatedUser
    {
        if ($this->users👷SetPrimaryEmailVisibilityForAuthenticatedUser instanceof SetPrimaryEmailVisibilityForAuthenticatedUser === false) {
            $this->users👷SetPrimaryEmailVisibilityForAuthenticatedUser = new SetPrimaryEmailVisibilityForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Email🌀Visibility());
        }

        return $this->users👷SetPrimaryEmailVisibilityForAuthenticatedUser;
    }

    public function users👷ListEmailsForAuthenticatedUser(): ListEmailsForAuthenticatedUser
    {
        if ($this->users👷ListEmailsForAuthenticatedUser instanceof ListEmailsForAuthenticatedUser === false) {
            $this->users👷ListEmailsForAuthenticatedUser = new ListEmailsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Emails());
        }

        return $this->users👷ListEmailsForAuthenticatedUser;
    }

    public function users👷AddEmailForAuthenticatedUser(): AddEmailForAuthenticatedUser
    {
        if ($this->users👷AddEmailForAuthenticatedUser instanceof AddEmailForAuthenticatedUser === false) {
            $this->users👷AddEmailForAuthenticatedUser = new AddEmailForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Emails());
        }

        return $this->users👷AddEmailForAuthenticatedUser;
    }

    public function users👷DeleteEmailForAuthenticatedUser(): DeleteEmailForAuthenticatedUser
    {
        if ($this->users👷DeleteEmailForAuthenticatedUser instanceof DeleteEmailForAuthenticatedUser === false) {
            $this->users👷DeleteEmailForAuthenticatedUser = new DeleteEmailForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Emails());
        }

        return $this->users👷DeleteEmailForAuthenticatedUser;
    }

    public function users👷ListFollowersForAuthenticatedUser(): ListFollowersForAuthenticatedUser
    {
        if ($this->users👷ListFollowersForAuthenticatedUser instanceof ListFollowersForAuthenticatedUser === false) {
            $this->users👷ListFollowersForAuthenticatedUser = new ListFollowersForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Followers());
        }

        return $this->users👷ListFollowersForAuthenticatedUser;
    }

    public function users👷ListFollowedByAuthenticatedUser(): ListFollowedByAuthenticatedUser
    {
        if ($this->users👷ListFollowedByAuthenticatedUser instanceof ListFollowedByAuthenticatedUser === false) {
            $this->users👷ListFollowedByAuthenticatedUser = new ListFollowedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following());
        }

        return $this->users👷ListFollowedByAuthenticatedUser;
    }

    public function users👷CheckPersonIsFollowedByAuthenticated(): CheckPersonIsFollowedByAuthenticated
    {
        if ($this->users👷CheckPersonIsFollowedByAuthenticated instanceof CheckPersonIsFollowedByAuthenticated === false) {
            $this->users👷CheckPersonIsFollowedByAuthenticated = new CheckPersonIsFollowedByAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());
        }

        return $this->users👷CheckPersonIsFollowedByAuthenticated;
    }

    public function users👷Follow(): Follow
    {
        if ($this->users👷Follow instanceof Follow === false) {
            $this->users👷Follow = new Follow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());
        }

        return $this->users👷Follow;
    }

    public function users👷Unfollow(): Unfollow
    {
        if ($this->users👷Unfollow instanceof Unfollow === false) {
            $this->users👷Unfollow = new Unfollow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());
        }

        return $this->users👷Unfollow;
    }

    public function users👷ListGpgKeysForAuthenticatedUser(): ListGpgKeysForAuthenticatedUser
    {
        if ($this->users👷ListGpgKeysForAuthenticatedUser instanceof ListGpgKeysForAuthenticatedUser === false) {
            $this->users👷ListGpgKeysForAuthenticatedUser = new ListGpgKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());
        }

        return $this->users👷ListGpgKeysForAuthenticatedUser;
    }

    public function users👷CreateGpgKeyForAuthenticatedUser(): CreateGpgKeyForAuthenticatedUser
    {
        if ($this->users👷CreateGpgKeyForAuthenticatedUser instanceof CreateGpgKeyForAuthenticatedUser === false) {
            $this->users👷CreateGpgKeyForAuthenticatedUser = new CreateGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());
        }

        return $this->users👷CreateGpgKeyForAuthenticatedUser;
    }

    public function users👷GetGpgKeyForAuthenticatedUser(): GetGpgKeyForAuthenticatedUser
    {
        if ($this->users👷GetGpgKeyForAuthenticatedUser instanceof GetGpgKeyForAuthenticatedUser === false) {
            $this->users👷GetGpgKeyForAuthenticatedUser = new GetGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId());
        }

        return $this->users👷GetGpgKeyForAuthenticatedUser;
    }

    public function users👷DeleteGpgKeyForAuthenticatedUser(): DeleteGpgKeyForAuthenticatedUser
    {
        if ($this->users👷DeleteGpgKeyForAuthenticatedUser instanceof DeleteGpgKeyForAuthenticatedUser === false) {
            $this->users👷DeleteGpgKeyForAuthenticatedUser = new DeleteGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId());
        }

        return $this->users👷DeleteGpgKeyForAuthenticatedUser;
    }

    public function apps👷ListInstallationsForAuthenticatedUser(): ListInstallationsForAuthenticatedUser
    {
        if ($this->apps👷ListInstallationsForAuthenticatedUser instanceof ListInstallationsForAuthenticatedUser === false) {
            $this->apps👷ListInstallationsForAuthenticatedUser = new ListInstallationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations());
        }

        return $this->apps👷ListInstallationsForAuthenticatedUser;
    }

    public function apps👷ListInstallationReposForAuthenticatedUser(): ListInstallationReposForAuthenticatedUser
    {
        if ($this->apps👷ListInstallationReposForAuthenticatedUser instanceof ListInstallationReposForAuthenticatedUser === false) {
            $this->apps👷ListInstallationReposForAuthenticatedUser = new ListInstallationReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories());
        }

        return $this->apps👷ListInstallationReposForAuthenticatedUser;
    }

    public function apps👷AddRepoToInstallationForAuthenticatedUser(): AddRepoToInstallationForAuthenticatedUser
    {
        if ($this->apps👷AddRepoToInstallationForAuthenticatedUser instanceof AddRepoToInstallationForAuthenticatedUser === false) {
            $this->apps👷AddRepoToInstallationForAuthenticatedUser = new AddRepoToInstallationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId());
        }

        return $this->apps👷AddRepoToInstallationForAuthenticatedUser;
    }

    public function apps👷RemoveRepoFromInstallationForAuthenticatedUser(): RemoveRepoFromInstallationForAuthenticatedUser
    {
        if ($this->apps👷RemoveRepoFromInstallationForAuthenticatedUser instanceof RemoveRepoFromInstallationForAuthenticatedUser === false) {
            $this->apps👷RemoveRepoFromInstallationForAuthenticatedUser = new RemoveRepoFromInstallationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId());
        }

        return $this->apps👷RemoveRepoFromInstallationForAuthenticatedUser;
    }

    public function interactions👷GetRestrictionsForAuthenticatedUser(): GetRestrictionsForAuthenticatedUser
    {
        if ($this->interactions👷GetRestrictionsForAuthenticatedUser instanceof GetRestrictionsForAuthenticatedUser === false) {
            $this->interactions👷GetRestrictionsForAuthenticatedUser = new GetRestrictionsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀InteractionLimits());
        }

        return $this->interactions👷GetRestrictionsForAuthenticatedUser;
    }

    public function interactions👷SetRestrictionsForAuthenticatedUser(): SetRestrictionsForAuthenticatedUser
    {
        if ($this->interactions👷SetRestrictionsForAuthenticatedUser instanceof SetRestrictionsForAuthenticatedUser === false) {
            $this->interactions👷SetRestrictionsForAuthenticatedUser = new SetRestrictionsForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀InteractionLimits());
        }

        return $this->interactions👷SetRestrictionsForAuthenticatedUser;
    }

    public function interactions👷RemoveRestrictionsForAuthenticatedUser(): RemoveRestrictionsForAuthenticatedUser
    {
        if ($this->interactions👷RemoveRestrictionsForAuthenticatedUser instanceof RemoveRestrictionsForAuthenticatedUser === false) {
            $this->interactions👷RemoveRestrictionsForAuthenticatedUser = new RemoveRestrictionsForAuthenticatedUser($this->browser, $this->authentication);
        }

        return $this->interactions👷RemoveRestrictionsForAuthenticatedUser;
    }

    public function issues👷ListForAuthenticatedUser(): \ApiClients\Client\GitHub\Internal\Operator\Issues\ListForAuthenticatedUser
    {
        if ($this->issues👷ListForAuthenticatedUser instanceof \ApiClients\Client\GitHub\Internal\Operator\Issues\ListForAuthenticatedUser === false) {
            $this->issues👷ListForAuthenticatedUser = new \ApiClients\Client\GitHub\Internal\Operator\Issues\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Issues());
        }

        return $this->issues👷ListForAuthenticatedUser;
    }

    public function users👷ListPublicSshKeysForAuthenticatedUser(): ListPublicSshKeysForAuthenticatedUser
    {
        if ($this->users👷ListPublicSshKeysForAuthenticatedUser instanceof ListPublicSshKeysForAuthenticatedUser === false) {
            $this->users👷ListPublicSshKeysForAuthenticatedUser = new ListPublicSshKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());
        }

        return $this->users👷ListPublicSshKeysForAuthenticatedUser;
    }

    public function users👷CreatePublicSshKeyForAuthenticatedUser(): CreatePublicSshKeyForAuthenticatedUser
    {
        if ($this->users👷CreatePublicSshKeyForAuthenticatedUser instanceof CreatePublicSshKeyForAuthenticatedUser === false) {
            $this->users👷CreatePublicSshKeyForAuthenticatedUser = new CreatePublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());
        }

        return $this->users👷CreatePublicSshKeyForAuthenticatedUser;
    }

    public function users👷GetPublicSshKeyForAuthenticatedUser(): GetPublicSshKeyForAuthenticatedUser
    {
        if ($this->users👷GetPublicSshKeyForAuthenticatedUser instanceof GetPublicSshKeyForAuthenticatedUser === false) {
            $this->users👷GetPublicSshKeyForAuthenticatedUser = new GetPublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys🌀KeyId());
        }

        return $this->users👷GetPublicSshKeyForAuthenticatedUser;
    }

    public function users👷DeletePublicSshKeyForAuthenticatedUser(): DeletePublicSshKeyForAuthenticatedUser
    {
        if ($this->users👷DeletePublicSshKeyForAuthenticatedUser instanceof DeletePublicSshKeyForAuthenticatedUser === false) {
            $this->users👷DeletePublicSshKeyForAuthenticatedUser = new DeletePublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys🌀KeyId());
        }

        return $this->users👷DeletePublicSshKeyForAuthenticatedUser;
    }

    public function apps👷ListSubscriptionsForAuthenticatedUser(): ListSubscriptionsForAuthenticatedUser
    {
        if ($this->apps👷ListSubscriptionsForAuthenticatedUser instanceof ListSubscriptionsForAuthenticatedUser === false) {
            $this->apps👷ListSubscriptionsForAuthenticatedUser = new ListSubscriptionsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀MarketplacePurchases());
        }

        return $this->apps👷ListSubscriptionsForAuthenticatedUser;
    }

    public function apps👷ListSubscriptionsForAuthenticatedUserStubbed(): ListSubscriptionsForAuthenticatedUserStubbed
    {
        if ($this->apps👷ListSubscriptionsForAuthenticatedUserStubbed instanceof ListSubscriptionsForAuthenticatedUserStubbed === false) {
            $this->apps👷ListSubscriptionsForAuthenticatedUserStubbed = new ListSubscriptionsForAuthenticatedUserStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀MarketplacePurchases🌀Stubbed());
        }

        return $this->apps👷ListSubscriptionsForAuthenticatedUserStubbed;
    }

    public function orgs👷ListMembershipsForAuthenticatedUser(): ListMembershipsForAuthenticatedUser
    {
        if ($this->orgs👷ListMembershipsForAuthenticatedUser instanceof ListMembershipsForAuthenticatedUser === false) {
            $this->orgs👷ListMembershipsForAuthenticatedUser = new ListMembershipsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs());
        }

        return $this->orgs👷ListMembershipsForAuthenticatedUser;
    }

    public function orgs👷GetMembershipForAuthenticatedUser(): GetMembershipForAuthenticatedUser
    {
        if ($this->orgs👷GetMembershipForAuthenticatedUser instanceof GetMembershipForAuthenticatedUser === false) {
            $this->orgs👷GetMembershipForAuthenticatedUser = new GetMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org());
        }

        return $this->orgs👷GetMembershipForAuthenticatedUser;
    }

    public function orgs👷UpdateMembershipForAuthenticatedUser(): UpdateMembershipForAuthenticatedUser
    {
        if ($this->orgs👷UpdateMembershipForAuthenticatedUser instanceof UpdateMembershipForAuthenticatedUser === false) {
            $this->orgs👷UpdateMembershipForAuthenticatedUser = new UpdateMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org());
        }

        return $this->orgs👷UpdateMembershipForAuthenticatedUser;
    }

    public function migrations👷ListForAuthenticatedUser(): \ApiClients\Client\GitHub\Internal\Operator\Migrations\ListForAuthenticatedUser
    {
        if ($this->migrations👷ListForAuthenticatedUser instanceof \ApiClients\Client\GitHub\Internal\Operator\Migrations\ListForAuthenticatedUser === false) {
            $this->migrations👷ListForAuthenticatedUser = new \ApiClients\Client\GitHub\Internal\Operator\Migrations\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations());
        }

        return $this->migrations👷ListForAuthenticatedUser;
    }

    public function migrations👷StartForAuthenticatedUser(): \ApiClients\Client\GitHub\Internal\Operator\Migrations\StartForAuthenticatedUser
    {
        if ($this->migrations👷StartForAuthenticatedUser instanceof \ApiClients\Client\GitHub\Internal\Operator\Migrations\StartForAuthenticatedUser === false) {
            $this->migrations👷StartForAuthenticatedUser = new \ApiClients\Client\GitHub\Internal\Operator\Migrations\StartForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations());
        }

        return $this->migrations👷StartForAuthenticatedUser;
    }

    public function migrations👷GetStatusForAuthenticatedUser(): GetStatusForAuthenticatedUser
    {
        if ($this->migrations👷GetStatusForAuthenticatedUser instanceof GetStatusForAuthenticatedUser === false) {
            $this->migrations👷GetStatusForAuthenticatedUser = new GetStatusForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId());
        }

        return $this->migrations👷GetStatusForAuthenticatedUser;
    }

    public function migrations👷GetArchiveForAuthenticatedUser(): GetArchiveForAuthenticatedUser
    {
        if ($this->migrations👷GetArchiveForAuthenticatedUser instanceof GetArchiveForAuthenticatedUser === false) {
            $this->migrations👷GetArchiveForAuthenticatedUser = new GetArchiveForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->migrations👷GetArchiveForAuthenticatedUser;
    }

    public function migrations👷DeleteArchiveForAuthenticatedUser(): DeleteArchiveForAuthenticatedUser
    {
        if ($this->migrations👷DeleteArchiveForAuthenticatedUser instanceof DeleteArchiveForAuthenticatedUser === false) {
            $this->migrations👷DeleteArchiveForAuthenticatedUser = new DeleteArchiveForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->migrations👷DeleteArchiveForAuthenticatedUser;
    }

    public function migrations👷UnlockRepoForAuthenticatedUser(): UnlockRepoForAuthenticatedUser
    {
        if ($this->migrations👷UnlockRepoForAuthenticatedUser instanceof UnlockRepoForAuthenticatedUser === false) {
            $this->migrations👷UnlockRepoForAuthenticatedUser = new UnlockRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock());
        }

        return $this->migrations👷UnlockRepoForAuthenticatedUser;
    }

    public function migrations👷ListReposForAuthenticatedUser(): ListReposForAuthenticatedUser
    {
        if ($this->migrations👷ListReposForAuthenticatedUser instanceof ListReposForAuthenticatedUser === false) {
            $this->migrations👷ListReposForAuthenticatedUser = new ListReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repositories());
        }

        return $this->migrations👷ListReposForAuthenticatedUser;
    }

    public function orgs👷ListForAuthenticatedUser(): \ApiClients\Client\GitHub\Internal\Operator\Orgs\ListForAuthenticatedUser
    {
        if ($this->orgs👷ListForAuthenticatedUser instanceof \ApiClients\Client\GitHub\Internal\Operator\Orgs\ListForAuthenticatedUser === false) {
            $this->orgs👷ListForAuthenticatedUser = new \ApiClients\Client\GitHub\Internal\Operator\Orgs\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Orgs());
        }

        return $this->orgs👷ListForAuthenticatedUser;
    }

    public function packages👷ListPackagesForAuthenticatedUser(): ListPackagesForAuthenticatedUser
    {
        if ($this->packages👷ListPackagesForAuthenticatedUser instanceof ListPackagesForAuthenticatedUser === false) {
            $this->packages👷ListPackagesForAuthenticatedUser = new ListPackagesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages());
        }

        return $this->packages👷ListPackagesForAuthenticatedUser;
    }

    public function packages👷GetPackageForAuthenticatedUser(): GetPackageForAuthenticatedUser
    {
        if ($this->packages👷GetPackageForAuthenticatedUser instanceof GetPackageForAuthenticatedUser === false) {
            $this->packages👷GetPackageForAuthenticatedUser = new GetPackageForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->packages👷GetPackageForAuthenticatedUser;
    }

    public function packages👷DeletePackageForAuthenticatedUser(): DeletePackageForAuthenticatedUser
    {
        if ($this->packages👷DeletePackageForAuthenticatedUser instanceof DeletePackageForAuthenticatedUser === false) {
            $this->packages👷DeletePackageForAuthenticatedUser = new DeletePackageForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->packages👷DeletePackageForAuthenticatedUser;
    }

    public function packages👷RestorePackageForAuthenticatedUser(): RestorePackageForAuthenticatedUser
    {
        if ($this->packages👷RestorePackageForAuthenticatedUser instanceof RestorePackageForAuthenticatedUser === false) {
            $this->packages👷RestorePackageForAuthenticatedUser = new RestorePackageForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Restore());
        }

        return $this->packages👷RestorePackageForAuthenticatedUser;
    }

    public function packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUser(): GetAllPackageVersionsForPackageOwnedByAuthenticatedUser
    {
        if ($this->packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUser instanceof GetAllPackageVersionsForPackageOwnedByAuthenticatedUser === false) {
            $this->packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUser = new GetAllPackageVersionsForPackageOwnedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions());
        }

        return $this->packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUser;
    }

    public function packages👷GetPackageVersionForAuthenticatedUser(): GetPackageVersionForAuthenticatedUser
    {
        if ($this->packages👷GetPackageVersionForAuthenticatedUser instanceof GetPackageVersionForAuthenticatedUser === false) {
            $this->packages👷GetPackageVersionForAuthenticatedUser = new GetPackageVersionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->packages👷GetPackageVersionForAuthenticatedUser;
    }

    public function packages👷DeletePackageVersionForAuthenticatedUser(): DeletePackageVersionForAuthenticatedUser
    {
        if ($this->packages👷DeletePackageVersionForAuthenticatedUser instanceof DeletePackageVersionForAuthenticatedUser === false) {
            $this->packages👷DeletePackageVersionForAuthenticatedUser = new DeletePackageVersionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->packages👷DeletePackageVersionForAuthenticatedUser;
    }

    public function packages👷RestorePackageVersionForAuthenticatedUser(): RestorePackageVersionForAuthenticatedUser
    {
        if ($this->packages👷RestorePackageVersionForAuthenticatedUser instanceof RestorePackageVersionForAuthenticatedUser === false) {
            $this->packages👷RestorePackageVersionForAuthenticatedUser = new RestorePackageVersionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore());
        }

        return $this->packages👷RestorePackageVersionForAuthenticatedUser;
    }

    public function projects👷CreateForAuthenticatedUser(): \ApiClients\Client\GitHub\Internal\Operator\Projects\CreateForAuthenticatedUser
    {
        if ($this->projects👷CreateForAuthenticatedUser instanceof \ApiClients\Client\GitHub\Internal\Operator\Projects\CreateForAuthenticatedUser === false) {
            $this->projects👷CreateForAuthenticatedUser = new \ApiClients\Client\GitHub\Internal\Operator\Projects\CreateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Projects());
        }

        return $this->projects👷CreateForAuthenticatedUser;
    }

    public function users👷ListPublicEmailsForAuthenticatedUser(): ListPublicEmailsForAuthenticatedUser
    {
        if ($this->users👷ListPublicEmailsForAuthenticatedUser instanceof ListPublicEmailsForAuthenticatedUser === false) {
            $this->users👷ListPublicEmailsForAuthenticatedUser = new ListPublicEmailsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀PublicEmails());
        }

        return $this->users👷ListPublicEmailsForAuthenticatedUser;
    }

    public function repos👷ListForAuthenticatedUser(): \ApiClients\Client\GitHub\Internal\Operator\Repos\ListForAuthenticatedUser
    {
        if ($this->repos👷ListForAuthenticatedUser instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\ListForAuthenticatedUser === false) {
            $this->repos👷ListForAuthenticatedUser = new \ApiClients\Client\GitHub\Internal\Operator\Repos\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Repos());
        }

        return $this->repos👷ListForAuthenticatedUser;
    }

    public function repos👷CreateForAuthenticatedUser(): \ApiClients\Client\GitHub\Internal\Operator\Repos\CreateForAuthenticatedUser
    {
        if ($this->repos👷CreateForAuthenticatedUser instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\CreateForAuthenticatedUser === false) {
            $this->repos👷CreateForAuthenticatedUser = new \ApiClients\Client\GitHub\Internal\Operator\Repos\CreateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Repos());
        }

        return $this->repos👷CreateForAuthenticatedUser;
    }

    public function repos👷ListInvitationsForAuthenticatedUser(): ListInvitationsForAuthenticatedUser
    {
        if ($this->repos👷ListInvitationsForAuthenticatedUser instanceof ListInvitationsForAuthenticatedUser === false) {
            $this->repos👷ListInvitationsForAuthenticatedUser = new ListInvitationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations());
        }

        return $this->repos👷ListInvitationsForAuthenticatedUser;
    }

    public function repos👷DeclineInvitationForAuthenticatedUser(): DeclineInvitationForAuthenticatedUser
    {
        if ($this->repos👷DeclineInvitationForAuthenticatedUser instanceof DeclineInvitationForAuthenticatedUser === false) {
            $this->repos👷DeclineInvitationForAuthenticatedUser = new DeclineInvitationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations🌀InvitationId());
        }

        return $this->repos👷DeclineInvitationForAuthenticatedUser;
    }

    public function repos👷AcceptInvitationForAuthenticatedUser(): AcceptInvitationForAuthenticatedUser
    {
        if ($this->repos👷AcceptInvitationForAuthenticatedUser instanceof AcceptInvitationForAuthenticatedUser === false) {
            $this->repos👷AcceptInvitationForAuthenticatedUser = new AcceptInvitationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations🌀InvitationId());
        }

        return $this->repos👷AcceptInvitationForAuthenticatedUser;
    }

    public function users👷ListSocialAccountsForAuthenticatedUser(): ListSocialAccountsForAuthenticatedUser
    {
        if ($this->users👷ListSocialAccountsForAuthenticatedUser instanceof ListSocialAccountsForAuthenticatedUser === false) {
            $this->users👷ListSocialAccountsForAuthenticatedUser = new ListSocialAccountsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts());
        }

        return $this->users👷ListSocialAccountsForAuthenticatedUser;
    }

    public function users👷AddSocialAccountForAuthenticatedUser(): AddSocialAccountForAuthenticatedUser
    {
        if ($this->users👷AddSocialAccountForAuthenticatedUser instanceof AddSocialAccountForAuthenticatedUser === false) {
            $this->users👷AddSocialAccountForAuthenticatedUser = new AddSocialAccountForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts());
        }

        return $this->users👷AddSocialAccountForAuthenticatedUser;
    }

    public function users👷DeleteSocialAccountForAuthenticatedUser(): DeleteSocialAccountForAuthenticatedUser
    {
        if ($this->users👷DeleteSocialAccountForAuthenticatedUser instanceof DeleteSocialAccountForAuthenticatedUser === false) {
            $this->users👷DeleteSocialAccountForAuthenticatedUser = new DeleteSocialAccountForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts());
        }

        return $this->users👷DeleteSocialAccountForAuthenticatedUser;
    }

    public function users👷ListSshSigningKeysForAuthenticatedUser(): ListSshSigningKeysForAuthenticatedUser
    {
        if ($this->users👷ListSshSigningKeysForAuthenticatedUser instanceof ListSshSigningKeysForAuthenticatedUser === false) {
            $this->users👷ListSshSigningKeysForAuthenticatedUser = new ListSshSigningKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys());
        }

        return $this->users👷ListSshSigningKeysForAuthenticatedUser;
    }

    public function users👷CreateSshSigningKeyForAuthenticatedUser(): CreateSshSigningKeyForAuthenticatedUser
    {
        if ($this->users👷CreateSshSigningKeyForAuthenticatedUser instanceof CreateSshSigningKeyForAuthenticatedUser === false) {
            $this->users👷CreateSshSigningKeyForAuthenticatedUser = new CreateSshSigningKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys());
        }

        return $this->users👷CreateSshSigningKeyForAuthenticatedUser;
    }

    public function users👷GetSshSigningKeyForAuthenticatedUser(): GetSshSigningKeyForAuthenticatedUser
    {
        if ($this->users👷GetSshSigningKeyForAuthenticatedUser instanceof GetSshSigningKeyForAuthenticatedUser === false) {
            $this->users👷GetSshSigningKeyForAuthenticatedUser = new GetSshSigningKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys🌀SshSigningKeyId());
        }

        return $this->users👷GetSshSigningKeyForAuthenticatedUser;
    }

    public function users👷DeleteSshSigningKeyForAuthenticatedUser(): DeleteSshSigningKeyForAuthenticatedUser
    {
        if ($this->users👷DeleteSshSigningKeyForAuthenticatedUser instanceof DeleteSshSigningKeyForAuthenticatedUser === false) {
            $this->users👷DeleteSshSigningKeyForAuthenticatedUser = new DeleteSshSigningKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys🌀SshSigningKeyId());
        }

        return $this->users👷DeleteSshSigningKeyForAuthenticatedUser;
    }

    public function activity👷ListReposStarredByAuthenticatedUser(): ListReposStarredByAuthenticatedUser
    {
        if ($this->activity👷ListReposStarredByAuthenticatedUser instanceof ListReposStarredByAuthenticatedUser === false) {
            $this->activity👷ListReposStarredByAuthenticatedUser = new ListReposStarredByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred());
        }

        return $this->activity👷ListReposStarredByAuthenticatedUser;
    }

    public function activity👷CheckRepoIsStarredByAuthenticatedUser(): CheckRepoIsStarredByAuthenticatedUser
    {
        if ($this->activity👷CheckRepoIsStarredByAuthenticatedUser instanceof CheckRepoIsStarredByAuthenticatedUser === false) {
            $this->activity👷CheckRepoIsStarredByAuthenticatedUser = new CheckRepoIsStarredByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo());
        }

        return $this->activity👷CheckRepoIsStarredByAuthenticatedUser;
    }

    public function activity👷StarRepoForAuthenticatedUser(): StarRepoForAuthenticatedUser
    {
        if ($this->activity👷StarRepoForAuthenticatedUser instanceof StarRepoForAuthenticatedUser === false) {
            $this->activity👷StarRepoForAuthenticatedUser = new StarRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo());
        }

        return $this->activity👷StarRepoForAuthenticatedUser;
    }

    public function activity👷UnstarRepoForAuthenticatedUser(): UnstarRepoForAuthenticatedUser
    {
        if ($this->activity👷UnstarRepoForAuthenticatedUser instanceof UnstarRepoForAuthenticatedUser === false) {
            $this->activity👷UnstarRepoForAuthenticatedUser = new UnstarRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo());
        }

        return $this->activity👷UnstarRepoForAuthenticatedUser;
    }

    public function activity👷ListWatchedReposForAuthenticatedUser(): ListWatchedReposForAuthenticatedUser
    {
        if ($this->activity👷ListWatchedReposForAuthenticatedUser instanceof ListWatchedReposForAuthenticatedUser === false) {
            $this->activity👷ListWatchedReposForAuthenticatedUser = new ListWatchedReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Subscriptions());
        }

        return $this->activity👷ListWatchedReposForAuthenticatedUser;
    }

    public function teams👷ListForAuthenticatedUser(): \ApiClients\Client\GitHub\Internal\Operator\Teams\ListForAuthenticatedUser
    {
        if ($this->teams👷ListForAuthenticatedUser instanceof \ApiClients\Client\GitHub\Internal\Operator\Teams\ListForAuthenticatedUser === false) {
            $this->teams👷ListForAuthenticatedUser = new \ApiClients\Client\GitHub\Internal\Operator\Teams\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Teams());
        }

        return $this->teams👷ListForAuthenticatedUser;
    }

    public function users👷GetById(): GetById
    {
        if ($this->users👷GetById instanceof GetById === false) {
            $this->users👷GetById = new GetById($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀AccountId());
        }

        return $this->users👷GetById;
    }

    public function users👷List_(): \ApiClients\Client\GitHub\Internal\Operator\Users\List_
    {
        if ($this->users👷List_ instanceof \ApiClients\Client\GitHub\Internal\Operator\Users\List_ === false) {
            $this->users👷List_ = new \ApiClients\Client\GitHub\Internal\Operator\Users\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users());
        }

        return $this->users👷List_;
    }

    public function users👷GetByUsername(): GetByUsername
    {
        if ($this->users👷GetByUsername instanceof GetByUsername === false) {
            $this->users👷GetByUsername = new GetByUsername($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username());
        }

        return $this->users👷GetByUsername;
    }

    public function users👷ListAttestations(): \ApiClients\Client\GitHub\Internal\Operator\Users\ListAttestations
    {
        if ($this->users👷ListAttestations instanceof \ApiClients\Client\GitHub\Internal\Operator\Users\ListAttestations === false) {
            $this->users👷ListAttestations = new \ApiClients\Client\GitHub\Internal\Operator\Users\ListAttestations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Attestations🌀SubjectDigest());
        }

        return $this->users👷ListAttestations;
    }

    public function packages👷ListDockerMigrationConflictingPackagesForUser(): ListDockerMigrationConflictingPackagesForUser
    {
        if ($this->packages👷ListDockerMigrationConflictingPackagesForUser instanceof ListDockerMigrationConflictingPackagesForUser === false) {
            $this->packages👷ListDockerMigrationConflictingPackagesForUser = new ListDockerMigrationConflictingPackagesForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Docker🌀Conflicts());
        }

        return $this->packages👷ListDockerMigrationConflictingPackagesForUser;
    }

    public function activity👷ListEventsForAuthenticatedUser(): ListEventsForAuthenticatedUser
    {
        if ($this->activity👷ListEventsForAuthenticatedUser instanceof ListEventsForAuthenticatedUser === false) {
            $this->activity👷ListEventsForAuthenticatedUser = new ListEventsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events());
        }

        return $this->activity👷ListEventsForAuthenticatedUser;
    }

    public function activity👷ListOrgEventsForAuthenticatedUser(): ListOrgEventsForAuthenticatedUser
    {
        if ($this->activity👷ListOrgEventsForAuthenticatedUser instanceof ListOrgEventsForAuthenticatedUser === false) {
            $this->activity👷ListOrgEventsForAuthenticatedUser = new ListOrgEventsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events🌀Orgs🌀Org());
        }

        return $this->activity👷ListOrgEventsForAuthenticatedUser;
    }

    public function activity👷ListPublicEventsForUser(): ListPublicEventsForUser
    {
        if ($this->activity👷ListPublicEventsForUser instanceof ListPublicEventsForUser === false) {
            $this->activity👷ListPublicEventsForUser = new ListPublicEventsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events🌀Public_());
        }

        return $this->activity👷ListPublicEventsForUser;
    }

    public function users👷ListFollowersForUser(): ListFollowersForUser
    {
        if ($this->users👷ListFollowersForUser instanceof ListFollowersForUser === false) {
            $this->users👷ListFollowersForUser = new ListFollowersForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Followers());
        }

        return $this->users👷ListFollowersForUser;
    }

    public function users👷ListFollowingForUser(): ListFollowingForUser
    {
        if ($this->users👷ListFollowingForUser instanceof ListFollowingForUser === false) {
            $this->users👷ListFollowingForUser = new ListFollowingForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Following());
        }

        return $this->users👷ListFollowingForUser;
    }

    public function users👷CheckFollowingForUser(): CheckFollowingForUser
    {
        if ($this->users👷CheckFollowingForUser instanceof CheckFollowingForUser === false) {
            $this->users👷CheckFollowingForUser = new CheckFollowingForUser($this->browser, $this->authentication);
        }

        return $this->users👷CheckFollowingForUser;
    }

    public function gists👷ListForUser(): ListForUser
    {
        if ($this->gists👷ListForUser instanceof ListForUser === false) {
            $this->gists👷ListForUser = new ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Gists());
        }

        return $this->gists👷ListForUser;
    }

    public function users👷ListGpgKeysForUser(): ListGpgKeysForUser
    {
        if ($this->users👷ListGpgKeysForUser instanceof ListGpgKeysForUser === false) {
            $this->users👷ListGpgKeysForUser = new ListGpgKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀GpgKeys());
        }

        return $this->users👷ListGpgKeysForUser;
    }

    public function users👷GetContextForUser(): GetContextForUser
    {
        if ($this->users👷GetContextForUser instanceof GetContextForUser === false) {
            $this->users👷GetContextForUser = new GetContextForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Hovercard());
        }

        return $this->users👷GetContextForUser;
    }

    public function apps👷GetUserInstallation(): GetUserInstallation
    {
        if ($this->apps👷GetUserInstallation instanceof GetUserInstallation === false) {
            $this->apps👷GetUserInstallation = new GetUserInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Installation());
        }

        return $this->apps👷GetUserInstallation;
    }

    public function users👷ListPublicKeysForUser(): ListPublicKeysForUser
    {
        if ($this->users👷ListPublicKeysForUser instanceof ListPublicKeysForUser === false) {
            $this->users👷ListPublicKeysForUser = new ListPublicKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Keys());
        }

        return $this->users👷ListPublicKeysForUser;
    }

    public function orgs👷ListForUser(): \ApiClients\Client\GitHub\Internal\Operator\Orgs\ListForUser
    {
        if ($this->orgs👷ListForUser instanceof \ApiClients\Client\GitHub\Internal\Operator\Orgs\ListForUser === false) {
            $this->orgs👷ListForUser = new \ApiClients\Client\GitHub\Internal\Operator\Orgs\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Orgs());
        }

        return $this->orgs👷ListForUser;
    }

    public function packages👷ListPackagesForUser(): ListPackagesForUser
    {
        if ($this->packages👷ListPackagesForUser instanceof ListPackagesForUser === false) {
            $this->packages👷ListPackagesForUser = new ListPackagesForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages());
        }

        return $this->packages👷ListPackagesForUser;
    }

    public function packages👷GetPackageForUser(): GetPackageForUser
    {
        if ($this->packages👷GetPackageForUser instanceof GetPackageForUser === false) {
            $this->packages👷GetPackageForUser = new GetPackageForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->packages👷GetPackageForUser;
    }

    public function packages👷DeletePackageForUser(): DeletePackageForUser
    {
        if ($this->packages👷DeletePackageForUser instanceof DeletePackageForUser === false) {
            $this->packages👷DeletePackageForUser = new DeletePackageForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->packages👷DeletePackageForUser;
    }

    public function packages👷RestorePackageForUser(): RestorePackageForUser
    {
        if ($this->packages👷RestorePackageForUser instanceof RestorePackageForUser === false) {
            $this->packages👷RestorePackageForUser = new RestorePackageForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Restore());
        }

        return $this->packages👷RestorePackageForUser;
    }

    public function packages👷GetAllPackageVersionsForPackageOwnedByUser(): GetAllPackageVersionsForPackageOwnedByUser
    {
        if ($this->packages👷GetAllPackageVersionsForPackageOwnedByUser instanceof GetAllPackageVersionsForPackageOwnedByUser === false) {
            $this->packages👷GetAllPackageVersionsForPackageOwnedByUser = new GetAllPackageVersionsForPackageOwnedByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions());
        }

        return $this->packages👷GetAllPackageVersionsForPackageOwnedByUser;
    }

    public function packages👷GetPackageVersionForUser(): GetPackageVersionForUser
    {
        if ($this->packages👷GetPackageVersionForUser instanceof GetPackageVersionForUser === false) {
            $this->packages👷GetPackageVersionForUser = new GetPackageVersionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->packages👷GetPackageVersionForUser;
    }

    public function packages👷DeletePackageVersionForUser(): DeletePackageVersionForUser
    {
        if ($this->packages👷DeletePackageVersionForUser instanceof DeletePackageVersionForUser === false) {
            $this->packages👷DeletePackageVersionForUser = new DeletePackageVersionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->packages👷DeletePackageVersionForUser;
    }

    public function packages👷RestorePackageVersionForUser(): RestorePackageVersionForUser
    {
        if ($this->packages👷RestorePackageVersionForUser instanceof RestorePackageVersionForUser === false) {
            $this->packages👷RestorePackageVersionForUser = new RestorePackageVersionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore());
        }

        return $this->packages👷RestorePackageVersionForUser;
    }

    public function projects👷ListForUser(): \ApiClients\Client\GitHub\Internal\Operator\Projects\ListForUser
    {
        if ($this->projects👷ListForUser instanceof \ApiClients\Client\GitHub\Internal\Operator\Projects\ListForUser === false) {
            $this->projects👷ListForUser = new \ApiClients\Client\GitHub\Internal\Operator\Projects\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Projects());
        }

        return $this->projects👷ListForUser;
    }

    public function activity👷ListReceivedEventsForUser(): ListReceivedEventsForUser
    {
        if ($this->activity👷ListReceivedEventsForUser instanceof ListReceivedEventsForUser === false) {
            $this->activity👷ListReceivedEventsForUser = new ListReceivedEventsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents());
        }

        return $this->activity👷ListReceivedEventsForUser;
    }

    public function activity👷ListReceivedPublicEventsForUser(): ListReceivedPublicEventsForUser
    {
        if ($this->activity👷ListReceivedPublicEventsForUser instanceof ListReceivedPublicEventsForUser === false) {
            $this->activity👷ListReceivedPublicEventsForUser = new ListReceivedPublicEventsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents🌀Public_());
        }

        return $this->activity👷ListReceivedPublicEventsForUser;
    }

    public function repos👷ListForUser(): \ApiClients\Client\GitHub\Internal\Operator\Repos\ListForUser
    {
        if ($this->repos👷ListForUser instanceof \ApiClients\Client\GitHub\Internal\Operator\Repos\ListForUser === false) {
            $this->repos👷ListForUser = new \ApiClients\Client\GitHub\Internal\Operator\Repos\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Repos());
        }

        return $this->repos👷ListForUser;
    }

    public function billing👷GetGithubActionsBillingUser(): GetGithubActionsBillingUser
    {
        if ($this->billing👷GetGithubActionsBillingUser instanceof GetGithubActionsBillingUser === false) {
            $this->billing👷GetGithubActionsBillingUser = new GetGithubActionsBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Actions());
        }

        return $this->billing👷GetGithubActionsBillingUser;
    }

    public function billing👷GetGithubPackagesBillingUser(): GetGithubPackagesBillingUser
    {
        if ($this->billing👷GetGithubPackagesBillingUser instanceof GetGithubPackagesBillingUser === false) {
            $this->billing👷GetGithubPackagesBillingUser = new GetGithubPackagesBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Packages());
        }

        return $this->billing👷GetGithubPackagesBillingUser;
    }

    public function billing👷GetSharedStorageBillingUser(): GetSharedStorageBillingUser
    {
        if ($this->billing👷GetSharedStorageBillingUser instanceof GetSharedStorageBillingUser === false) {
            $this->billing👷GetSharedStorageBillingUser = new GetSharedStorageBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage());
        }

        return $this->billing👷GetSharedStorageBillingUser;
    }

    public function users👷ListSocialAccountsForUser(): ListSocialAccountsForUser
    {
        if ($this->users👷ListSocialAccountsForUser instanceof ListSocialAccountsForUser === false) {
            $this->users👷ListSocialAccountsForUser = new ListSocialAccountsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀SocialAccounts());
        }

        return $this->users👷ListSocialAccountsForUser;
    }

    public function users👷ListSshSigningKeysForUser(): ListSshSigningKeysForUser
    {
        if ($this->users👷ListSshSigningKeysForUser instanceof ListSshSigningKeysForUser === false) {
            $this->users👷ListSshSigningKeysForUser = new ListSshSigningKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀SshSigningKeys());
        }

        return $this->users👷ListSshSigningKeysForUser;
    }

    public function activity👷ListReposStarredByUser(): ListReposStarredByUser
    {
        if ($this->activity👷ListReposStarredByUser instanceof ListReposStarredByUser === false) {
            $this->activity👷ListReposStarredByUser = new ListReposStarredByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Starred());
        }

        return $this->activity👷ListReposStarredByUser;
    }

    public function activity👷ListReposWatchedByUser(): ListReposWatchedByUser
    {
        if ($this->activity👷ListReposWatchedByUser instanceof ListReposWatchedByUser === false) {
            $this->activity👷ListReposWatchedByUser = new ListReposWatchedByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Subscriptions());
        }

        return $this->activity👷ListReposWatchedByUser;
    }

    public function meta👷GetAllVersions(): GetAllVersions
    {
        if ($this->meta👷GetAllVersions instanceof GetAllVersions === false) {
            $this->meta👷GetAllVersions = new GetAllVersions($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Versions());
        }

        return $this->meta👷GetAllVersions;
    }

    public function meta👷GetZen(): GetZen
    {
        if ($this->meta👷GetZen instanceof GetZen === false) {
            $this->meta👷GetZen = new GetZen($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Zen());
        }

        return $this->meta👷GetZen;
    }
}
