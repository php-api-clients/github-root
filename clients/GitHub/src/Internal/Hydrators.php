<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Advisories;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Advisories\GhsaId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\App;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\App\Hook\Config;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\App\Hook\Deliveries;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\App\Hook\Deliveries\DeliveryId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\App\Hook\Deliveries\DeliveryId\Attempts;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\App\InstallationRequests;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\App\Installations;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\App\Installations\InstallationId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\App\Installations\InstallationId\AccessTokens;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\App\Installations\InstallationId\Suspended;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Applications\ClientId\Grant;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Applications\ClientId\Token;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Applications\ClientId\Token\Scoped;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\AppManifests\Code\Conversions;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Apps\AppSlug;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Assignments\AssignmentId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Assignments\AssignmentId\AcceptedAssignments;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Assignments\AssignmentId\Grades;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Classrooms;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Classrooms\ClassroomId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Classrooms\ClassroomId\Assignments;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\CodesOfConduct;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\CodesOfConduct\Key;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Emojis;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Enterprises\Enterprise\Copilot\Billing\Seats;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Enterprises\Enterprise\Copilot\Metrics;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Enterprises\Enterprise\Copilot\Usage;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Enterprises\Enterprise\Dependabot\Alerts;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Events;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Feeds;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Gists;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Gists\GistId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Gists\GistId\Comments;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Gists\GistId\Comments\CommentId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Gists\GistId\Commits;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Gists\GistId\Forks;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Gists\GistId\Sha;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Gists\GistId\Star;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Gists\Public_;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Gists\Starred;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Gitignore\Templates;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Gitignore\Templates\Name;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Installation\Repositories;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Issues;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Licenses;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Licenses\License;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Markdown;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Markdown\Raw;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\MarketplaceListing\Accounts\AccountId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\MarketplaceListing\Plans;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\MarketplaceListing\Plans\PlanId\Accounts;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Meta;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Notifications;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Notifications\Threads\ThreadId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Notifications\Threads\ThreadId\Subscription;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Octocat;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Organizations;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Cache\UsageByRepository;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Oidc\Customization\Sub;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories\RepositoryId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\SelectedActions;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\Workflow;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\RunnerGroups;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Runners;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Runners\RunnerId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\Downloads;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\GenerateJitconfig;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RegistrationToken;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RemoveToken;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\PublicKey;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Variables;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Attestations\SubjectDigest;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Blocks;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Blocks\Username;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations\ConfigurationId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations\ConfigurationId\Attach;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations\Defaults;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations\Detach;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Access;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Access\SelectedUsers;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedTeams;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Docker\Conflicts;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\FailedInvitations;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Pings;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\RouteStats\ActorType\ActorId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\SubjectStats;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\SummaryStats;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\SummaryStats\Users\UserId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\TimeStats;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Installation;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\InteractionLimits;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Invitations;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Invitations\InvitationId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Invitations\InvitationId\Teams;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Members;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces\CodespaceName;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces\CodespaceName\Stop;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Members\Username\Copilot;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Migrations;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Archive;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repos\RepoName\Lock;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId\Users;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Teams\TeamSlug;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Teams\TeamSlug\RoleId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OutsideCollaborators;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Packages;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Restore;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Projects;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Properties\Schema;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Properties\Schema\CustomPropertyName;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Properties\Values;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\PublicMembers;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Repos;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Rulesets;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Rulesets\RulesetId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Rulesets\RuleSuites;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Rulesets\RuleSuites\RuleSuiteId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\SecurityAdvisories;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\SecurityManagers;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\SecurityProduct\Enablement;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\Actions;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\SharedStorage;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions\ReactionId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects\ProjectId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos\Owner\Repo;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\Columns\Cards\CardId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\Columns\Cards\CardId\Moves;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\Columns\ColumnId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\Columns\ColumnId\Cards;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\ProjectId\Collaborators;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\ProjectId\Collaborators\Username\Permission;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\ProjectId\Columns;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\RateLimit;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId\ArchiveFormat;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Caches;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Caches\CacheId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId\Logs;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId\Rerun;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationSecrets;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationVariables;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Approvals;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Approve;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber\Jobs;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Cancel;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\DeploymentProtectionRule;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\ForceCancel;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\PendingDeployments;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\RerunFailedJobs;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Timing;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Disable;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Dispatches;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Enable;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Activity;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Assignees;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Assignees\Assignee;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Attestations;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Autolinks;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Autolinks\AutolinkId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\AutomatedSecurityFixes;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\EnforceAdmins;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredPullRequestReviews;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredSignatures;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks\Contexts;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Apps;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Rename;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Annotations;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Rerequest;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\Preferences;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codeowners\Errors;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber\Instances;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses\AnalysisId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases\Language;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\VariantAnalyses;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\VariantAnalyses\CodeqlVariantAnalysisId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\VariantAnalyses\CodeqlVariantAnalysisId\Repos\RepoOwner\RepoName;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\DefaultSetup;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs\SarifId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeSecurityConfiguration;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Devcontainers;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Machines;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\New_;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\PermissionsCheck;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\BranchesWhereHead;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Pulls;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Status;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Statuses;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Community\Profile;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Compare\Basehead;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Contents\Path;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Contributors;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Sbom;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Snapshots;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses\StatusId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentBranchPolicies;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentBranchPolicies\BranchPolicyId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules\ProtectionRuleId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Blobs;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Blobs\FileSha;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Commits\CommitSha;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Refs;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Tags;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Tags\TagSha;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Trees;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Trees\TreeSha;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Tests;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Import;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Import\Authors;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Import\Authors\AuthorId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Import\LargeFiles;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Import\Lfs;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Events\EventId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\SubIssue;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\SubIssues;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\SubIssues\Priority;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Timeline;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Keys;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Keys\KeyId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Languages;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Merges;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\MergeUpstream;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pages;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Builds;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\BuildId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\Latest;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments\PagesDeploymentId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Health;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\PrivateVulnerabilityReporting;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments\CommentId\Replies;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Files;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Merge;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\RequestedReviewers;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Dismissals;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\UpdateBranch;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Readme;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Readme\Dir;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\GenerateNotes;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Assets;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Tags\Tag;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber\Locations;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\PushProtectionBypasses;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\ScanHistory;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId\Cve;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\Reports;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Stargazers;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\CodeFrequency;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\CommitActivity;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\Participation;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\PunchCard;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Subscribers;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Tags\Protection\TagProtectionId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Topics;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Clones;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Popular\Paths;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Popular\Referrers;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Views;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Transfer;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\VulnerabilityAlerts;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\TemplateOwner\TemplateRepo\Generate;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Root;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Code;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Exports;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Exports\ExportId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Publish;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Start;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Email\Visibility;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Emails;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Followers;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Following;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\GpgKeys;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\GpgKeys\GpgKeyId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\MarketplacePurchases;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\MarketplacePurchases\Stubbed;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Memberships\Orgs;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\PublicEmails;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\RepositoryInvitations;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\SocialAccounts;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\SshSigningKeys;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\SshSigningKeys\SshSigningKeyId;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Subscriptions;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Following\TargetUser;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Hovercard;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\ReceivedEvents;
use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Zen;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use Generator;

final class Hydrators implements ObjectMapper
{
    private Root|null $operation🌀Root                                                                                                                                                                                                                 = null;
    private Advisories|null $operation🌀Advisories                                                                                                                                                                                                     = null;
    private GhsaId|null $operation🌀Advisories🌀GhsaId                                                                                                                                                                                                  = null;
    private App|null $operation🌀App                                                                                                                                                                                                                   = null;
    private Conversions|null $operation🌀AppManifests🌀Code🌀Conversions                                                                                                                                                                                 = null;
    private Config|null $operation🌀App🌀Hook🌀Config                                                                                                                                                                                                    = null;
    private Deliveries|null $operation🌀App🌀Hook🌀Deliveries                                                                                                                                                                                            = null;
    private DeliveryId|null $operation🌀App🌀Hook🌀Deliveries🌀DeliveryId                                                                                                                                                                                 = null;
    private Attempts|null $operation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts                                                                                                                                                                          = null;
    private InstallationRequests|null $operation🌀App🌀InstallationRequests                                                                                                                                                                             = null;
    private Installations|null $operation🌀App🌀Installations                                                                                                                                                                                           = null;
    private InstallationId|null $operation🌀App🌀Installations🌀InstallationId                                                                                                                                                                           = null;
    private AccessTokens|null $operation🌀App🌀Installations🌀InstallationId🌀AccessTokens                                                                                                                                                                = null;
    private Suspended|null $operation🌀App🌀Installations🌀InstallationId🌀Suspended                                                                                                                                                                      = null;
    private Grant|null $operation🌀Applications🌀ClientId🌀Grant                                                                                                                                                                                         = null;
    private Token|null $operation🌀Applications🌀ClientId🌀Token                                                                                                                                                                                         = null;
    private Scoped|null $operation🌀Applications🌀ClientId🌀Token🌀Scoped                                                                                                                                                                                 = null;
    private AppSlug|null $operation🌀Apps🌀AppSlug                                                                                                                                                                                                      = null;
    private AssignmentId|null $operation🌀Assignments🌀AssignmentId                                                                                                                                                                                     = null;
    private AcceptedAssignments|null $operation🌀Assignments🌀AssignmentId🌀AcceptedAssignments                                                                                                                                                          = null;
    private Grades|null $operation🌀Assignments🌀AssignmentId🌀Grades                                                                                                                                                                                    = null;
    private Classrooms|null $operation🌀Classrooms                                                                                                                                                                                                     = null;
    private ClassroomId|null $operation🌀Classrooms🌀ClassroomId                                                                                                                                                                                        = null;
    private Assignments|null $operation🌀Classrooms🌀ClassroomId🌀Assignments                                                                                                                                                                            = null;
    private CodesOfConduct|null $operation🌀CodesOfConduct                                                                                                                                                                                             = null;
    private Key|null $operation🌀CodesOfConduct🌀Key                                                                                                                                                                                                    = null;
    private Emojis|null $operation🌀Emojis                                                                                                                                                                                                             = null;
    private Seats|null $operation🌀Enterprises🌀Enterprise🌀Copilot🌀Billing🌀Seats                                                                                                                                                                        = null;
    private Metrics|null $operation🌀Enterprises🌀Enterprise🌀Copilot🌀Metrics                                                                                                                                                                            = null;
    private Usage|null $operation🌀Enterprises🌀Enterprise🌀Copilot🌀Usage                                                                                                                                                                                = null;
    private Alerts|null $operation🌀Enterprises🌀Enterprise🌀Dependabot🌀Alerts                                                                                                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Enterprises\Enterprise\SecretScanning\Alerts|null $operation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Enterprises\Enterprise\Team\TeamSlug\Copilot\Metrics|null $operation🌀Enterprises🌀Enterprise🌀Team🌀TeamSlug🌀Copilot🌀Metrics                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Enterprises\Enterprise\Team\TeamSlug\Copilot\Usage|null $operation🌀Enterprises🌀Enterprise🌀Team🌀TeamSlug🌀Copilot🌀Usage                                                               = null;
    private Events|null $operation🌀Events                                                                                                                                                                                                             = null;
    private Feeds|null $operation🌀Feeds                                                                                                                                                                                                               = null;
    private Gists|null $operation🌀Gists                                                                                                                                                                                                               = null;
    private Public_|null $operation🌀Gists🌀Public_                                                                                                                                                                                                     = null;
    private Starred|null $operation🌀Gists🌀Starred                                                                                                                                                                                                     = null;
    private GistId|null $operation🌀Gists🌀GistId                                                                                                                                                                                                       = null;
    private Comments|null $operation🌀Gists🌀GistId🌀Comments                                                                                                                                                                                            = null;
    private CommentId|null $operation🌀Gists🌀GistId🌀Comments🌀CommentId                                                                                                                                                                                 = null;
    private Commits|null $operation🌀Gists🌀GistId🌀Commits                                                                                                                                                                                              = null;
    private Forks|null $operation🌀Gists🌀GistId🌀Forks                                                                                                                                                                                                  = null;
    private Star|null $operation🌀Gists🌀GistId🌀Star                                                                                                                                                                                                    = null;
    private Sha|null $operation🌀Gists🌀GistId🌀Sha                                                                                                                                                                                                      = null;
    private Templates|null $operation🌀Gitignore🌀Templates                                                                                                                                                                                             = null;
    private Name|null $operation🌀Gitignore🌀Templates🌀Name                                                                                                                                                                                             = null;
    private Repositories|null $operation🌀Installation🌀Repositories                                                                                                                                                                                    = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Installation\Token|null $operation🌀Installation🌀Token                                                                                                                               = null;
    private Issues|null $operation🌀Issues                                                                                                                                                                                                             = null;
    private Licenses|null $operation🌀Licenses                                                                                                                                                                                                         = null;
    private License|null $operation🌀Licenses🌀License                                                                                                                                                                                                  = null;
    private Markdown|null $operation🌀Markdown                                                                                                                                                                                                         = null;
    private Raw|null $operation🌀Markdown🌀Raw                                                                                                                                                                                                          = null;
    private AccountId|null $operation🌀MarketplaceListing🌀Accounts🌀AccountId                                                                                                                                                                           = null;
    private Plans|null $operation🌀MarketplaceListing🌀Plans                                                                                                                                                                                            = null;
    private Accounts|null $operation🌀MarketplaceListing🌀Plans🌀PlanId🌀Accounts                                                                                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Accounts\AccountId|null $operation🌀MarketplaceListing🌀Stubbed🌀Accounts🌀AccountId                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Plans|null $operation🌀MarketplaceListing🌀Stubbed🌀Plans                                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Plans\PlanId\Accounts|null $operation🌀MarketplaceListing🌀Stubbed🌀Plans🌀PlanId🌀Accounts                                                                   = null;
    private Meta|null $operation🌀Meta                                                                                                                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Networks\Owner\Repo\Events|null $operation🌀Networks🌀Owner🌀Repo🌀Events                                                                                                               = null;
    private Notifications|null $operation🌀Notifications                                                                                                                                                                                               = null;
    private ThreadId|null $operation🌀Notifications🌀Threads🌀ThreadId                                                                                                                                                                                   = null;
    private Subscription|null $operation🌀Notifications🌀Threads🌀ThreadId🌀Subscription                                                                                                                                                                  = null;
    private Octocat|null $operation🌀Octocat                                                                                                                                                                                                           = null;
    private Organizations|null $operation🌀Organizations                                                                                                                                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Organizations\Org\Settings\Billing\Usage|null $operation🌀Organizations🌀Org🌀Settings🌀Billing🌀Usage                                                                                   = null;
    private Org|null $operation🌀Orgs🌀Org                                                                                                                                                                                                              = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Cache\Usage|null $operation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage                                                                                                           = null;
    private UsageByRepository|null $operation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository                                                                                                                                                                = null;
    private Sub|null $operation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub                                                                                                                                                                               = null;
    private Permissions|null $operation🌀Orgs🌀Org🌀Actions🌀Permissions                                                                                                                                                                                  = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories|null $operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories                                                                                 = null;
    private RepositoryId|null $operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId                                                                                                                                                       = null;
    private SelectedActions|null $operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions                                                                                                                                                              = null;
    private Workflow|null $operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow                                                                                                                                                                            = null;
    private RunnerGroups|null $operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups                                                                                                                                                                                = null;
    private RunnerGroupId|null $operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId                                                                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Repositories|null $operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Repositories\RepositoryId|null $operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories🌀RepositoryId                         = null;
    private Runners|null $operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners                                                                                                                                                               = null;
    private RunnerId|null $operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId                                                                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Runners|null $operation🌀Orgs🌀Org🌀Actions🌀Runners                                                                                                                   = null;
    private Downloads|null $operation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads                                                                                                                                                                              = null;
    private GenerateJitconfig|null $operation🌀Orgs🌀Org🌀Actions🌀Runners🌀GenerateJitconfig                                                                                                                                                              = null;
    private RegistrationToken|null $operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken                                                                                                                                                              = null;
    private RemoveToken|null $operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken                                                                                                                                                                          = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId|null $operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId                                                                                                 = null;
    private Labels|null $operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels                                                                                                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels\Name|null $operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name                                                                         = null;
    private Secrets|null $operation🌀Orgs🌀Org🌀Actions🌀Secrets                                                                                                                                                                                          = null;
    private PublicKey|null $operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey                                                                                                                                                                              = null;
    private SecretName|null $operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName                                                                                                                                                                            = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories|null $operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories\RepositoryId|null $operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId                                         = null;
    private Variables|null $operation🌀Orgs🌀Org🌀Actions🌀Variables                                                                                                                                                                                      = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name|null $operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories|null $operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories\RepositoryId|null $operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories🌀RepositoryId                                                 = null;
    private SubjectDigest|null $operation🌀Orgs🌀Org🌀Attestations🌀SubjectDigest                                                                                                                                                                         = null;
    private Blocks|null $operation🌀Orgs🌀Org🌀Blocks                                                                                                                                                                                                    = null;
    private Username|null $operation🌀Orgs🌀Org🌀Blocks🌀Username                                                                                                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeScanning\Alerts|null $operation🌀Orgs🌀Org🌀CodeScanning🌀Alerts                                                                                                           = null;
    private Configurations|null $operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations                                                                                                                                                                       = null;
    private Defaults|null $operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀Defaults                                                                                                                                                                    = null;
    private Detach|null $operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀Detach                                                                                                                                                                        = null;
    private ConfigurationId|null $operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId                                                                                                                                                      = null;
    private Attach|null $operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Attach                                                                                                                                                        = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations\ConfigurationId\Defaults|null $operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Defaults                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations\ConfigurationId\Repositories|null $operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Repositories                                 = null;
    private Codespaces|null $operation🌀Orgs🌀Org🌀Codespaces                                                                                                                                                                                            = null;
    private Access|null $operation🌀Orgs🌀Org🌀Codespaces🌀Access                                                                                                                                                                                         = null;
    private SelectedUsers|null $operation🌀Orgs🌀Org🌀Codespaces🌀Access🌀SelectedUsers                                                                                                                                                                    = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets|null $operation🌀Orgs🌀Org🌀Codespaces🌀Secrets                                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\PublicKey|null $operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName|null $operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories|null $operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories\RepositoryId|null $operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId                                   = null;
    private Billing|null $operation🌀Orgs🌀Org🌀Copilot🌀Billing                                                                                                                                                                                          = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\Seats|null $operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats                                                                                                       = null;
    private SelectedTeams|null $operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams                                                                                                                                                                      = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedUsers|null $operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Copilot\Metrics|null $operation🌀Orgs🌀Org🌀Copilot🌀Metrics                                                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Copilot\Usage|null $operation🌀Orgs🌀Org🌀Copilot🌀Usage                                                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Alerts|null $operation🌀Orgs🌀Org🌀Dependabot🌀Alerts                                                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets|null $operation🌀Orgs🌀Org🌀Dependabot🌀Secrets                                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\PublicKey|null $operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName|null $operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories|null $operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories\RepositoryId|null $operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId                                   = null;
    private Conflicts|null $operation🌀Orgs🌀Org🌀Docker🌀Conflicts                                                                                                                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Events|null $operation🌀Orgs🌀Org🌀Events                                                                                                                                     = null;
    private FailedInvitations|null $operation🌀Orgs🌀Org🌀FailedInvitations                                                                                                                                                                              = null;
    private Hooks|null $operation🌀Orgs🌀Org🌀Hooks                                                                                                                                                                                                      = null;
    private HookId|null $operation🌀Orgs🌀Org🌀Hooks🌀HookId                                                                                                                                                                                              = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Config|null $operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config                                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries|null $operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries                                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId|null $operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId\Attempts|null $operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts                                                           = null;
    private Pings|null $operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings                                                                                                                                                                                         = null;
    private ActorId|null $operation🌀Orgs🌀Org🌀Insights🌀Api🌀RouteStats🌀ActorType🌀ActorId                                                                                                                                                                = null;
    private SubjectStats|null $operation🌀Orgs🌀Org🌀Insights🌀Api🌀SubjectStats                                                                                                                                                                           = null;
    private SummaryStats|null $operation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats                                                                                                                                                                           = null;
    private UserId|null $operation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats🌀Users🌀UserId                                                                                                                                                                    = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\SummaryStats\ActorType\ActorId|null $operation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats🌀ActorType🌀ActorId                                                           = null;
    private TimeStats|null $operation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats                                                                                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\TimeStats\Users\UserId|null $operation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats🌀Users🌀UserId                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\TimeStats\ActorType\ActorId|null $operation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats🌀ActorType🌀ActorId                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\UserStats\UserId|null $operation🌀Orgs🌀Org🌀Insights🌀Api🌀UserStats🌀UserId                                                                                       = null;
    private Installation|null $operation🌀Orgs🌀Org🌀Installation                                                                                                                                                                                        = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Installations|null $operation🌀Orgs🌀Org🌀Installations                                                                                                                       = null;
    private InteractionLimits|null $operation🌀Orgs🌀Org🌀InteractionLimits                                                                                                                                                                              = null;
    private Invitations|null $operation🌀Orgs🌀Org🌀Invitations                                                                                                                                                                                          = null;
    private InvitationId|null $operation🌀Orgs🌀Org🌀Invitations🌀InvitationId                                                                                                                                                                            = null;
    private Teams|null $operation🌀Orgs🌀Org🌀Invitations🌀InvitationId🌀Teams                                                                                                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Issues|null $operation🌀Orgs🌀Org🌀Issues                                                                                                                                     = null;
    private Members|null $operation🌀Orgs🌀Org🌀Members                                                                                                                                                                                                  = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Members\Username|null $operation🌀Orgs🌀Org🌀Members🌀Username                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces|null $operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces                                                                                           = null;
    private CodespaceName|null $operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName                                                                                                                                                          = null;
    private Stop|null $operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop                                                                                                                                                              = null;
    private Copilot|null $operation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot                                                                                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Memberships\Username|null $operation🌀Orgs🌀Org🌀Memberships🌀Username                                                                                                         = null;
    private Migrations|null $operation🌀Orgs🌀Org🌀Migrations                                                                                                                                                                                            = null;
    private MigrationId|null $operation🌀Orgs🌀Org🌀Migrations🌀MigrationId                                                                                                                                                                               = null;
    private Archive|null $operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive                                                                                                                                                                           = null;
    private Lock|null $operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock                                                                                                                                                                  = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repositories|null $operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories                                                                           = null;
    private OrganizationRoles|null $operation🌀Orgs🌀Org🌀OrganizationRoles                                                                                                                                                                              = null;
    private TeamSlug|null $operation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug                                                                                                                                                                        = null;
    private RoleId|null $operation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug🌀RoleId                                                                                                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Users\Username|null $operation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Users\Username\RoleId|null $operation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username🌀RoleId                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId|null $operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId\Teams|null $operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Teams                                                                                     = null;
    private Users|null $operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Users                                                                                                                                                                             = null;
    private OutsideCollaborators|null $operation🌀Orgs🌀Org🌀OutsideCollaborators                                                                                                                                                                        = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OutsideCollaborators\Username|null $operation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username                                                                                       = null;
    private Packages|null $operation🌀Orgs🌀Org🌀Packages                                                                                                                                                                                                = null;
    private PackageName|null $operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName                                                                                                                                                                     = null;
    private Restore|null $operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Restore                                                                                                                                                                 = null;
    private Versions|null $operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions                                                                                                                                                               = null;
    private PackageVersionId|null $operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId                                                                                                                                      = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore|null $operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore             = null;
    private PersonalAccessTokenRequests|null $operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests                                                                                                                                                          = null;
    private PatRequestId|null $operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId                                                                                                                                                            = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId\Repositories|null $operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId🌀Repositories                                       = null;
    private PersonalAccessTokens|null $operation🌀Orgs🌀Org🌀PersonalAccessTokens                                                                                                                                                                        = null;
    private PatId|null $operation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId                                                                                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId\Repositories|null $operation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId🌀Repositories                                                                   = null;
    private Projects|null $operation🌀Orgs🌀Org🌀Projects                                                                                                                                                                                                = null;
    private Schema|null $operation🌀Orgs🌀Org🌀Properties🌀Schema                                                                                                                                                                                         = null;
    private CustomPropertyName|null $operation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName                                                                                                                                                          = null;
    private Values|null $operation🌀Orgs🌀Org🌀Properties🌀Values                                                                                                                                                                                         = null;
    private PublicMembers|null $operation🌀Orgs🌀Org🌀PublicMembers                                                                                                                                                                                      = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\PublicMembers\Username|null $operation🌀Orgs🌀Org🌀PublicMembers🌀Username                                                                                                     = null;
    private Repos|null $operation🌀Orgs🌀Org🌀Repos                                                                                                                                                                                                      = null;
    private Rulesets|null $operation🌀Orgs🌀Org🌀Rulesets                                                                                                                                                                                                = null;
    private RuleSuites|null $operation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites                                                                                                                                                                                   = null;
    private RuleSuiteId|null $operation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites🌀RuleSuiteId                                                                                                                                                                      = null;
    private RulesetId|null $operation🌀Orgs🌀Org🌀Rulesets🌀RulesetId                                                                                                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\SecretScanning\Alerts|null $operation🌀Orgs🌀Org🌀SecretScanning🌀Alerts                                                                                                       = null;
    private SecurityAdvisories|null $operation🌀Orgs🌀Org🌀SecurityAdvisories                                                                                                                                                                            = null;
    private SecurityManagers|null $operation🌀Orgs🌀Org🌀SecurityManagers                                                                                                                                                                                = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\SecurityManagers\Teams\TeamSlug|null $operation🌀Orgs🌀Org🌀SecurityManagers🌀Teams🌀TeamSlug                                                                                   = null;
    private Actions|null $operation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions                                                                                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\Packages|null $operation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages                                                                                               = null;
    private SharedStorage|null $operation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage                                                                                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Team\TeamSlug\Copilot\Metrics|null $operation🌀Orgs🌀Org🌀Team🌀TeamSlug🌀Copilot🌀Metrics                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Team\TeamSlug\Copilot\Usage|null $operation🌀Orgs🌀Org🌀Team🌀TeamSlug🌀Copilot🌀Usage                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams|null $operation🌀Orgs🌀Org🌀Teams                                                                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug                                                                                                                     = null;
    private Discussions|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions                                                                                                                                                                           = null;
    private DiscussionNumber|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber                                                                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments                                         = null;
    private CommentNumber|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber                                                                                                                                 = null;
    private Reactions|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions                                                                                                                           = null;
    private ReactionId|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions🌀ReactionId                                                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions\ReactionId|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions🌀ReactionId                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Invitations|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Invitations                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Members|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Memberships\Username|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects                                                                                                   = null;
    private ProjectId|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId                                                                                                                                                                      = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos                                                                                                         = null;
    private Repo|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo                                                                                                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Teams|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams                                                                                                         = null;
    private Enablement|null $operation🌀Orgs🌀Org🌀SecurityProduct🌀Enablement                                                                                                                                                                            = null;
    private CardId|null $operation🌀Projects🌀Columns🌀Cards🌀CardId                                                                                                                                                                                      = null;
    private Moves|null $operation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves                                                                                                                                                                                 = null;
    private ColumnId|null $operation🌀Projects🌀Columns🌀ColumnId                                                                                                                                                                                        = null;
    private Cards|null $operation🌀Projects🌀Columns🌀ColumnId🌀Cards                                                                                                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\Columns\ColumnId\Moves|null $operation🌀Projects🌀Columns🌀ColumnId🌀Moves                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\ProjectId|null $operation🌀Projects🌀ProjectId                                                                                                                               = null;
    private Collaborators|null $operation🌀Projects🌀ProjectId🌀Collaborators                                                                                                                                                                            = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\ProjectId\Collaborators\Username|null $operation🌀Projects🌀ProjectId🌀Collaborators🌀Username                                                                                 = null;
    private Permission|null $operation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission                                                                                                                                                           = null;
    private Columns|null $operation🌀Projects🌀ProjectId🌀Columns                                                                                                                                                                                        = null;
    private RateLimit|null $operation🌀RateLimit                                                                                                                                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo|null $operation🌀Repos🌀Owner🌀Repo                                                                                                                                   = null;
    private Artifacts|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts                                                                                                                                                                              = null;
    private ArtifactId|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId                                                                                                                                                                  = null;
    private ArchiveFormat|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat                                                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Cache\Usage|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage                                                                                           = null;
    private Caches|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches                                                                                                                                                                                    = null;
    private CacheId|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches🌀CacheId                                                                                                                                                                           = null;
    private JobId|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId                                                                                                                                                                                 = null;
    private Logs|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs                                                                                                                                                                             = null;
    private Rerun|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Rerun                                                                                                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Oidc\Customization\Sub|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub                                                                     = null;
    private OrganizationSecrets|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets                                                                                                                                                          = null;
    private OrganizationVariables|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables                                                                                                                                                      = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Access|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\SelectedActions|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Workflow|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Workflow                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners                                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\Downloads|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\GenerateJitconfig|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀GenerateJitconfig                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RegistrationToken|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RemoveToken|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels\Name|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name                                                         = null;
    private Runs|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs                                                                                                                                                                                        = null;
    private RunId|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId                                                                                                                                                                                 = null;
    private Approvals|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approvals                                                                                                                                                                   = null;
    private Approve|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approve                                                                                                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Artifacts|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts                                                                         = null;
    private AttemptNumber|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber                                                                                                                                                  = null;
    private Jobs|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs                                                                                                                                                      = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber\Logs|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Logs                                     = null;
    private Cancel|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel                                                                                                                                                                         = null;
    private DeploymentProtectionRule|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀DeploymentProtectionRule                                                                                                                                     = null;
    private ForceCancel|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀ForceCancel                                                                                                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Jobs|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Logs|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs                                                                                   = null;
    private PendingDeployments|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments                                                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Rerun|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun                                                                                 = null;
    private RerunFailedJobs|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀RerunFailedJobs                                                                                                                                                       = null;
    private Timing|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing                                                                                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets                                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\PublicKey|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Variables|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables                                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Variables\Name|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name                                                                                     = null;
    private Workflows|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows                                                                                                                                                                              = null;
    private WorkflowId|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId                                                                                                                                                                  = null;
    private Disable|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Disable                                                                                                                                                             = null;
    private Dispatches|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Dispatches                                                                                                                                                       = null;
    private Enable|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Enable                                                                                                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Runs|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Timing|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing                                                           = null;
    private Activity|null $operation🌀Repos🌀Owner🌀Repo🌀Activity                                                                                                                                                                                        = null;
    private Assignees|null $operation🌀Repos🌀Owner🌀Repo🌀Assignees                                                                                                                                                                                      = null;
    private Assignee|null $operation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee                                                                                                                                                                              = null;
    private Attestations|null $operation🌀Repos🌀Owner🌀Repo🌀Attestations                                                                                                                                                                                = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Attestations\SubjectDigest|null $operation🌀Repos🌀Owner🌀Repo🌀Attestations🌀SubjectDigest                                                                             = null;
    private Autolinks|null $operation🌀Repos🌀Owner🌀Repo🌀Autolinks                                                                                                                                                                                      = null;
    private AutolinkId|null $operation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId                                                                                                                                                                          = null;
    private AutomatedSecurityFixes|null $operation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes                                                                                                                                                            = null;
    private Branches|null $operation🌀Repos🌀Owner🌀Repo🌀Branches                                                                                                                                                                                        = null;
    private Branch|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch                                                                                                                                                                                   = null;
    private Protection|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection                                                                                                                                                                    = null;
    private EnforceAdmins|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins                                                                                                                                                   = null;
    private RequiredPullRequestReviews|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews                                                                                                                         = null;
    private RequiredSignatures|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures                                                                                                                                         = null;
    private RequiredStatusChecks|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks                                                                                                                                     = null;
    private Contexts|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts                                                                                                                                        = null;
    private Restrictions|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions                                                                                                                                                     = null;
    private Apps|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps                                                                                                                                                        = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Teams|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Users|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users                                       = null;
    private Rename|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename                                                                                                                                                                            = null;
    private CheckRuns|null $operation🌀Repos🌀Owner🌀Repo🌀CheckRuns                                                                                                                                                                                      = null;
    private CheckRunId|null $operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId                                                                                                                                                                          = null;
    private Annotations|null $operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations                                                                                                                                                             = null;
    private Rerequest|null $operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Rerequest                                                                                                                                                                 = null;
    private CheckSuites|null $operation🌀Repos🌀Owner🌀Repo🌀CheckSuites                                                                                                                                                                                  = null;
    private Preferences|null $operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences                                                                                                                                                                      = null;
    private CheckSuiteId|null $operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId                                                                                                                                                                    = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\CheckRuns|null $operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\Rerequest|null $operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts                                                                                           = null;
    private AlertNumber|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber                                                                                                                                                              = null;
    private Instances|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances                                                                                                                                                      = null;
    private Analyses|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses                                                                                                                                                                           = null;
    private AnalysisId|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId                                                                                                                                                              = null;
    private Databases|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases                                                                                                                                                                  = null;
    private Language|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language                                                                                                                                                          = null;
    private VariantAnalyses|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses                                                                                                                                                      = null;
    private CodeqlVariantAnalysisId|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses🌀CodeqlVariantAnalysisId                                                                                                                      = null;
    private RepoName|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses🌀CodeqlVariantAnalysisId🌀Repos🌀RepoOwner🌀RepoName                                                                                                            = null;
    private DefaultSetup|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup                                                                                                                                                                   = null;
    private Sarifs|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs                                                                                                                                                                               = null;
    private SarifId|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId                                                                                                                                                                      = null;
    private CodeSecurityConfiguration|null $operation🌀Repos🌀Owner🌀Repo🌀CodeSecurityConfiguration                                                                                                                                                      = null;
    private Errors|null $operation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors                                                                                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces|null $operation🌀Repos🌀Owner🌀Repo🌀Codespaces                                                                                                             = null;
    private Devcontainers|null $operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers                                                                                                                                                                   = null;
    private Machines|null $operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines                                                                                                                                                                             = null;
    private New_|null $operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_                                                                                                                                                                                     = null;
    private PermissionsCheck|null $operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀PermissionsCheck                                                                                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets|null $operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\PublicKey|null $operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀PublicKey                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\SecretName|null $operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators|null $operation🌀Repos🌀Owner🌀Repo🌀Collaborators                                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username|null $operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username\Permission|null $operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Comments|null $operation🌀Repos🌀Owner🌀Repo🌀Comments                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId|null $operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions|null $operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions\ReactionId|null $operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions🌀ReactionId                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits|null $operation🌀Repos🌀Owner🌀Repo🌀Commits                                                                                                                   = null;
    private BranchesWhereHead|null $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead                                                                                                                                                    = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Comments|null $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments                                                                             = null;
    private Pulls|null $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls                                                                                                                                                                            = null;
    private Ref|null $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref                                                                                                                                                                                          = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckRuns|null $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckSuites|null $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites                                                                                   = null;
    private Status|null $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status                                                                                                                                                                                = null;
    private Statuses|null $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses                                                                                                                                                                            = null;
    private Profile|null $operation🌀Repos🌀Owner🌀Repo🌀Community🌀Profile                                                                                                                                                                                = null;
    private Basehead|null $operation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead                                                                                                                                                                                = null;
    private Path|null $operation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path                                                                                                                                                                                       = null;
    private Contributors|null $operation🌀Repos🌀Owner🌀Repo🌀Contributors                                                                                                                                                                                = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts|null $operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts                                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts\AlertNumber|null $operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets|null $operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\PublicKey|null $operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀PublicKey                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\SecretName|null $operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Compare\Basehead|null $operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Compare🌀Basehead                                                                 = null;
    private Sbom|null $operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom                                                                                                                                                                                = null;
    private Snapshots|null $operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Snapshots                                                                                                                                                                      = null;
    private Deployments|null $operation🌀Repos🌀Owner🌀Repo🌀Deployments                                                                                                                                                                                  = null;
    private DeploymentId|null $operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId                                                                                                                                                                    = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses|null $operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses                                                               = null;
    private StatusId|null $operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId                                                                                                                                                      = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dispatches|null $operation🌀Repos🌀Owner🌀Repo🌀Dispatches                                                                                                             = null;
    private Environments|null $operation🌀Repos🌀Owner🌀Repo🌀Environments                                                                                                                                                                                = null;
    private EnvironmentName|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName                                                                                                                                                             = null;
    private DeploymentBranchPolicies|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies                                                                                                                           = null;
    private BranchPolicyId|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId                                                                                                                      = null;
    private DeploymentProtectionRules|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules                                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules\Apps|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀Apps           = null;
    private ProtectionRuleId|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀ProtectionRuleId                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets\PublicKey|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀PublicKey                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets\SecretName|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Variables|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Variables\Name|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables🌀Name                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Events|null $operation🌀Repos🌀Owner🌀Repo🌀Events                                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Forks|null $operation🌀Repos🌀Owner🌀Repo🌀Forks                                                                                                                       = null;
    private Blobs|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs                                                                                                                                                                                          = null;
    private FileSha|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha                                                                                                                                                                                = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Commits|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits                                                                                                           = null;
    private CommitSha|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha                                                                                                                                                                          = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\MatchingRefs\Ref|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Ref\Ref|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref                                                                                                           = null;
    private Refs|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs                                                                                                                                                                                            = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Refs\Ref|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref                                                                                                         = null;
    private Tags|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags                                                                                                                                                                                            = null;
    private TagSha|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha                                                                                                                                                                                   = null;
    private Trees|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees                                                                                                                                                                                          = null;
    private TreeSha|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha                                                                                                                                                                                = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks|null $operation🌀Repos🌀Owner🌀Repo🌀Hooks                                                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId|null $operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config|null $operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries|null $operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries\DeliveryId|null $operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries\DeliveryId\Attempts|null $operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Pings|null $operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings                                                                                             = null;
    private Tests|null $operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests                                                                                                                                                                                 = null;
    private Import|null $operation🌀Repos🌀Owner🌀Repo🌀Import                                                                                                                                                                                            = null;
    private Authors|null $operation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors                                                                                                                                                                                   = null;
    private AuthorId|null $operation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors🌀AuthorId                                                                                                                                                                         = null;
    private LargeFiles|null $operation🌀Repos🌀Owner🌀Repo🌀Import🌀LargeFiles                                                                                                                                                                             = null;
    private Lfs|null $operation🌀Repos🌀Owner🌀Repo🌀Import🌀Lfs                                                                                                                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Installation|null $operation🌀Repos🌀Owner🌀Repo🌀Installation                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\InteractionLimits|null $operation🌀Repos🌀Owner🌀Repo🌀InteractionLimits                                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Invitations|null $operation🌀Repos🌀Owner🌀Repo🌀Invitations                                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Invitations\InvitationId|null $operation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues|null $operation🌀Repos🌀Owner🌀Repo🌀Issues                                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments                                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions\ReactionId|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions🌀ReactionId                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Events|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events                                                                                                       = null;
    private EventId|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId                                                                                                                                                                            = null;
    private IssueNumber|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber                                                                                                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees\Assignee|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees🌀Assignee                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Comments|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Events|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels\Name|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Lock|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions\ReactionId|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions🌀ReactionId                                                   = null;
    private SubIssue|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssue                                                                                                                                                                     = null;
    private SubIssues|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssues                                                                                                                                                                   = null;
    private Priority|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssues🌀Priority                                                                                                                                                           = null;
    private Timeline|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline                                                                                                                                                                     = null;
    private Keys|null $operation🌀Repos🌀Owner🌀Repo🌀Keys                                                                                                                                                                                                = null;
    private KeyId|null $operation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId                                                                                                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Labels|null $operation🌀Repos🌀Owner🌀Repo🌀Labels                                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Labels\Name|null $operation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name                                                                                                           = null;
    private Languages|null $operation🌀Repos🌀Owner🌀Repo🌀Languages                                                                                                                                                                                      = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\License|null $operation🌀Repos🌀Owner🌀Repo🌀License                                                                                                                   = null;
    private MergeUpstream|null $operation🌀Repos🌀Owner🌀Repo🌀MergeUpstream                                                                                                                                                                              = null;
    private Merges|null $operation🌀Repos🌀Owner🌀Repo🌀Merges                                                                                                                                                                                            = null;
    private Milestones|null $operation🌀Repos🌀Owner🌀Repo🌀Milestones                                                                                                                                                                                    = null;
    private MilestoneNumber|null $operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber                                                                                                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber\Labels|null $operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Notifications|null $operation🌀Repos🌀Owner🌀Repo🌀Notifications                                                                                                       = null;
    private Pages|null $operation🌀Repos🌀Owner🌀Repo🌀Pages                                                                                                                                                                                              = null;
    private Builds|null $operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds                                                                                                                                                                                      = null;
    private Latest|null $operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest                                                                                                                                                                               = null;
    private BuildId|null $operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId                                                                                                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments|null $operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments                                                                                               = null;
    private PagesDeploymentId|null $operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId                                                                                                                                                    = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments\PagesDeploymentId\Cancel|null $operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId🌀Cancel                                             = null;
    private Health|null $operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Health                                                                                                                                                                                      = null;
    private PrivateVulnerabilityReporting|null $operation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting                                                                                                                                              = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Projects|null $operation🌀Repos🌀Owner🌀Repo🌀Projects                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Properties\Values|null $operation🌀Repos🌀Owner🌀Repo🌀Properties🌀Values                                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls                                                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions\ReactionId|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions🌀ReactionId                                       = null;
    private PullNumber|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber                                                                                                                                                                              = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Codespaces|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Codespaces                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments                                                                               = null;
    private Replies|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies                                                                                                                                                      = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Commits|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits                                                                                 = null;
    private Files|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files                                                                                                                                                                             = null;
    private Merge|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge                                                                                                                                                                             = null;
    private RequestedReviewers|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers                                                                                                                                                   = null;
    private Reviews|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews                                                                                                                                                                         = null;
    private ReviewId|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId                                                                                                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Comments|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments                                             = null;
    private Dismissals|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals                                                                                                                                                  = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Events|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events                                                 = null;
    private UpdateBranch|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch                                                                                                                                                               = null;
    private Readme|null $operation🌀Repos🌀Owner🌀Repo🌀Readme                                                                                                                                                                                            = null;
    private Dir|null $operation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir                                                                                                                                                                                           = null;
    private Releases|null $operation🌀Repos🌀Owner🌀Repo🌀Releases                                                                                                                                                                                        = null;
    private AssetId|null $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId                                                                                                                                                                          = null;
    private GenerateNotes|null $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀GenerateNotes                                                                                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Latest|null $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest                                                                                                   = null;
    private Tag|null $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag                                                                                                                                                                                    = null;
    private ReleaseId|null $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId                                                                                                                                                                             = null;
    private Assets|null $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets                                                                                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions|null $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions\ReactionId|null $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions🌀ReactionId                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rules\Branches\Branch|null $operation🌀Repos🌀Owner🌀Repo🌀Rules🌀Branches🌀Branch                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets|null $operation🌀Repos🌀Owner🌀Repo🌀Rulesets                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RuleSuites|null $operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RuleSuites\RuleSuiteId|null $operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites🌀RuleSuiteId                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RulesetId|null $operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts|null $operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber|null $operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber                                                               = null;
    private Locations|null $operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations                                                                                                                                                    = null;
    private PushProtectionBypasses|null $operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀PushProtectionBypasses                                                                                                                                             = null;
    private ScanHistory|null $operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀ScanHistory                                                                                                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories|null $operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories                                                                                             = null;
    private Reports|null $operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀Reports                                                                                                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId|null $operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId                                                                               = null;
    private Cve|null $operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve                                                                                                                                                                        = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId\Forks|null $operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Forks                                                                   = null;
    private Stargazers|null $operation🌀Repos🌀Owner🌀Repo🌀Stargazers                                                                                                                                                                                    = null;
    private CodeFrequency|null $operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency                                                                                                                                                                        = null;
    private CommitActivity|null $operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity                                                                                                                                                                      = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\Contributors|null $operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors                                                                                             = null;
    private Participation|null $operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation                                                                                                                                                                        = null;
    private PunchCard|null $operation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard                                                                                                                                                                                = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Statuses\Sha|null $operation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha                                                                                                         = null;
    private Subscribers|null $operation🌀Repos🌀Owner🌀Repo🌀Subscribers                                                                                                                                                                                  = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Subscription|null $operation🌀Repos🌀Owner🌀Repo🌀Subscription                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Tags|null $operation🌀Repos🌀Owner🌀Repo🌀Tags                                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Tags\Protection|null $operation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection                                                                                                   = null;
    private TagProtectionId|null $operation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection🌀TagProtectionId                                                                                                                                                          = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Tarball\Ref|null $operation🌀Repos🌀Owner🌀Repo🌀Tarball🌀Ref                                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Teams|null $operation🌀Repos🌀Owner🌀Repo🌀Teams                                                                                                                       = null;
    private Topics|null $operation🌀Repos🌀Owner🌀Repo🌀Topics                                                                                                                                                                                            = null;
    private Clones|null $operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Clones                                                                                                                                                                                    = null;
    private Paths|null $operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Paths                                                                                                                                                                              = null;
    private Referrers|null $operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Referrers                                                                                                                                                                      = null;
    private Views|null $operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Views                                                                                                                                                                                      = null;
    private Transfer|null $operation🌀Repos🌀Owner🌀Repo🌀Transfer                                                                                                                                                                                        = null;
    private VulnerabilityAlerts|null $operation🌀Repos🌀Owner🌀Repo🌀VulnerabilityAlerts                                                                                                                                                                  = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Zipball\Ref|null $operation🌀Repos🌀Owner🌀Repo🌀Zipball🌀Ref                                                                                                           = null;
    private Generate|null $operation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate                                                                                                                                                                        = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repositories|null $operation🌀Repositories                                                                                                                                           = null;
    private Code|null $operation🌀Search🌀Code                                                                                                                                                                                                          = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Commits|null $operation🌀Search🌀Commits                                                                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Issues|null $operation🌀Search🌀Issues                                                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Labels|null $operation🌀Search🌀Labels                                                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Repositories|null $operation🌀Search🌀Repositories                                                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Topics|null $operation🌀Search🌀Topics                                                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Users|null $operation🌀Search🌀Users                                                                                                                                           = null;
    private TeamId|null $operation🌀Teams🌀TeamId                                                                                                                                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions|null $operation🌀Teams🌀TeamId🌀Discussions                                                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber|null $operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments|null $operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber|null $operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions|null $operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Reactions|null $operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Invitations|null $operation🌀Teams🌀TeamId🌀Invitations                                                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Members|null $operation🌀Teams🌀TeamId🌀Members                                                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Members\Username|null $operation🌀Teams🌀TeamId🌀Members🌀Username                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Memberships\Username|null $operation🌀Teams🌀TeamId🌀Memberships🌀Username                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Projects|null $operation🌀Teams🌀TeamId🌀Projects                                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Projects\ProjectId|null $operation🌀Teams🌀TeamId🌀Projects🌀ProjectId                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Repos|null $operation🌀Teams🌀TeamId🌀Repos                                                                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo|null $operation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Teams|null $operation🌀Teams🌀TeamId🌀Teams                                                                                                                               = null;
    private User|null $operation🌀User                                                                                                                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Blocks|null $operation🌀User🌀Blocks                                                                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Blocks\Username|null $operation🌀User🌀Blocks🌀Username                                                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces|null $operation🌀User🌀Codespaces                                                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets|null $operation🌀User🌀Codespaces🌀Secrets                                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets\PublicKey|null $operation🌀User🌀Codespaces🌀Secrets🌀PublicKey                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName|null $operation🌀User🌀Codespaces🌀Secrets🌀SecretName                                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories|null $operation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories\RepositoryId|null $operation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\CodespaceName|null $operation🌀User🌀Codespaces🌀CodespaceName                                                                                                         = null;
    private Exports|null $operation🌀User🌀Codespaces🌀CodespaceName🌀Exports                                                                                                                                                                             = null;
    private ExportId|null $operation🌀User🌀Codespaces🌀CodespaceName🌀Exports🌀ExportId                                                                                                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Machines|null $operation🌀User🌀Codespaces🌀CodespaceName🌀Machines                                                                                       = null;
    private Publish|null $operation🌀User🌀Codespaces🌀CodespaceName🌀Publish                                                                                                                                                                             = null;
    private Start|null $operation🌀User🌀Codespaces🌀CodespaceName🌀Start                                                                                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Stop|null $operation🌀User🌀Codespaces🌀CodespaceName🌀Stop                                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Docker\Conflicts|null $operation🌀User🌀Docker🌀Conflicts                                                                                                                         = null;
    private Visibility|null $operation🌀User🌀Email🌀Visibility                                                                                                                                                                                          = null;
    private Emails|null $operation🌀User🌀Emails                                                                                                                                                                                                        = null;
    private Followers|null $operation🌀User🌀Followers                                                                                                                                                                                                  = null;
    private Following|null $operation🌀User🌀Following                                                                                                                                                                                                  = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Following\Username|null $operation🌀User🌀Following🌀Username                                                                                                                     = null;
    private GpgKeys|null $operation🌀User🌀GpgKeys                                                                                                                                                                                                      = null;
    private GpgKeyId|null $operation🌀User🌀GpgKeys🌀GpgKeyId                                                                                                                                                                                            = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Installations|null $operation🌀User🌀Installations                                                                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Installations\InstallationId\Repositories|null $operation🌀User🌀Installations🌀InstallationId🌀Repositories                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Installations\InstallationId\Repositories\RepositoryId|null $operation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\InteractionLimits|null $operation🌀User🌀InteractionLimits                                                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Issues|null $operation🌀User🌀Issues                                                                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Keys|null $operation🌀User🌀Keys                                                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Keys\KeyId|null $operation🌀User🌀Keys🌀KeyId                                                                                                                                     = null;
    private MarketplacePurchases|null $operation🌀User🌀MarketplacePurchases                                                                                                                                                                            = null;
    private Stubbed|null $operation🌀User🌀MarketplacePurchases🌀Stubbed                                                                                                                                                                                 = null;
    private Orgs|null $operation🌀User🌀Memberships🌀Orgs                                                                                                                                                                                                = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Memberships\Orgs\Org|null $operation🌀User🌀Memberships🌀Orgs🌀Org                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations|null $operation🌀User🌀Migrations                                                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations\MigrationId|null $operation🌀User🌀Migrations🌀MigrationId                                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations\MigrationId\Archive|null $operation🌀User🌀Migrations🌀MigrationId🌀Archive                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations\MigrationId\Repos\RepoName\Lock|null $operation🌀User🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations\MigrationId\Repositories|null $operation🌀User🌀Migrations🌀MigrationId🌀Repositories                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Orgs|null $operation🌀User🌀Orgs                                                                                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages|null $operation🌀User🌀Packages                                                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName|null $operation🌀User🌀Packages🌀PackageType🌀PackageName                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Restore|null $operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Restore                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions|null $operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId|null $operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore|null $operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Projects|null $operation🌀User🌀Projects                                                                                                                                         = null;
    private PublicEmails|null $operation🌀User🌀PublicEmails                                                                                                                                                                                            = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Repos|null $operation🌀User🌀Repos                                                                                                                                               = null;
    private RepositoryInvitations|null $operation🌀User🌀RepositoryInvitations                                                                                                                                                                          = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\RepositoryInvitations\InvitationId|null $operation🌀User🌀RepositoryInvitations🌀InvitationId                                                                                     = null;
    private SocialAccounts|null $operation🌀User🌀SocialAccounts                                                                                                                                                                                        = null;
    private SshSigningKeys|null $operation🌀User🌀SshSigningKeys                                                                                                                                                                                        = null;
    private SshSigningKeyId|null $operation🌀User🌀SshSigningKeys🌀SshSigningKeyId                                                                                                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Starred|null $operation🌀User🌀Starred                                                                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Starred\Owner\Repo|null $operation🌀User🌀Starred🌀Owner🌀Repo                                                                                                                     = null;
    private Subscriptions|null $operation🌀User🌀Subscriptions                                                                                                                                                                                          = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Teams|null $operation🌀User🌀Teams                                                                                                                                               = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\AccountId|null $operation🌀User🌀AccountId                                                                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users|null $operation🌀Users                                                                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username|null $operation🌀Users🌀Username                                                                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Attestations\SubjectDigest|null $operation🌀Users🌀Username🌀Attestations🌀SubjectDigest                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Docker\Conflicts|null $operation🌀Users🌀Username🌀Docker🌀Conflicts                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Events|null $operation🌀Users🌀Username🌀Events                                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Events\Orgs\Org|null $operation🌀Users🌀Username🌀Events🌀Orgs🌀Org                                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Events\Public_|null $operation🌀Users🌀Username🌀Events🌀Public_                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Followers|null $operation🌀Users🌀Username🌀Followers                                                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Following|null $operation🌀Users🌀Username🌀Following                                                                                                                   = null;
    private TargetUser|null $operation🌀Users🌀Username🌀Following🌀TargetUser                                                                                                                                                                            = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Gists|null $operation🌀Users🌀Username🌀Gists                                                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\GpgKeys|null $operation🌀Users🌀Username🌀GpgKeys                                                                                                                       = null;
    private Hovercard|null $operation🌀Users🌀Username🌀Hovercard                                                                                                                                                                                        = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Installation|null $operation🌀Users🌀Username🌀Installation                                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Keys|null $operation🌀Users🌀Username🌀Keys                                                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Orgs|null $operation🌀Users🌀Username🌀Orgs                                                                                                                             = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages|null $operation🌀Users🌀Username🌀Packages                                                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName|null $operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Restore|null $operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Restore                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions|null $operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId|null $operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId                 = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore|null $operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Projects|null $operation🌀Users🌀Username🌀Projects                                                                                                                     = null;
    private ReceivedEvents|null $operation🌀Users🌀Username🌀ReceivedEvents                                                                                                                                                                              = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\ReceivedEvents\Public_|null $operation🌀Users🌀Username🌀ReceivedEvents🌀Public_                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Repos|null $operation🌀Users🌀Username🌀Repos                                                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Settings\Billing\Actions|null $operation🌀Users🌀Username🌀Settings🌀Billing🌀Actions                                                                                     = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Settings\Billing\Packages|null $operation🌀Users🌀Username🌀Settings🌀Billing🌀Packages                                                                                   = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Settings\Billing\SharedStorage|null $operation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\SocialAccounts|null $operation🌀Users🌀Username🌀SocialAccounts                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\SshSigningKeys|null $operation🌀Users🌀Username🌀SshSigningKeys                                                                                                         = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Starred|null $operation🌀Users🌀Username🌀Starred                                                                                                                       = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Subscriptions|null $operation🌀Users🌀Username🌀Subscriptions                                                                                                           = null;
    private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Versions|null $operation🌀Versions                                                                                                                                                   = null;
    private Zen|null $operation🌀Zen                                                                                                                                                                                                                   = null;

    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            '\\ApiClients\\Client\\GitHub\\Schema\\Root' => $this->getObjectMapperOperation🌀Root()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\BasicError', '\\ApiClients\\Client\\GitHub\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀Advisories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\GlobalAdvisory', '\\ApiClients\\Client\\GitHub\\Schema\\GlobalAdvisory\\Cvss', '\\ApiClients\\Client\\GitHub\\Schema\\CvssSeverities', '\\ApiClients\\Client\\GitHub\\Schema\\CvssSeverities\\CvssVThree', '\\ApiClients\\Client\\GitHub\\Schema\\CvssSeverities\\CvssVFour', '\\ApiClients\\Client\\GitHub\\Schema\\GlobalAdvisory\\Epss' => $this->getObjectMapperOperation🌀Advisories🌀GhsaId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Integration', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleUser', '\\ApiClients\\Client\\GitHub\\Schema\\Integration\\Permissions' => $this->getObjectMapperOperation🌀App()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Apps\\CreateFromManifest\\Response\\ApplicationJson\\Created' => $this->getObjectMapperOperation🌀AppManifests🌀Code🌀Conversions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ScimError', '\\ApiClients\\Client\\GitHub\\Schema\\ValidationError' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Request', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Request\\Headers', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Request\\Payload', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Response', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Response\\Headers' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Apps\\RedeliverWebhookDelivery\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Installation', '\\ApiClients\\Client\\GitHub\\Schema\\AppPermissions' => $this->getObjectMapperOperation🌀App🌀Installations🌀InstallationId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\InstallationToken' => $this->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀AccessTokens()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Authorization', '\\ApiClients\\Client\\GitHub\\Schema\\Authorization\\App', '\\ApiClients\\Client\\GitHub\\Schema\\ScopedInstallation' => $this->getObjectMapperOperation🌀Applications🌀ClientId🌀Token()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ClassroomAssignment', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleClassroomRepository', '\\ApiClients\\Client\\GitHub\\Schema\\Classroom', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleClassroomOrganization' => $this->getObjectMapperOperation🌀Assignments🌀AssignmentId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct🌀Key()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Emojis\\Get\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Emojis()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\ListCopilotSeatsForEnterprise\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Copilot🌀Billing🌀Seats()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\SecretScanning\\ListAlertsForEnterprise\\Response\\ApplicationJson\\ServiceUnavailable' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Feed', '\\ApiClients\\Client\\GitHub\\Schema\\Feed\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\LinkWithType' => $this->getObjectMapperOperation🌀Feeds()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\GistSimple', '\\ApiClients\\Client\\GitHub\\Schema\\GistSimple\\ForkOf', '\\ApiClients\\Client\\GitHub\\Schema\\GistSimple\\ForkOf\\Files', '\\ApiClients\\Client\\GitHub\\Schema\\GistSimple\\Files' => $this->getObjectMapperOperation🌀Gists()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Gists\\Get\\Response\\ApplicationJson\\Forbidden', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Gists\\Get\\Response\\ApplicationJson\\Forbidden\\Block' => $this->getObjectMapperOperation🌀Gists🌀GistId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀GistId🌀Comments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\BaseGist', '\\ApiClients\\Client\\GitHub\\Schema\\BaseGist\\Files' => $this->getObjectMapperOperation🌀Gists🌀GistId🌀Forks()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Gists\\CheckIsStarred\\Response\\ApplicationJson\\NotFound' => $this->getObjectMapperOperation🌀Gists🌀GistId🌀Star()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀Name()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Apps\\ListReposAccessibleToInstallation\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀License()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\MarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\MarketplacePurchase\\MarketplacePendingChange', '\\ApiClients\\Client\\GitHub\\Schema\\MarketplaceListingPlan', '\\ApiClients\\Client\\GitHub\\Schema\\MarketplacePurchase\\MarketplacePurchase' => $this->getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀AccountId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ApiOverview', '\\ApiClients\\Client\\GitHub\\Schema\\ApiOverview\\SshKeyFingerprints', '\\ApiClients\\Client\\GitHub\\Schema\\ApiOverview\\Domains', '\\ApiClients\\Client\\GitHub\\Schema\\ApiOverview\\Domains\\ArtifactAttestations' => $this->getObjectMapperOperation🌀Meta()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Activity\\MarkNotificationsAsRead\\Response\\ApplicationJson\\Accepted' => $this->getObjectMapperOperation🌀Notifications()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Thread', '\\ApiClients\\Client\\GitHub\\Schema\\MinimalRepository', '\\ApiClients\\Client\\GitHub\\Schema\\MinimalRepository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\MinimalRepository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\AdvancedSecurity', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\DependabotSecurityUpdates', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\SecretScanning', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\SecretScanningPushProtection', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\SecretScanningNonProviderPatterns', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\SecretScanningAiDetection', '\\ApiClients\\Client\\GitHub\\Schema\\Thread\\Subject' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\BillingUsageReport' => $this->getObjectMapperOperation🌀Organizations🌀Org🌀Settings🌀Billing🌀Usage()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationFull', '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationFull\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\Delete\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsCacheUsageOrgEnterprise' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\GetActionsCacheUsageByRepoForOrg\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OidcCustomSub', '\\ApiClients\\Client\\GitHub\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsGetDefaultWorkflowPermissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelfHostedRunnerGroupsForOrg\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\RunnerGroupsOrg' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoAccessToSelfHostedRunnerGroupInOrg\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelfHostedRunnersInGroupForOrg\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelfHostedRunnersForOrg\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\GenerateRunnerJitconfigForOrg\\Response\\ApplicationJson\\Created', '\\ApiClients\\Client\\GitHub\\Schema\\Runner' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀GenerateJitconfig()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\AuthenticationToken', '\\ApiClients\\Client\\GitHub\\Schema\\AuthenticationToken\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListLabelsForSelfHostedRunnerForOrg\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListOrgSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationActionsSecret' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelectedReposForOrgSecret\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListOrgVariables\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationActionsVariable' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelectedReposForOrgVariable\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\ListAttestations\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Attestations🌀SubjectDigest()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeSecurityConfiguration', '\\ApiClients\\Client\\GitHub\\Schema\\CodeSecurityConfiguration\\DependencyGraphAutosubmitActionOptions', '\\ApiClients\\Client\\GitHub\\Schema\\CodeSecurityConfiguration\\SecretScanningDelegatedBypassOptions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\CodeSecurity\\AttachConfiguration\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Attach()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\CodeSecurity\\SetConfigurationAsDefault\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Defaults()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListInOrganization\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListOrgSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesOrgSecret' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListSelectedReposForOrgSecret\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CopilotOrganizationDetails', '\\ApiClients\\Client\\GitHub\\Schema\\CopilotSeatBreakdown' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\ListCopilotSeats\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\AddCopilotSeatsForTeams\\Response\\ApplicationJson\\Created', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\CancelCopilotSeatAssignmentForTeams\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\AddCopilotSeatsForUsers\\Response\\ApplicationJson\\Created', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\CancelCopilotSeatAssignmentForUsers\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Dependabot\\ListOrgSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\DependabotPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationDependabotSecret' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Dependabot\\ListSelectedReposForOrgSecret\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrgHook', '\\ApiClients\\Client\\GitHub\\Schema\\OrgHook\\Config' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\RedeliverWebhookDelivery\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ApiInsightsSummaryStats' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\ListAppInstallations\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Installations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\InteractionLimitResponse' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀InteractionLimits()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationInvitation' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\GetCodespacesForUserInOrg\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\DeleteFromOrganization\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Codespace', '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceMachine', '\\ApiClients\\Client\\GitHub\\Schema\\Codespace\\GitStatus', '\\ApiClients\\Client\\GitHub\\Schema\\Codespace\\RuntimeConstraints' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CopilotSeatDetails', '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationSimple' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrgMembership', '\\ApiClients\\Client\\GitHub\\Schema\\OrgMembership\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Migration' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\ListOrgRoles\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationRole' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\ConvertMemberToOutsideCollaborator\\Response\\ApplicationJson\\Accepted\\Application\\Json', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\RemoveOutsideCollaborator\\Response\\ApplicationJson\\UnprocessableEntity' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Package' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PackageVersion', '\\ApiClients\\Client\\GitHub\\Schema\\PackageVersion\\Metadata', '\\ApiClients\\Client\\GitHub\\Schema\\PackageVersion\\Metadata\\Container', '\\ApiClients\\Client\\GitHub\\Schema\\PackageVersion\\Metadata\\Docker' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\ReviewPatGrantRequestsInBulk\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\UpdatePatAccesses\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Projects()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CustomProperty' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\FullRepository', '\\ApiClients\\Client\\GitHub\\Schema\\FullRepository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\LicenseSimple', '\\ApiClients\\Client\\GitHub\\Schema\\Repository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\CodeOfConductSimple', '\\ApiClients\\Client\\GitHub\\Schema\\FullRepository\\CustomProperties' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Repos()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryRuleset', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryRuleset\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryRuleset\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryRuleset\\Links\\Html' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\RuleSuite' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites🌀RuleSuiteId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsBillingUsage', '\\ApiClients\\Client\\GitHub\\Schema\\ActionsBillingUsage\\MinutesUsedBreakdown' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PackagesBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CombinedBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamFull', '\\ApiClients\\Client\\GitHub\\Schema\\TeamSimple', '\\ApiClients\\Client\\GitHub\\Schema\\TeamOrganization', '\\ApiClients\\Client\\GitHub\\Schema\\TeamOrganization\\Plan' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamDiscussion', '\\ApiClients\\Client\\GitHub\\Schema\\ReactionRollup' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamProject', '\\ApiClients\\Client\\GitHub\\Schema\\TeamProject\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Teams\\AddOrUpdateProjectPermissionsInOrg\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamRepository', '\\ApiClients\\Client\\GitHub\\Schema\\TeamRepository\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ProjectCard', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\DeleteCard\\Response\\ApplicationJson\\Forbidden' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\Created\\Application\\Json', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\Forbidden', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\ServiceUnavailable' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\CreateCard\\Response\\ApplicationJson\\ServiceUnavailable\\Application\\Json' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\MoveColumn\\Response\\ApplicationJson\\Created\\Application\\Json' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Moves()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\Delete\\Response\\ApplicationJson\\Forbidden\\Application\\Json', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\Update\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Projects🌀ProjectId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\RateLimitOverview', '\\ApiClients\\Client\\GitHub\\Schema\\RateLimitOverview\\Resources', '\\ApiClients\\Client\\GitHub\\Schema\\RateLimit' => $this->getObjectMapperOperation🌀RateLimit()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\Delete\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListArtifactsForRepo\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Artifact', '\\ApiClients\\Client\\GitHub\\Schema\\Artifact\\WorkflowRun' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsCacheUsageByRepository' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsCacheList' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Job' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OidcCustomSubRepo' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoOrganizationSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoOrganizationVariables\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsWorkflowAccessToRepository' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelfHostedRunnersForRepo\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListWorkflowRunsForRepo\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleCommit', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleCommit\\Committer' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListWorkflowRunArtifacts\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListJobsForWorkflowRunAttempt\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListJobsForWorkflowRun\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Ubuntu', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Macos', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Windows' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoSecrets\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsSecret' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoVariables\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsVariable' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoWorkflows\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListWorkflowRuns\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage\\Billable', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage\\Billable\\Ubuntu', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage\\Billable\\Macos', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage\\Billable\\Windows' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\CreateAttestation\\Response\\ApplicationJson\\Created' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Attestations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\ListAttestations\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Attestations🌀SubjectDigest()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Autolink' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CheckAutomatedSecurityFixes' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\BranchWithProtection', '\\ApiClients\\Client\\GitHub\\Schema\\Commit', '\\ApiClients\\Client\\GitHub\\Schema\\Commit\\Commit', '\\ApiClients\\Client\\GitHub\\Schema\\GitUser', '\\ApiClients\\Client\\GitHub\\Schema\\Commit\\Commit\\Tree', '\\ApiClients\\Client\\GitHub\\Schema\\Verification', '\\ApiClients\\Client\\GitHub\\Schema\\Commit\\Stats', '\\ApiClients\\Client\\GitHub\\Schema\\BranchWithProtection\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchRequiredStatusCheck', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchAdminEnforced', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchPullRequestReview', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchPullRequestReview\\DismissalRestrictions', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchPullRequestReview\\BypassPullRequestAllowances', '\\ApiClients\\Client\\GitHub\\Schema\\BranchRestrictionPolicy', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\RequiredLinearHistory', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\AllowForcePushes', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\AllowDeletions', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\BlockCreations', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\RequiredConversationResolution', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\RequiredSignatures', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\LockBranch', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\AllowForkSyncing' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch', '\\ApiClients\\Client\\GitHub\\Schema\\StatusCheckPolicy', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredPullRequestReviews', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\DismissalRestrictions', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\BypassPullRequestAllowances', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredSignatures', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\EnforceAdmins', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredLinearHistory', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\AllowForcePushes', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\AllowDeletions', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredConversationResolution', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\BlockCreations', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\LockBranch', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\AllowForkSyncing' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CheckRun', '\\ApiClients\\Client\\GitHub\\Schema\\CheckRun\\Output', '\\ApiClients\\Client\\GitHub\\Schema\\CheckRun\\CheckSuite', '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentSimple' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CheckSuitePreference', '\\ApiClients\\Client\\GitHub\\Schema\\CheckSuitePreference\\Preferences' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Checks\\ListForSuite\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlert', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertRule', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAnalysisTool', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertInstance', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertInstance\\Message', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertLocation' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAnalysis', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\CodeScanning\\GetAnalysis\\Response\\ApplicationJsonSarif\\Ok\\Application\\JsonSarif', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAnalysisDeletion' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningCodeqlDatabase' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningVariantAnalysis', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleRepository', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningVariantAnalysis\\SkippedRepositories', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningVariantAnalysisSkippedRepoGroup', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningVariantAnalysis\\SkippedRepositories\\NotFoundRepos' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningVariantAnalysisRepoTask' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses🌀CodeqlVariantAnalysisId🌀Repos🌀RepoOwner🌀RepoName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningDefaultSetup', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningDefaultSetupUpdateResponse' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningSarifsStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeSecurityConfigurationForRepository' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeSecurityConfiguration()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeownersErrors' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListInRepositoryForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListDevcontainersInRepositoryForAuthenticatedUser\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\RepoMachinesForAuthenticatedUser\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\PreFlightWithRepoForAuthenticatedUser\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\PreFlightWithRepoForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Defaults' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesPermissionsCheckForDevcontainer' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀PermissionsCheck()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListRepoSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepoCodespacesSecret' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryCollaboratorPermission', '\\ApiClients\\Client\\GitHub\\Schema\\Collaborator', '\\ApiClients\\Client\\GitHub\\Schema\\Collaborator\\Permissions' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Checks\\ListForRef\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Checks\\ListSuitesForRef\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CombinedCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CommunityProfile', '\\ApiClients\\Client\\GitHub\\Schema\\CommunityProfile\\Files', '\\ApiClients\\Client\\GitHub\\Schema\\CommunityHealthFile' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Community🌀Profile()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ContentTree', '\\ApiClients\\Client\\GitHub\\Schema\\ContentTree\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Content', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Content\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit\\Tree', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlert', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlert\\Dependency', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertPackage', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory\\Cvss', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityVulnerability', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityVulnerability\\FirstPatchedVersion' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Dependabot\\ListRepoSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\DependabotSecret' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\DependencyGraphSpdxSbom', '\\ApiClients\\Client\\GitHub\\Schema\\DependencyGraphSpdxSbom\\Sbom', '\\ApiClients\\Client\\GitHub\\Schema\\DependencyGraphSpdxSbom\\Sbom\\CreationInfo' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\DependencyGraph\\CreateRepositorySnapshot\\Response\\ApplicationJson\\Created' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Snapshots()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Deployment', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\CreateDeployment\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetAllEnvironments\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Environment', '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentBranchPolicySettings' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\ListDeploymentBranchPolicies\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentBranchPolicy' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetAllDeploymentProtectionRules\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentProtectionRule', '\\ApiClients\\Client\\GitHub\\Schema\\CustomDeploymentRuleApp' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\ListCustomDeploymentRuleIntegrations\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀Apps()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListEnvironmentSecrets\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListEnvironmentVariables\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit', '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit\\Tree', '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitRef', '\\ApiClients\\Client\\GitHub\\Schema\\GitRef\\Object_' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitTag', '\\ApiClients\\Client\\GitHub\\Schema\\GitTag\\Tagger', '\\ApiClients\\Client\\GitHub\\Schema\\GitTag\\Object_' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitTree' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Hook', '\\ApiClients\\Client\\GitHub\\Schema\\HookResponse' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\RedeliverWebhookDelivery\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Import' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PorterAuthor' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors🌀AuthorId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\SubIssuesSummary' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\IssueComment' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\IssueEvent', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventLabel', '\\ApiClients\\Client\\GitHub\\Schema\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\Team\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventDismissedReview', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventMilestone', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventProjectCard', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventRename' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Languages()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\LicenseContent', '\\ApiClients\\Client\\GitHub\\Schema\\LicenseContent\\Links' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀License()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\MergedUpstream' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀MergeUpstream()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Activity\\MarkRepoNotificationsAsRead\\Response\\ApplicationJson\\Accepted' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Page', '\\ApiClients\\Client\\GitHub\\Schema\\PagesSourceHash', '\\ApiClients\\Client\\GitHub\\Schema\\PagesHttpsCertificate' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PageBuild', '\\ApiClients\\Client\\GitHub\\Schema\\PageBuild\\Error' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PageDeployment' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PagesDeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PagesHealthCheck', '\\ApiClients\\Client\\GitHub\\Schema\\PagesHealthCheck\\Domain', '\\ApiClients\\Client\\GitHub\\Schema\\PagesHealthCheck\\AltDomain' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Health()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\CheckPrivateVulnerabilityReporting\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\Link', '\\ApiClients\\Client\\GitHub\\Schema\\AutoMerge' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestMergeResult', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Pulls\\Merge\\Response\\ApplicationJson\\MethodNotAllowed\\Application\\Json', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Pulls\\Merge\\Response\\ApplicationJson\\Conflict\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewRequest', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestSimple', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestSimple\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestSimple\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestSimple\\Links' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReview', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReview\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReview\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReview\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Pulls\\UpdateBranch\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ContentFile', '\\ApiClients\\Client\\GitHub\\Schema\\ContentFile\\Links' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Release' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ReleaseNotesContent' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀GenerateNotes()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\SecretScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\SecretScanningPushProtectionBypass' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀PushProtectionBypasses()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\SecretScanningScanHistory' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀ScanHistory()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryAdvisory', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryAdvisory\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryAdvisory\\Publisher', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryAdvisory\\Submission', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryAdvisory\\Cvss', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryAdvisory\\PrivateFork' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\SecurityAdvisories\\CreateRepositoryAdvisoryCveRequest\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetCodeFrequencyStats\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetCommitActivityStats\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetContributorsStats\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\TagProtection' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CloneTraffic' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Clones()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ViewTraffic' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Views()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Code\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Code()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Commits\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Commits()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\IssuesAndPullRequests\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Issues()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Labels\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Labels()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Repos\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Topics\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Topics()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Users\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Users()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Teams\\AddOrUpdateProjectPermissionsLegacy\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PrivateUser', '\\ApiClients\\Client\\GitHub\\Schema\\PrivateUser\\Plan' => $this->getObjectMapperOperation🌀User()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Codespaces()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListSecretsForAuthenticatedUser\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesUserPublicKey' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesSecret' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListRepositoriesForSecretForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\DeleteForAuthenticatedUser\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceExportDetails' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\CodespaceMachinesForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Machines()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceWithFullRepository', '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceWithFullRepository\\GitStatus', '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceWithFullRepository\\RuntimeConstraints' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Publish()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\GpgKey' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Apps\\ListInstallationsForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Installations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\SshSigningKey' => $this->getObjectMapperOperation🌀User🌀SshSigningKeys()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Users\\ListAttestations\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Users🌀Username🌀Attestations🌀SubjectDigest()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Hovercard' => $this->getObjectMapperOperation🌀Users🌀Username🌀Hovercard()->hydrateObject($className, $payload),
        };
    }

    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            (yield $index => $this->hydrateObject($className, $payload));
        }
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    public function serializeObjectOfType(object $object, string $className): mixed
    {
        return match ($className) {
            '\\ApiClients\\Client\\GitHub\\Schema\\Root' => $this->getObjectMapperOperation🌀Root()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\BasicError', '\\ApiClients\\Client\\GitHub\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀Advisories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\GlobalAdvisory', '\\ApiClients\\Client\\GitHub\\Schema\\GlobalAdvisory\\Cvss', '\\ApiClients\\Client\\GitHub\\Schema\\CvssSeverities', '\\ApiClients\\Client\\GitHub\\Schema\\CvssSeverities\\CvssVThree', '\\ApiClients\\Client\\GitHub\\Schema\\CvssSeverities\\CvssVFour', '\\ApiClients\\Client\\GitHub\\Schema\\GlobalAdvisory\\Epss' => $this->getObjectMapperOperation🌀Advisories🌀GhsaId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Integration', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleUser', '\\ApiClients\\Client\\GitHub\\Schema\\Integration\\Permissions' => $this->getObjectMapperOperation🌀App()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Apps\\CreateFromManifest\\Response\\ApplicationJson\\Created' => $this->getObjectMapperOperation🌀AppManifests🌀Code🌀Conversions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ScimError', '\\ApiClients\\Client\\GitHub\\Schema\\ValidationError' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Request', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Request\\Headers', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Request\\Payload', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Response', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Response\\Headers' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Apps\\RedeliverWebhookDelivery\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Installation', '\\ApiClients\\Client\\GitHub\\Schema\\AppPermissions' => $this->getObjectMapperOperation🌀App🌀Installations🌀InstallationId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\InstallationToken' => $this->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀AccessTokens()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Authorization', '\\ApiClients\\Client\\GitHub\\Schema\\Authorization\\App', '\\ApiClients\\Client\\GitHub\\Schema\\ScopedInstallation' => $this->getObjectMapperOperation🌀Applications🌀ClientId🌀Token()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ClassroomAssignment', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleClassroomRepository', '\\ApiClients\\Client\\GitHub\\Schema\\Classroom', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleClassroomOrganization' => $this->getObjectMapperOperation🌀Assignments🌀AssignmentId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct🌀Key()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Emojis\\Get\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Emojis()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\ListCopilotSeatsForEnterprise\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Copilot🌀Billing🌀Seats()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\SecretScanning\\ListAlertsForEnterprise\\Response\\ApplicationJson\\ServiceUnavailable' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Feed', '\\ApiClients\\Client\\GitHub\\Schema\\Feed\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\LinkWithType' => $this->getObjectMapperOperation🌀Feeds()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\GistSimple', '\\ApiClients\\Client\\GitHub\\Schema\\GistSimple\\ForkOf', '\\ApiClients\\Client\\GitHub\\Schema\\GistSimple\\ForkOf\\Files', '\\ApiClients\\Client\\GitHub\\Schema\\GistSimple\\Files' => $this->getObjectMapperOperation🌀Gists()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Gists\\Get\\Response\\ApplicationJson\\Forbidden', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Gists\\Get\\Response\\ApplicationJson\\Forbidden\\Block' => $this->getObjectMapperOperation🌀Gists🌀GistId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀GistId🌀Comments()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\BaseGist', '\\ApiClients\\Client\\GitHub\\Schema\\BaseGist\\Files' => $this->getObjectMapperOperation🌀Gists🌀GistId🌀Forks()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Gists\\CheckIsStarred\\Response\\ApplicationJson\\NotFound' => $this->getObjectMapperOperation🌀Gists🌀GistId🌀Star()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀Name()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Apps\\ListReposAccessibleToInstallation\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀License()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\MarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\MarketplacePurchase\\MarketplacePendingChange', '\\ApiClients\\Client\\GitHub\\Schema\\MarketplaceListingPlan', '\\ApiClients\\Client\\GitHub\\Schema\\MarketplacePurchase\\MarketplacePurchase' => $this->getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀AccountId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ApiOverview', '\\ApiClients\\Client\\GitHub\\Schema\\ApiOverview\\SshKeyFingerprints', '\\ApiClients\\Client\\GitHub\\Schema\\ApiOverview\\Domains', '\\ApiClients\\Client\\GitHub\\Schema\\ApiOverview\\Domains\\ArtifactAttestations' => $this->getObjectMapperOperation🌀Meta()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Activity\\MarkNotificationsAsRead\\Response\\ApplicationJson\\Accepted' => $this->getObjectMapperOperation🌀Notifications()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Thread', '\\ApiClients\\Client\\GitHub\\Schema\\MinimalRepository', '\\ApiClients\\Client\\GitHub\\Schema\\MinimalRepository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\MinimalRepository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\AdvancedSecurity', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\DependabotSecurityUpdates', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\SecretScanning', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\SecretScanningPushProtection', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\SecretScanningNonProviderPatterns', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\SecretScanningAiDetection', '\\ApiClients\\Client\\GitHub\\Schema\\Thread\\Subject' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\BillingUsageReport' => $this->getObjectMapperOperation🌀Organizations🌀Org🌀Settings🌀Billing🌀Usage()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationFull', '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationFull\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\Delete\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsCacheUsageOrgEnterprise' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\GetActionsCacheUsageByRepoForOrg\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OidcCustomSub', '\\ApiClients\\Client\\GitHub\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsGetDefaultWorkflowPermissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelfHostedRunnerGroupsForOrg\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\RunnerGroupsOrg' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoAccessToSelfHostedRunnerGroupInOrg\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelfHostedRunnersInGroupForOrg\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelfHostedRunnersForOrg\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\GenerateRunnerJitconfigForOrg\\Response\\ApplicationJson\\Created', '\\ApiClients\\Client\\GitHub\\Schema\\Runner' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀GenerateJitconfig()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\AuthenticationToken', '\\ApiClients\\Client\\GitHub\\Schema\\AuthenticationToken\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListLabelsForSelfHostedRunnerForOrg\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListOrgSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationActionsSecret' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelectedReposForOrgSecret\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListOrgVariables\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationActionsVariable' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelectedReposForOrgVariable\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\ListAttestations\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Attestations🌀SubjectDigest()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeSecurityConfiguration', '\\ApiClients\\Client\\GitHub\\Schema\\CodeSecurityConfiguration\\DependencyGraphAutosubmitActionOptions', '\\ApiClients\\Client\\GitHub\\Schema\\CodeSecurityConfiguration\\SecretScanningDelegatedBypassOptions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\CodeSecurity\\AttachConfiguration\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Attach()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\CodeSecurity\\SetConfigurationAsDefault\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Defaults()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListInOrganization\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListOrgSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesOrgSecret' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListSelectedReposForOrgSecret\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CopilotOrganizationDetails', '\\ApiClients\\Client\\GitHub\\Schema\\CopilotSeatBreakdown' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\ListCopilotSeats\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\AddCopilotSeatsForTeams\\Response\\ApplicationJson\\Created', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\CancelCopilotSeatAssignmentForTeams\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\AddCopilotSeatsForUsers\\Response\\ApplicationJson\\Created', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\CancelCopilotSeatAssignmentForUsers\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Dependabot\\ListOrgSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\DependabotPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationDependabotSecret' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Dependabot\\ListSelectedReposForOrgSecret\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrgHook', '\\ApiClients\\Client\\GitHub\\Schema\\OrgHook\\Config' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\RedeliverWebhookDelivery\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ApiInsightsSummaryStats' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\ListAppInstallations\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Installations()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\InteractionLimitResponse' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀InteractionLimits()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationInvitation' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\GetCodespacesForUserInOrg\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\DeleteFromOrganization\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Codespace', '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceMachine', '\\ApiClients\\Client\\GitHub\\Schema\\Codespace\\GitStatus', '\\ApiClients\\Client\\GitHub\\Schema\\Codespace\\RuntimeConstraints' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CopilotSeatDetails', '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationSimple' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrgMembership', '\\ApiClients\\Client\\GitHub\\Schema\\OrgMembership\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Migration' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\ListOrgRoles\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationRole' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\ConvertMemberToOutsideCollaborator\\Response\\ApplicationJson\\Accepted\\Application\\Json', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\RemoveOutsideCollaborator\\Response\\ApplicationJson\\UnprocessableEntity' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Package' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PackageVersion', '\\ApiClients\\Client\\GitHub\\Schema\\PackageVersion\\Metadata', '\\ApiClients\\Client\\GitHub\\Schema\\PackageVersion\\Metadata\\Container', '\\ApiClients\\Client\\GitHub\\Schema\\PackageVersion\\Metadata\\Docker' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\ReviewPatGrantRequestsInBulk\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\UpdatePatAccesses\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Projects()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CustomProperty' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\FullRepository', '\\ApiClients\\Client\\GitHub\\Schema\\FullRepository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\LicenseSimple', '\\ApiClients\\Client\\GitHub\\Schema\\Repository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\CodeOfConductSimple', '\\ApiClients\\Client\\GitHub\\Schema\\FullRepository\\CustomProperties' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Repos()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryRuleset', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryRuleset\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryRuleset\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryRuleset\\Links\\Html' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\RuleSuite' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites🌀RuleSuiteId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsBillingUsage', '\\ApiClients\\Client\\GitHub\\Schema\\ActionsBillingUsage\\MinutesUsedBreakdown' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PackagesBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CombinedBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamFull', '\\ApiClients\\Client\\GitHub\\Schema\\TeamSimple', '\\ApiClients\\Client\\GitHub\\Schema\\TeamOrganization', '\\ApiClients\\Client\\GitHub\\Schema\\TeamOrganization\\Plan' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamDiscussion', '\\ApiClients\\Client\\GitHub\\Schema\\ReactionRollup' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamProject', '\\ApiClients\\Client\\GitHub\\Schema\\TeamProject\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Teams\\AddOrUpdateProjectPermissionsInOrg\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamRepository', '\\ApiClients\\Client\\GitHub\\Schema\\TeamRepository\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ProjectCard', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\DeleteCard\\Response\\ApplicationJson\\Forbidden' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\Created\\Application\\Json', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\Forbidden', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\ServiceUnavailable' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\CreateCard\\Response\\ApplicationJson\\ServiceUnavailable\\Application\\Json' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\MoveColumn\\Response\\ApplicationJson\\Created\\Application\\Json' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Moves()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\Delete\\Response\\ApplicationJson\\Forbidden\\Application\\Json', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\Update\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Projects🌀ProjectId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\RateLimitOverview', '\\ApiClients\\Client\\GitHub\\Schema\\RateLimitOverview\\Resources', '\\ApiClients\\Client\\GitHub\\Schema\\RateLimit' => $this->getObjectMapperOperation🌀RateLimit()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\Delete\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListArtifactsForRepo\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Artifact', '\\ApiClients\\Client\\GitHub\\Schema\\Artifact\\WorkflowRun' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsCacheUsageByRepository' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsCacheList' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Job' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OidcCustomSubRepo' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoOrganizationSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoOrganizationVariables\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsWorkflowAccessToRepository' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelfHostedRunnersForRepo\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListWorkflowRunsForRepo\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleCommit', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleCommit\\Committer' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListWorkflowRunArtifacts\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListJobsForWorkflowRunAttempt\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListJobsForWorkflowRun\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Ubuntu', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Macos', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Windows' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoSecrets\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsSecret' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoVariables\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsVariable' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoWorkflows\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListWorkflowRuns\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage\\Billable', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage\\Billable\\Ubuntu', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage\\Billable\\Macos', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage\\Billable\\Windows' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\CreateAttestation\\Response\\ApplicationJson\\Created' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Attestations()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\ListAttestations\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Attestations🌀SubjectDigest()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Autolink' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CheckAutomatedSecurityFixes' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\BranchWithProtection', '\\ApiClients\\Client\\GitHub\\Schema\\Commit', '\\ApiClients\\Client\\GitHub\\Schema\\Commit\\Commit', '\\ApiClients\\Client\\GitHub\\Schema\\GitUser', '\\ApiClients\\Client\\GitHub\\Schema\\Commit\\Commit\\Tree', '\\ApiClients\\Client\\GitHub\\Schema\\Verification', '\\ApiClients\\Client\\GitHub\\Schema\\Commit\\Stats', '\\ApiClients\\Client\\GitHub\\Schema\\BranchWithProtection\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchRequiredStatusCheck', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchAdminEnforced', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchPullRequestReview', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchPullRequestReview\\DismissalRestrictions', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchPullRequestReview\\BypassPullRequestAllowances', '\\ApiClients\\Client\\GitHub\\Schema\\BranchRestrictionPolicy', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\RequiredLinearHistory', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\AllowForcePushes', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\AllowDeletions', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\BlockCreations', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\RequiredConversationResolution', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\RequiredSignatures', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\LockBranch', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\AllowForkSyncing' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch', '\\ApiClients\\Client\\GitHub\\Schema\\StatusCheckPolicy', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredPullRequestReviews', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\DismissalRestrictions', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\BypassPullRequestAllowances', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredSignatures', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\EnforceAdmins', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredLinearHistory', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\AllowForcePushes', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\AllowDeletions', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredConversationResolution', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\BlockCreations', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\LockBranch', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\AllowForkSyncing' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CheckRun', '\\ApiClients\\Client\\GitHub\\Schema\\CheckRun\\Output', '\\ApiClients\\Client\\GitHub\\Schema\\CheckRun\\CheckSuite', '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentSimple' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CheckSuitePreference', '\\ApiClients\\Client\\GitHub\\Schema\\CheckSuitePreference\\Preferences' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Checks\\ListForSuite\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlert', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertRule', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAnalysisTool', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertInstance', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertInstance\\Message', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertLocation' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAnalysis', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\CodeScanning\\GetAnalysis\\Response\\ApplicationJsonSarif\\Ok\\Application\\JsonSarif', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAnalysisDeletion' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningCodeqlDatabase' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningVariantAnalysis', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleRepository', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningVariantAnalysis\\SkippedRepositories', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningVariantAnalysisSkippedRepoGroup', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningVariantAnalysis\\SkippedRepositories\\NotFoundRepos' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningVariantAnalysisRepoTask' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses🌀CodeqlVariantAnalysisId🌀Repos🌀RepoOwner🌀RepoName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningDefaultSetup', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningDefaultSetupUpdateResponse' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningSarifsStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeSecurityConfigurationForRepository' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeSecurityConfiguration()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeownersErrors' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListInRepositoryForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListDevcontainersInRepositoryForAuthenticatedUser\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\RepoMachinesForAuthenticatedUser\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\PreFlightWithRepoForAuthenticatedUser\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\PreFlightWithRepoForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Defaults' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesPermissionsCheckForDevcontainer' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀PermissionsCheck()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListRepoSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepoCodespacesSecret' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryCollaboratorPermission', '\\ApiClients\\Client\\GitHub\\Schema\\Collaborator', '\\ApiClients\\Client\\GitHub\\Schema\\Collaborator\\Permissions' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Checks\\ListForRef\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Checks\\ListSuitesForRef\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CombinedCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CommunityProfile', '\\ApiClients\\Client\\GitHub\\Schema\\CommunityProfile\\Files', '\\ApiClients\\Client\\GitHub\\Schema\\CommunityHealthFile' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Community🌀Profile()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ContentTree', '\\ApiClients\\Client\\GitHub\\Schema\\ContentTree\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Content', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Content\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit\\Tree', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlert', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlert\\Dependency', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertPackage', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory\\Cvss', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityVulnerability', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityVulnerability\\FirstPatchedVersion' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Dependabot\\ListRepoSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\DependabotSecret' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\DependencyGraphSpdxSbom', '\\ApiClients\\Client\\GitHub\\Schema\\DependencyGraphSpdxSbom\\Sbom', '\\ApiClients\\Client\\GitHub\\Schema\\DependencyGraphSpdxSbom\\Sbom\\CreationInfo' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\DependencyGraph\\CreateRepositorySnapshot\\Response\\ApplicationJson\\Created' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Snapshots()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Deployment', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\CreateDeployment\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetAllEnvironments\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Environment', '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentBranchPolicySettings' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\ListDeploymentBranchPolicies\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentBranchPolicy' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetAllDeploymentProtectionRules\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentProtectionRule', '\\ApiClients\\Client\\GitHub\\Schema\\CustomDeploymentRuleApp' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\ListCustomDeploymentRuleIntegrations\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀Apps()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListEnvironmentSecrets\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListEnvironmentVariables\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit', '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit\\Tree', '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitRef', '\\ApiClients\\Client\\GitHub\\Schema\\GitRef\\Object_' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitTag', '\\ApiClients\\Client\\GitHub\\Schema\\GitTag\\Tagger', '\\ApiClients\\Client\\GitHub\\Schema\\GitTag\\Object_' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitTree' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Hook', '\\ApiClients\\Client\\GitHub\\Schema\\HookResponse' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\RedeliverWebhookDelivery\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Import' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PorterAuthor' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors🌀AuthorId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\SubIssuesSummary' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\IssueComment' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\IssueEvent', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventLabel', '\\ApiClients\\Client\\GitHub\\Schema\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\Team\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventDismissedReview', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventMilestone', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventProjectCard', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventRename' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Languages()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\LicenseContent', '\\ApiClients\\Client\\GitHub\\Schema\\LicenseContent\\Links' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀License()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\MergedUpstream' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀MergeUpstream()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Activity\\MarkRepoNotificationsAsRead\\Response\\ApplicationJson\\Accepted' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Page', '\\ApiClients\\Client\\GitHub\\Schema\\PagesSourceHash', '\\ApiClients\\Client\\GitHub\\Schema\\PagesHttpsCertificate' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PageBuild', '\\ApiClients\\Client\\GitHub\\Schema\\PageBuild\\Error' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PageDeployment' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PagesDeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PagesHealthCheck', '\\ApiClients\\Client\\GitHub\\Schema\\PagesHealthCheck\\Domain', '\\ApiClients\\Client\\GitHub\\Schema\\PagesHealthCheck\\AltDomain' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Health()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\CheckPrivateVulnerabilityReporting\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\Link', '\\ApiClients\\Client\\GitHub\\Schema\\AutoMerge' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestMergeResult', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Pulls\\Merge\\Response\\ApplicationJson\\MethodNotAllowed\\Application\\Json', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Pulls\\Merge\\Response\\ApplicationJson\\Conflict\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewRequest', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestSimple', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestSimple\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestSimple\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestSimple\\Links' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReview', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReview\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReview\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReview\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Pulls\\UpdateBranch\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ContentFile', '\\ApiClients\\Client\\GitHub\\Schema\\ContentFile\\Links' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Release' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ReleaseNotesContent' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀GenerateNotes()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\SecretScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\SecretScanningPushProtectionBypass' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀PushProtectionBypasses()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\SecretScanningScanHistory' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀ScanHistory()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryAdvisory', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryAdvisory\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryAdvisory\\Publisher', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryAdvisory\\Submission', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryAdvisory\\Cvss', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryAdvisory\\PrivateFork' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\SecurityAdvisories\\CreateRepositoryAdvisoryCveRequest\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetCodeFrequencyStats\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetCommitActivityStats\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetContributorsStats\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\TagProtection' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CloneTraffic' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Clones()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ViewTraffic' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Views()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Code\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Code()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Commits\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Commits()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\IssuesAndPullRequests\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Issues()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Labels\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Labels()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Repos\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Topics\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Topics()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Users\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Users()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Teams\\AddOrUpdateProjectPermissionsLegacy\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PrivateUser', '\\ApiClients\\Client\\GitHub\\Schema\\PrivateUser\\Plan' => $this->getObjectMapperOperation🌀User()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Codespaces()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListSecretsForAuthenticatedUser\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesUserPublicKey' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesSecret' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListRepositoriesForSecretForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\DeleteForAuthenticatedUser\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceExportDetails' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\CodespaceMachinesForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Machines()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceWithFullRepository', '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceWithFullRepository\\GitStatus', '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceWithFullRepository\\RuntimeConstraints' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Publish()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\GpgKey' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Apps\\ListInstallationsForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Installations()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\SshSigningKey' => $this->getObjectMapperOperation🌀User🌀SshSigningKeys()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Users\\ListAttestations\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Users🌀Username🌀Attestations🌀SubjectDigest()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Hovercard' => $this->getObjectMapperOperation🌀Users🌀Username🌀Hovercard()->serializeObject($object),
        };
    }

    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            (yield $index => $this->serializeObject($object));
        }
    }

    public function getObjectMapperOperation🌀Root(): Root
    {
        if ($this->operation🌀Root instanceof Root === false) {
            $this->operation🌀Root = new Root();
        }

        return $this->operation🌀Root;
    }

    public function getObjectMapperOperation🌀Advisories(): Advisories
    {
        if ($this->operation🌀Advisories instanceof Advisories === false) {
            $this->operation🌀Advisories = new Advisories();
        }

        return $this->operation🌀Advisories;
    }

    public function getObjectMapperOperation🌀Advisories🌀GhsaId(): GhsaId
    {
        if ($this->operation🌀Advisories🌀GhsaId instanceof GhsaId === false) {
            $this->operation🌀Advisories🌀GhsaId = new GhsaId();
        }

        return $this->operation🌀Advisories🌀GhsaId;
    }

    public function getObjectMapperOperation🌀App(): App
    {
        if ($this->operation🌀App instanceof App === false) {
            $this->operation🌀App = new App();
        }

        return $this->operation🌀App;
    }

    public function getObjectMapperOperation🌀AppManifests🌀Code🌀Conversions(): Conversions
    {
        if ($this->operation🌀AppManifests🌀Code🌀Conversions instanceof Conversions === false) {
            $this->operation🌀AppManifests🌀Code🌀Conversions = new Conversions();
        }

        return $this->operation🌀AppManifests🌀Code🌀Conversions;
    }

    public function getObjectMapperOperation🌀App🌀Hook🌀Config(): Config
    {
        if ($this->operation🌀App🌀Hook🌀Config instanceof Config === false) {
            $this->operation🌀App🌀Hook🌀Config = new Config();
        }

        return $this->operation🌀App🌀Hook🌀Config;
    }

    public function getObjectMapperOperation🌀App🌀Hook🌀Deliveries(): Deliveries
    {
        if ($this->operation🌀App🌀Hook🌀Deliveries instanceof Deliveries === false) {
            $this->operation🌀App🌀Hook🌀Deliveries = new Deliveries();
        }

        return $this->operation🌀App🌀Hook🌀Deliveries;
    }

    public function getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId(): DeliveryId
    {
        if ($this->operation🌀App🌀Hook🌀Deliveries🌀DeliveryId instanceof DeliveryId === false) {
            $this->operation🌀App🌀Hook🌀Deliveries🌀DeliveryId = new DeliveryId();
        }

        return $this->operation🌀App🌀Hook🌀Deliveries🌀DeliveryId;
    }

    public function getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts(): Attempts
    {
        if ($this->operation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts instanceof Attempts === false) {
            $this->operation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts = new Attempts();
        }

        return $this->operation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts;
    }

    public function getObjectMapperOperation🌀App🌀InstallationRequests(): InstallationRequests
    {
        if ($this->operation🌀App🌀InstallationRequests instanceof InstallationRequests === false) {
            $this->operation🌀App🌀InstallationRequests = new InstallationRequests();
        }

        return $this->operation🌀App🌀InstallationRequests;
    }

    public function getObjectMapperOperation🌀App🌀Installations(): Installations
    {
        if ($this->operation🌀App🌀Installations instanceof Installations === false) {
            $this->operation🌀App🌀Installations = new Installations();
        }

        return $this->operation🌀App🌀Installations;
    }

    public function getObjectMapperOperation🌀App🌀Installations🌀InstallationId(): InstallationId
    {
        if ($this->operation🌀App🌀Installations🌀InstallationId instanceof InstallationId === false) {
            $this->operation🌀App🌀Installations🌀InstallationId = new InstallationId();
        }

        return $this->operation🌀App🌀Installations🌀InstallationId;
    }

    public function getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀AccessTokens(): AccessTokens
    {
        if ($this->operation🌀App🌀Installations🌀InstallationId🌀AccessTokens instanceof AccessTokens === false) {
            $this->operation🌀App🌀Installations🌀InstallationId🌀AccessTokens = new AccessTokens();
        }

        return $this->operation🌀App🌀Installations🌀InstallationId🌀AccessTokens;
    }

    public function getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀Suspended(): Suspended
    {
        if ($this->operation🌀App🌀Installations🌀InstallationId🌀Suspended instanceof Suspended === false) {
            $this->operation🌀App🌀Installations🌀InstallationId🌀Suspended = new Suspended();
        }

        return $this->operation🌀App🌀Installations🌀InstallationId🌀Suspended;
    }

    public function getObjectMapperOperation🌀Applications🌀ClientId🌀Grant(): Grant
    {
        if ($this->operation🌀Applications🌀ClientId🌀Grant instanceof Grant === false) {
            $this->operation🌀Applications🌀ClientId🌀Grant = new Grant();
        }

        return $this->operation🌀Applications🌀ClientId🌀Grant;
    }

    public function getObjectMapperOperation🌀Applications🌀ClientId🌀Token(): Token
    {
        if ($this->operation🌀Applications🌀ClientId🌀Token instanceof Token === false) {
            $this->operation🌀Applications🌀ClientId🌀Token = new Token();
        }

        return $this->operation🌀Applications🌀ClientId🌀Token;
    }

    public function getObjectMapperOperation🌀Applications🌀ClientId🌀Token🌀Scoped(): Scoped
    {
        if ($this->operation🌀Applications🌀ClientId🌀Token🌀Scoped instanceof Scoped === false) {
            $this->operation🌀Applications🌀ClientId🌀Token🌀Scoped = new Scoped();
        }

        return $this->operation🌀Applications🌀ClientId🌀Token🌀Scoped;
    }

    public function getObjectMapperOperation🌀Apps🌀AppSlug(): AppSlug
    {
        if ($this->operation🌀Apps🌀AppSlug instanceof AppSlug === false) {
            $this->operation🌀Apps🌀AppSlug = new AppSlug();
        }

        return $this->operation🌀Apps🌀AppSlug;
    }

    public function getObjectMapperOperation🌀Assignments🌀AssignmentId(): AssignmentId
    {
        if ($this->operation🌀Assignments🌀AssignmentId instanceof AssignmentId === false) {
            $this->operation🌀Assignments🌀AssignmentId = new AssignmentId();
        }

        return $this->operation🌀Assignments🌀AssignmentId;
    }

    public function getObjectMapperOperation🌀Assignments🌀AssignmentId🌀AcceptedAssignments(): AcceptedAssignments
    {
        if ($this->operation🌀Assignments🌀AssignmentId🌀AcceptedAssignments instanceof AcceptedAssignments === false) {
            $this->operation🌀Assignments🌀AssignmentId🌀AcceptedAssignments = new AcceptedAssignments();
        }

        return $this->operation🌀Assignments🌀AssignmentId🌀AcceptedAssignments;
    }

    public function getObjectMapperOperation🌀Assignments🌀AssignmentId🌀Grades(): Grades
    {
        if ($this->operation🌀Assignments🌀AssignmentId🌀Grades instanceof Grades === false) {
            $this->operation🌀Assignments🌀AssignmentId🌀Grades = new Grades();
        }

        return $this->operation🌀Assignments🌀AssignmentId🌀Grades;
    }

    public function getObjectMapperOperation🌀Classrooms(): Classrooms
    {
        if ($this->operation🌀Classrooms instanceof Classrooms === false) {
            $this->operation🌀Classrooms = new Classrooms();
        }

        return $this->operation🌀Classrooms;
    }

    public function getObjectMapperOperation🌀Classrooms🌀ClassroomId(): ClassroomId
    {
        if ($this->operation🌀Classrooms🌀ClassroomId instanceof ClassroomId === false) {
            $this->operation🌀Classrooms🌀ClassroomId = new ClassroomId();
        }

        return $this->operation🌀Classrooms🌀ClassroomId;
    }

    public function getObjectMapperOperation🌀Classrooms🌀ClassroomId🌀Assignments(): Assignments
    {
        if ($this->operation🌀Classrooms🌀ClassroomId🌀Assignments instanceof Assignments === false) {
            $this->operation🌀Classrooms🌀ClassroomId🌀Assignments = new Assignments();
        }

        return $this->operation🌀Classrooms🌀ClassroomId🌀Assignments;
    }

    public function getObjectMapperOperation🌀CodesOfConduct(): CodesOfConduct
    {
        if ($this->operation🌀CodesOfConduct instanceof CodesOfConduct === false) {
            $this->operation🌀CodesOfConduct = new CodesOfConduct();
        }

        return $this->operation🌀CodesOfConduct;
    }

    public function getObjectMapperOperation🌀CodesOfConduct🌀Key(): Key
    {
        if ($this->operation🌀CodesOfConduct🌀Key instanceof Key === false) {
            $this->operation🌀CodesOfConduct🌀Key = new Key();
        }

        return $this->operation🌀CodesOfConduct🌀Key;
    }

    public function getObjectMapperOperation🌀Emojis(): Emojis
    {
        if ($this->operation🌀Emojis instanceof Emojis === false) {
            $this->operation🌀Emojis = new Emojis();
        }

        return $this->operation🌀Emojis;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Copilot🌀Billing🌀Seats(): Seats
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Copilot🌀Billing🌀Seats instanceof Seats === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Copilot🌀Billing🌀Seats = new Seats();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Copilot🌀Billing🌀Seats;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Copilot🌀Metrics(): Metrics
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Copilot🌀Metrics instanceof Metrics === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Copilot🌀Metrics = new Metrics();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Copilot🌀Metrics;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Copilot🌀Usage(): Usage
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Copilot🌀Usage instanceof Usage === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Copilot🌀Usage = new Usage();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Copilot🌀Usage;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Dependabot🌀Alerts(): Alerts
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Dependabot🌀Alerts instanceof Alerts === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Dependabot🌀Alerts = new Alerts();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Dependabot🌀Alerts;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Enterprises\Enterprise\SecretScanning\Alerts
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Enterprises\Enterprise\SecretScanning\Alerts === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Enterprises\Enterprise\SecretScanning\Alerts();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Team🌀TeamSlug🌀Copilot🌀Metrics(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Enterprises\Enterprise\Team\TeamSlug\Copilot\Metrics
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Team🌀TeamSlug🌀Copilot🌀Metrics instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Enterprises\Enterprise\Team\TeamSlug\Copilot\Metrics === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Team🌀TeamSlug🌀Copilot🌀Metrics = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Enterprises\Enterprise\Team\TeamSlug\Copilot\Metrics();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Team🌀TeamSlug🌀Copilot🌀Metrics;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Team🌀TeamSlug🌀Copilot🌀Usage(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Enterprises\Enterprise\Team\TeamSlug\Copilot\Usage
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Team🌀TeamSlug🌀Copilot🌀Usage instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Enterprises\Enterprise\Team\TeamSlug\Copilot\Usage === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Team🌀TeamSlug🌀Copilot🌀Usage = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Enterprises\Enterprise\Team\TeamSlug\Copilot\Usage();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Team🌀TeamSlug🌀Copilot🌀Usage;
    }

    public function getObjectMapperOperation🌀Events(): Events
    {
        if ($this->operation🌀Events instanceof Events === false) {
            $this->operation🌀Events = new Events();
        }

        return $this->operation🌀Events;
    }

    public function getObjectMapperOperation🌀Feeds(): Feeds
    {
        if ($this->operation🌀Feeds instanceof Feeds === false) {
            $this->operation🌀Feeds = new Feeds();
        }

        return $this->operation🌀Feeds;
    }

    public function getObjectMapperOperation🌀Gists(): Gists
    {
        if ($this->operation🌀Gists instanceof Gists === false) {
            $this->operation🌀Gists = new Gists();
        }

        return $this->operation🌀Gists;
    }

    public function getObjectMapperOperation🌀Gists🌀Public_(): Public_
    {
        if ($this->operation🌀Gists🌀Public_ instanceof Public_ === false) {
            $this->operation🌀Gists🌀Public_ = new Public_();
        }

        return $this->operation🌀Gists🌀Public_;
    }

    public function getObjectMapperOperation🌀Gists🌀Starred(): Starred
    {
        if ($this->operation🌀Gists🌀Starred instanceof Starred === false) {
            $this->operation🌀Gists🌀Starred = new Starred();
        }

        return $this->operation🌀Gists🌀Starred;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId(): GistId
    {
        if ($this->operation🌀Gists🌀GistId instanceof GistId === false) {
            $this->operation🌀Gists🌀GistId = new GistId();
        }

        return $this->operation🌀Gists🌀GistId;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId🌀Comments(): Comments
    {
        if ($this->operation🌀Gists🌀GistId🌀Comments instanceof Comments === false) {
            $this->operation🌀Gists🌀GistId🌀Comments = new Comments();
        }

        return $this->operation🌀Gists🌀GistId🌀Comments;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId(): CommentId
    {
        if ($this->operation🌀Gists🌀GistId🌀Comments🌀CommentId instanceof CommentId === false) {
            $this->operation🌀Gists🌀GistId🌀Comments🌀CommentId = new CommentId();
        }

        return $this->operation🌀Gists🌀GistId🌀Comments🌀CommentId;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId🌀Commits(): Commits
    {
        if ($this->operation🌀Gists🌀GistId🌀Commits instanceof Commits === false) {
            $this->operation🌀Gists🌀GistId🌀Commits = new Commits();
        }

        return $this->operation🌀Gists🌀GistId🌀Commits;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId🌀Forks(): Forks
    {
        if ($this->operation🌀Gists🌀GistId🌀Forks instanceof Forks === false) {
            $this->operation🌀Gists🌀GistId🌀Forks = new Forks();
        }

        return $this->operation🌀Gists🌀GistId🌀Forks;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId🌀Star(): Star
    {
        if ($this->operation🌀Gists🌀GistId🌀Star instanceof Star === false) {
            $this->operation🌀Gists🌀GistId🌀Star = new Star();
        }

        return $this->operation🌀Gists🌀GistId🌀Star;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId🌀Sha(): Sha
    {
        if ($this->operation🌀Gists🌀GistId🌀Sha instanceof Sha === false) {
            $this->operation🌀Gists🌀GistId🌀Sha = new Sha();
        }

        return $this->operation🌀Gists🌀GistId🌀Sha;
    }

    public function getObjectMapperOperation🌀Gitignore🌀Templates(): Templates
    {
        if ($this->operation🌀Gitignore🌀Templates instanceof Templates === false) {
            $this->operation🌀Gitignore🌀Templates = new Templates();
        }

        return $this->operation🌀Gitignore🌀Templates;
    }

    public function getObjectMapperOperation🌀Gitignore🌀Templates🌀Name(): Name
    {
        if ($this->operation🌀Gitignore🌀Templates🌀Name instanceof Name === false) {
            $this->operation🌀Gitignore🌀Templates🌀Name = new Name();
        }

        return $this->operation🌀Gitignore🌀Templates🌀Name;
    }

    public function getObjectMapperOperation🌀Installation🌀Repositories(): Repositories
    {
        if ($this->operation🌀Installation🌀Repositories instanceof Repositories === false) {
            $this->operation🌀Installation🌀Repositories = new Repositories();
        }

        return $this->operation🌀Installation🌀Repositories;
    }

    public function getObjectMapperOperation🌀Installation🌀Token(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Installation\Token
    {
        if ($this->operation🌀Installation🌀Token instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Installation\Token === false) {
            $this->operation🌀Installation🌀Token = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Installation\Token();
        }

        return $this->operation🌀Installation🌀Token;
    }

    public function getObjectMapperOperation🌀Issues(): Issues
    {
        if ($this->operation🌀Issues instanceof Issues === false) {
            $this->operation🌀Issues = new Issues();
        }

        return $this->operation🌀Issues;
    }

    public function getObjectMapperOperation🌀Licenses(): Licenses
    {
        if ($this->operation🌀Licenses instanceof Licenses === false) {
            $this->operation🌀Licenses = new Licenses();
        }

        return $this->operation🌀Licenses;
    }

    public function getObjectMapperOperation🌀Licenses🌀License(): License
    {
        if ($this->operation🌀Licenses🌀License instanceof License === false) {
            $this->operation🌀Licenses🌀License = new License();
        }

        return $this->operation🌀Licenses🌀License;
    }

    public function getObjectMapperOperation🌀Markdown(): Markdown
    {
        if ($this->operation🌀Markdown instanceof Markdown === false) {
            $this->operation🌀Markdown = new Markdown();
        }

        return $this->operation🌀Markdown;
    }

    public function getObjectMapperOperation🌀Markdown🌀Raw(): Raw
    {
        if ($this->operation🌀Markdown🌀Raw instanceof Raw === false) {
            $this->operation🌀Markdown🌀Raw = new Raw();
        }

        return $this->operation🌀Markdown🌀Raw;
    }

    public function getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀AccountId(): AccountId
    {
        if ($this->operation🌀MarketplaceListing🌀Accounts🌀AccountId instanceof AccountId === false) {
            $this->operation🌀MarketplaceListing🌀Accounts🌀AccountId = new AccountId();
        }

        return $this->operation🌀MarketplaceListing🌀Accounts🌀AccountId;
    }

    public function getObjectMapperOperation🌀MarketplaceListing🌀Plans(): Plans
    {
        if ($this->operation🌀MarketplaceListing🌀Plans instanceof Plans === false) {
            $this->operation🌀MarketplaceListing🌀Plans = new Plans();
        }

        return $this->operation🌀MarketplaceListing🌀Plans;
    }

    public function getObjectMapperOperation🌀MarketplaceListing🌀Plans🌀PlanId🌀Accounts(): Accounts
    {
        if ($this->operation🌀MarketplaceListing🌀Plans🌀PlanId🌀Accounts instanceof Accounts === false) {
            $this->operation🌀MarketplaceListing🌀Plans🌀PlanId🌀Accounts = new Accounts();
        }

        return $this->operation🌀MarketplaceListing🌀Plans🌀PlanId🌀Accounts;
    }

    public function getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Accounts🌀AccountId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Accounts\AccountId
    {
        if ($this->operation🌀MarketplaceListing🌀Stubbed🌀Accounts🌀AccountId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Accounts\AccountId === false) {
            $this->operation🌀MarketplaceListing🌀Stubbed🌀Accounts🌀AccountId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Accounts\AccountId();
        }

        return $this->operation🌀MarketplaceListing🌀Stubbed🌀Accounts🌀AccountId;
    }

    public function getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Plans
    {
        if ($this->operation🌀MarketplaceListing🌀Stubbed🌀Plans instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Plans === false) {
            $this->operation🌀MarketplaceListing🌀Stubbed🌀Plans = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Plans();
        }

        return $this->operation🌀MarketplaceListing🌀Stubbed🌀Plans;
    }

    public function getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans🌀PlanId🌀Accounts(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Plans\PlanId\Accounts
    {
        if ($this->operation🌀MarketplaceListing🌀Stubbed🌀Plans🌀PlanId🌀Accounts instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Plans\PlanId\Accounts === false) {
            $this->operation🌀MarketplaceListing🌀Stubbed🌀Plans🌀PlanId🌀Accounts = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Plans\PlanId\Accounts();
        }

        return $this->operation🌀MarketplaceListing🌀Stubbed🌀Plans🌀PlanId🌀Accounts;
    }

    public function getObjectMapperOperation🌀Meta(): Meta
    {
        if ($this->operation🌀Meta instanceof Meta === false) {
            $this->operation🌀Meta = new Meta();
        }

        return $this->operation🌀Meta;
    }

    public function getObjectMapperOperation🌀Networks🌀Owner🌀Repo🌀Events(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Networks\Owner\Repo\Events
    {
        if ($this->operation🌀Networks🌀Owner🌀Repo🌀Events instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Networks\Owner\Repo\Events === false) {
            $this->operation🌀Networks🌀Owner🌀Repo🌀Events = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Networks\Owner\Repo\Events();
        }

        return $this->operation🌀Networks🌀Owner🌀Repo🌀Events;
    }

    public function getObjectMapperOperation🌀Notifications(): Notifications
    {
        if ($this->operation🌀Notifications instanceof Notifications === false) {
            $this->operation🌀Notifications = new Notifications();
        }

        return $this->operation🌀Notifications;
    }

    public function getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId(): ThreadId
    {
        if ($this->operation🌀Notifications🌀Threads🌀ThreadId instanceof ThreadId === false) {
            $this->operation🌀Notifications🌀Threads🌀ThreadId = new ThreadId();
        }

        return $this->operation🌀Notifications🌀Threads🌀ThreadId;
    }

    public function getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription(): Subscription
    {
        if ($this->operation🌀Notifications🌀Threads🌀ThreadId🌀Subscription instanceof Subscription === false) {
            $this->operation🌀Notifications🌀Threads🌀ThreadId🌀Subscription = new Subscription();
        }

        return $this->operation🌀Notifications🌀Threads🌀ThreadId🌀Subscription;
    }

    public function getObjectMapperOperation🌀Octocat(): Octocat
    {
        if ($this->operation🌀Octocat instanceof Octocat === false) {
            $this->operation🌀Octocat = new Octocat();
        }

        return $this->operation🌀Octocat;
    }

    public function getObjectMapperOperation🌀Organizations(): Organizations
    {
        if ($this->operation🌀Organizations instanceof Organizations === false) {
            $this->operation🌀Organizations = new Organizations();
        }

        return $this->operation🌀Organizations;
    }

    public function getObjectMapperOperation🌀Organizations🌀Org🌀Settings🌀Billing🌀Usage(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Organizations\Org\Settings\Billing\Usage
    {
        if ($this->operation🌀Organizations🌀Org🌀Settings🌀Billing🌀Usage instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Organizations\Org\Settings\Billing\Usage === false) {
            $this->operation🌀Organizations🌀Org🌀Settings🌀Billing🌀Usage = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Organizations\Org\Settings\Billing\Usage();
        }

        return $this->operation🌀Organizations🌀Org🌀Settings🌀Billing🌀Usage;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org(): Org
    {
        if ($this->operation🌀Orgs🌀Org instanceof Org === false) {
            $this->operation🌀Orgs🌀Org = new Org();
        }

        return $this->operation🌀Orgs🌀Org;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Cache\Usage
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Cache\Usage === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Cache\Usage();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository(): UsageByRepository
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository instanceof UsageByRepository === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository = new UsageByRepository();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub(): Sub
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub instanceof Sub === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub = new Sub();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions(): Permissions
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Permissions instanceof Permissions === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions = new Permissions();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId(): RepositoryId
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId instanceof RepositoryId === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId = new RepositoryId();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions(): SelectedActions
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions instanceof SelectedActions === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions = new SelectedActions();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow(): Workflow
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow instanceof Workflow === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow = new Workflow();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups(): RunnerGroups
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups instanceof RunnerGroups === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups = new RunnerGroups();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId(): RunnerGroupId
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId instanceof RunnerGroupId === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId = new RunnerGroupId();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories🌀RepositoryId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Repositories\RepositoryId
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories🌀RepositoryId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Repositories\RepositoryId === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories🌀RepositoryId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Repositories\RepositoryId();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners(): Runners
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners instanceof Runners === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners = new Runners();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId(): RunnerId
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId instanceof RunnerId === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId = new RunnerId();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Runners
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Runners === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Runners();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads(): Downloads
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads instanceof Downloads === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads = new Downloads();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀GenerateJitconfig(): GenerateJitconfig
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀GenerateJitconfig instanceof GenerateJitconfig === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀GenerateJitconfig = new GenerateJitconfig();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀GenerateJitconfig;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken(): RegistrationToken
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken instanceof RegistrationToken === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken = new RegistrationToken();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken(): RemoveToken
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken instanceof RemoveToken === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken = new RemoveToken();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels(): Labels
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels instanceof Labels === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels = new Labels();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels\Name
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels\Name === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels\Name();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets(): Secrets
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Secrets instanceof Secrets === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets = new Secrets();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey(): PublicKey
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey instanceof PublicKey === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey = new PublicKey();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName(): SecretName
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName instanceof SecretName === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName = new SecretName();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories\RepositoryId
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories\RepositoryId === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories\RepositoryId();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables(): Variables
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Variables instanceof Variables === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Variables = new Variables();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Variables;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories🌀RepositoryId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories\RepositoryId
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories🌀RepositoryId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories\RepositoryId === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories🌀RepositoryId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories\RepositoryId();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Attestations🌀SubjectDigest(): SubjectDigest
    {
        if ($this->operation🌀Orgs🌀Org🌀Attestations🌀SubjectDigest instanceof SubjectDigest === false) {
            $this->operation🌀Orgs🌀Org🌀Attestations🌀SubjectDigest = new SubjectDigest();
        }

        return $this->operation🌀Orgs🌀Org🌀Attestations🌀SubjectDigest;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Blocks(): Blocks
    {
        if ($this->operation🌀Orgs🌀Org🌀Blocks instanceof Blocks === false) {
            $this->operation🌀Orgs🌀Org🌀Blocks = new Blocks();
        }

        return $this->operation🌀Orgs🌀Org🌀Blocks;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Blocks🌀Username(): Username
    {
        if ($this->operation🌀Orgs🌀Org🌀Blocks🌀Username instanceof Username === false) {
            $this->operation🌀Orgs🌀Org🌀Blocks🌀Username = new Username();
        }

        return $this->operation🌀Orgs🌀Org🌀Blocks🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀CodeScanning🌀Alerts(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeScanning\Alerts
    {
        if ($this->operation🌀Orgs🌀Org🌀CodeScanning🌀Alerts instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeScanning\Alerts === false) {
            $this->operation🌀Orgs🌀Org🌀CodeScanning🌀Alerts = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeScanning\Alerts();
        }

        return $this->operation🌀Orgs🌀Org🌀CodeScanning🌀Alerts;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations(): Configurations
    {
        if ($this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations instanceof Configurations === false) {
            $this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations = new Configurations();
        }

        return $this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀Defaults(): Defaults
    {
        if ($this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀Defaults instanceof Defaults === false) {
            $this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀Defaults = new Defaults();
        }

        return $this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀Defaults;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀Detach(): Detach
    {
        if ($this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀Detach instanceof Detach === false) {
            $this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀Detach = new Detach();
        }

        return $this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀Detach;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId(): ConfigurationId
    {
        if ($this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId instanceof ConfigurationId === false) {
            $this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId = new ConfigurationId();
        }

        return $this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Attach(): Attach
    {
        if ($this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Attach instanceof Attach === false) {
            $this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Attach = new Attach();
        }

        return $this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Attach;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Defaults(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations\ConfigurationId\Defaults
    {
        if ($this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Defaults instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations\ConfigurationId\Defaults === false) {
            $this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Defaults = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations\ConfigurationId\Defaults();
        }

        return $this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Defaults;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Repositories(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations\ConfigurationId\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Repositories instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations\ConfigurationId\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Repositories = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations\ConfigurationId\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces(): Codespaces
    {
        if ($this->operation🌀Orgs🌀Org🌀Codespaces instanceof Codespaces === false) {
            $this->operation🌀Orgs🌀Org🌀Codespaces = new Codespaces();
        }

        return $this->operation🌀Orgs🌀Org🌀Codespaces;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Access(): Access
    {
        if ($this->operation🌀Orgs🌀Org🌀Codespaces🌀Access instanceof Access === false) {
            $this->operation🌀Orgs🌀Org🌀Codespaces🌀Access = new Access();
        }

        return $this->operation🌀Orgs🌀Org🌀Codespaces🌀Access;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Access🌀SelectedUsers(): SelectedUsers
    {
        if ($this->operation🌀Orgs🌀Org🌀Codespaces🌀Access🌀SelectedUsers instanceof SelectedUsers === false) {
            $this->operation🌀Orgs🌀Org🌀Codespaces🌀Access🌀SelectedUsers = new SelectedUsers();
        }

        return $this->operation🌀Orgs🌀Org🌀Codespaces🌀Access🌀SelectedUsers;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets
    {
        if ($this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets === false) {
            $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets();
        }

        return $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\PublicKey
    {
        if ($this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\PublicKey === false) {
            $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\PublicKey();
        }

        return $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName
    {
        if ($this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName === false) {
            $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName();
        }

        return $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories\RepositoryId
    {
        if ($this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories\RepositoryId === false) {
            $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories\RepositoryId();
        }

        return $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing(): Billing
    {
        if ($this->operation🌀Orgs🌀Org🌀Copilot🌀Billing instanceof Billing === false) {
            $this->operation🌀Orgs🌀Org🌀Copilot🌀Billing = new Billing();
        }

        return $this->operation🌀Orgs🌀Org🌀Copilot🌀Billing;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\Seats
    {
        if ($this->operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\Seats === false) {
            $this->operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\Seats();
        }

        return $this->operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams(): SelectedTeams
    {
        if ($this->operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams instanceof SelectedTeams === false) {
            $this->operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams = new SelectedTeams();
        }

        return $this->operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedUsers
    {
        if ($this->operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedUsers === false) {
            $this->operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedUsers();
        }

        return $this->operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Metrics(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Copilot\Metrics
    {
        if ($this->operation🌀Orgs🌀Org🌀Copilot🌀Metrics instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Copilot\Metrics === false) {
            $this->operation🌀Orgs🌀Org🌀Copilot🌀Metrics = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Copilot\Metrics();
        }

        return $this->operation🌀Orgs🌀Org🌀Copilot🌀Metrics;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Usage(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Copilot\Usage
    {
        if ($this->operation🌀Orgs🌀Org🌀Copilot🌀Usage instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Copilot\Usage === false) {
            $this->operation🌀Orgs🌀Org🌀Copilot🌀Usage = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Copilot\Usage();
        }

        return $this->operation🌀Orgs🌀Org🌀Copilot🌀Usage;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Alerts(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Alerts
    {
        if ($this->operation🌀Orgs🌀Org🌀Dependabot🌀Alerts instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Alerts === false) {
            $this->operation🌀Orgs🌀Org🌀Dependabot🌀Alerts = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Alerts();
        }

        return $this->operation🌀Orgs🌀Org🌀Dependabot🌀Alerts;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets
    {
        if ($this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets === false) {
            $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets();
        }

        return $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\PublicKey
    {
        if ($this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\PublicKey === false) {
            $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\PublicKey();
        }

        return $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName
    {
        if ($this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName === false) {
            $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName();
        }

        return $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories\RepositoryId
    {
        if ($this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories\RepositoryId === false) {
            $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories\RepositoryId();
        }

        return $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Docker🌀Conflicts(): Conflicts
    {
        if ($this->operation🌀Orgs🌀Org🌀Docker🌀Conflicts instanceof Conflicts === false) {
            $this->operation🌀Orgs🌀Org🌀Docker🌀Conflicts = new Conflicts();
        }

        return $this->operation🌀Orgs🌀Org🌀Docker🌀Conflicts;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Events(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Events
    {
        if ($this->operation🌀Orgs🌀Org🌀Events instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Events === false) {
            $this->operation🌀Orgs🌀Org🌀Events = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Events();
        }

        return $this->operation🌀Orgs🌀Org🌀Events;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀FailedInvitations(): FailedInvitations
    {
        if ($this->operation🌀Orgs🌀Org🌀FailedInvitations instanceof FailedInvitations === false) {
            $this->operation🌀Orgs🌀Org🌀FailedInvitations = new FailedInvitations();
        }

        return $this->operation🌀Orgs🌀Org🌀FailedInvitations;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Hooks(): Hooks
    {
        if ($this->operation🌀Orgs🌀Org🌀Hooks instanceof Hooks === false) {
            $this->operation🌀Orgs🌀Org🌀Hooks = new Hooks();
        }

        return $this->operation🌀Orgs🌀Org🌀Hooks;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId(): HookId
    {
        if ($this->operation🌀Orgs🌀Org🌀Hooks🌀HookId instanceof HookId === false) {
            $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId = new HookId();
        }

        return $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Config
    {
        if ($this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Config === false) {
            $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Config();
        }

        return $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries
    {
        if ($this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries === false) {
            $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries();
        }

        return $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId
    {
        if ($this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId === false) {
            $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId();
        }

        return $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId\Attempts
    {
        if ($this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId\Attempts === false) {
            $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId\Attempts();
        }

        return $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings(): Pings
    {
        if ($this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings instanceof Pings === false) {
            $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings = new Pings();
        }

        return $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀RouteStats🌀ActorType🌀ActorId(): ActorId
    {
        if ($this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀RouteStats🌀ActorType🌀ActorId instanceof ActorId === false) {
            $this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀RouteStats🌀ActorType🌀ActorId = new ActorId();
        }

        return $this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀RouteStats🌀ActorType🌀ActorId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀SubjectStats(): SubjectStats
    {
        if ($this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀SubjectStats instanceof SubjectStats === false) {
            $this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀SubjectStats = new SubjectStats();
        }

        return $this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀SubjectStats;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats(): SummaryStats
    {
        if ($this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats instanceof SummaryStats === false) {
            $this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats = new SummaryStats();
        }

        return $this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats🌀Users🌀UserId(): UserId
    {
        if ($this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats🌀Users🌀UserId instanceof UserId === false) {
            $this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats🌀Users🌀UserId = new UserId();
        }

        return $this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats🌀Users🌀UserId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats🌀ActorType🌀ActorId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\SummaryStats\ActorType\ActorId
    {
        if ($this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats🌀ActorType🌀ActorId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\SummaryStats\ActorType\ActorId === false) {
            $this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats🌀ActorType🌀ActorId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\SummaryStats\ActorType\ActorId();
        }

        return $this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats🌀ActorType🌀ActorId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats(): TimeStats
    {
        if ($this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats instanceof TimeStats === false) {
            $this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats = new TimeStats();
        }

        return $this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats🌀Users🌀UserId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\TimeStats\Users\UserId
    {
        if ($this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats🌀Users🌀UserId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\TimeStats\Users\UserId === false) {
            $this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats🌀Users🌀UserId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\TimeStats\Users\UserId();
        }

        return $this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats🌀Users🌀UserId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats🌀ActorType🌀ActorId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\TimeStats\ActorType\ActorId
    {
        if ($this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats🌀ActorType🌀ActorId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\TimeStats\ActorType\ActorId === false) {
            $this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats🌀ActorType🌀ActorId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\TimeStats\ActorType\ActorId();
        }

        return $this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats🌀ActorType🌀ActorId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀UserStats🌀UserId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\UserStats\UserId
    {
        if ($this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀UserStats🌀UserId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\UserStats\UserId === false) {
            $this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀UserStats🌀UserId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\UserStats\UserId();
        }

        return $this->operation🌀Orgs🌀Org🌀Insights🌀Api🌀UserStats🌀UserId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Installation(): Installation
    {
        if ($this->operation🌀Orgs🌀Org🌀Installation instanceof Installation === false) {
            $this->operation🌀Orgs🌀Org🌀Installation = new Installation();
        }

        return $this->operation🌀Orgs🌀Org🌀Installation;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Installations(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Installations
    {
        if ($this->operation🌀Orgs🌀Org🌀Installations instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Installations === false) {
            $this->operation🌀Orgs🌀Org🌀Installations = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Installations();
        }

        return $this->operation🌀Orgs🌀Org🌀Installations;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀InteractionLimits(): InteractionLimits
    {
        if ($this->operation🌀Orgs🌀Org🌀InteractionLimits instanceof InteractionLimits === false) {
            $this->operation🌀Orgs🌀Org🌀InteractionLimits = new InteractionLimits();
        }

        return $this->operation🌀Orgs🌀Org🌀InteractionLimits;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Invitations(): Invitations
    {
        if ($this->operation🌀Orgs🌀Org🌀Invitations instanceof Invitations === false) {
            $this->operation🌀Orgs🌀Org🌀Invitations = new Invitations();
        }

        return $this->operation🌀Orgs🌀Org🌀Invitations;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Invitations🌀InvitationId(): InvitationId
    {
        if ($this->operation🌀Orgs🌀Org🌀Invitations🌀InvitationId instanceof InvitationId === false) {
            $this->operation🌀Orgs🌀Org🌀Invitations🌀InvitationId = new InvitationId();
        }

        return $this->operation🌀Orgs🌀Org🌀Invitations🌀InvitationId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Invitations🌀InvitationId🌀Teams(): Teams
    {
        if ($this->operation🌀Orgs🌀Org🌀Invitations🌀InvitationId🌀Teams instanceof Teams === false) {
            $this->operation🌀Orgs🌀Org🌀Invitations🌀InvitationId🌀Teams = new Teams();
        }

        return $this->operation🌀Orgs🌀Org🌀Invitations🌀InvitationId🌀Teams;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Issues(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Issues
    {
        if ($this->operation🌀Orgs🌀Org🌀Issues instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Issues === false) {
            $this->operation🌀Orgs🌀Org🌀Issues = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Issues();
        }

        return $this->operation🌀Orgs🌀Org🌀Issues;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Members(): Members
    {
        if ($this->operation🌀Orgs🌀Org🌀Members instanceof Members === false) {
            $this->operation🌀Orgs🌀Org🌀Members = new Members();
        }

        return $this->operation🌀Orgs🌀Org🌀Members;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Members\Username
    {
        if ($this->operation🌀Orgs🌀Org🌀Members🌀Username instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Members\Username === false) {
            $this->operation🌀Orgs🌀Org🌀Members🌀Username = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Members\Username();
        }

        return $this->operation🌀Orgs🌀Org🌀Members🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces
    {
        if ($this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces === false) {
            $this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces();
        }

        return $this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName(): CodespaceName
    {
        if ($this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName instanceof CodespaceName === false) {
            $this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName = new CodespaceName();
        }

        return $this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop(): Stop
    {
        if ($this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop instanceof Stop === false) {
            $this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop = new Stop();
        }

        return $this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot(): Copilot
    {
        if ($this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot instanceof Copilot === false) {
            $this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot = new Copilot();
        }

        return $this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Memberships\Username
    {
        if ($this->operation🌀Orgs🌀Org🌀Memberships🌀Username instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Memberships\Username === false) {
            $this->operation🌀Orgs🌀Org🌀Memberships🌀Username = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Memberships\Username();
        }

        return $this->operation🌀Orgs🌀Org🌀Memberships🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Migrations(): Migrations
    {
        if ($this->operation🌀Orgs🌀Org🌀Migrations instanceof Migrations === false) {
            $this->operation🌀Orgs🌀Org🌀Migrations = new Migrations();
        }

        return $this->operation🌀Orgs🌀Org🌀Migrations;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId(): MigrationId
    {
        if ($this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId instanceof MigrationId === false) {
            $this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId = new MigrationId();
        }

        return $this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive(): Archive
    {
        if ($this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive instanceof Archive === false) {
            $this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive = new Archive();
        }

        return $this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock(): Lock
    {
        if ($this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock instanceof Lock === false) {
            $this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock = new Lock();
        }

        return $this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles(): OrganizationRoles
    {
        if ($this->operation🌀Orgs🌀Org🌀OrganizationRoles instanceof OrganizationRoles === false) {
            $this->operation🌀Orgs🌀Org🌀OrganizationRoles = new OrganizationRoles();
        }

        return $this->operation🌀Orgs🌀Org🌀OrganizationRoles;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug(): TeamSlug
    {
        if ($this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug instanceof TeamSlug === false) {
            $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug = new TeamSlug();
        }

        return $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug🌀RoleId(): RoleId
    {
        if ($this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug🌀RoleId instanceof RoleId === false) {
            $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug🌀RoleId = new RoleId();
        }

        return $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug🌀RoleId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Users\Username
    {
        if ($this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Users\Username === false) {
            $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Users\Username();
        }

        return $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username🌀RoleId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Users\Username\RoleId
    {
        if ($this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username🌀RoleId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Users\Username\RoleId === false) {
            $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username🌀RoleId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Users\Username\RoleId();
        }

        return $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username🌀RoleId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId
    {
        if ($this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId === false) {
            $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId();
        }

        return $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Teams(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId\Teams
    {
        if ($this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Teams instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId\Teams === false) {
            $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Teams = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId\Teams();
        }

        return $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Teams;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Users(): Users
    {
        if ($this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Users instanceof Users === false) {
            $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Users = new Users();
        }

        return $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Users;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators(): OutsideCollaborators
    {
        if ($this->operation🌀Orgs🌀Org🌀OutsideCollaborators instanceof OutsideCollaborators === false) {
            $this->operation🌀Orgs🌀Org🌀OutsideCollaborators = new OutsideCollaborators();
        }

        return $this->operation🌀Orgs🌀Org🌀OutsideCollaborators;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OutsideCollaborators\Username
    {
        if ($this->operation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OutsideCollaborators\Username === false) {
            $this->operation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\OutsideCollaborators\Username();
        }

        return $this->operation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Packages(): Packages
    {
        if ($this->operation🌀Orgs🌀Org🌀Packages instanceof Packages === false) {
            $this->operation🌀Orgs🌀Org🌀Packages = new Packages();
        }

        return $this->operation🌀Orgs🌀Org🌀Packages;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName(): PackageName
    {
        if ($this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName instanceof PackageName === false) {
            $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName = new PackageName();
        }

        return $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Restore(): Restore
    {
        if ($this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Restore instanceof Restore === false) {
            $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Restore = new Restore();
        }

        return $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Restore;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions(): Versions
    {
        if ($this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions instanceof Versions === false) {
            $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions = new Versions();
        }

        return $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId(): PackageVersionId
    {
        if ($this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId instanceof PackageVersionId === false) {
            $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId = new PackageVersionId();
        }

        return $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore
    {
        if ($this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore === false) {
            $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore();
        }

        return $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests(): PersonalAccessTokenRequests
    {
        if ($this->operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests instanceof PersonalAccessTokenRequests === false) {
            $this->operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests = new PersonalAccessTokenRequests();
        }

        return $this->operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId(): PatRequestId
    {
        if ($this->operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId instanceof PatRequestId === false) {
            $this->operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId = new PatRequestId();
        }

        return $this->operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId🌀Repositories(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId🌀Repositories instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId🌀Repositories = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens(): PersonalAccessTokens
    {
        if ($this->operation🌀Orgs🌀Org🌀PersonalAccessTokens instanceof PersonalAccessTokens === false) {
            $this->operation🌀Orgs🌀Org🌀PersonalAccessTokens = new PersonalAccessTokens();
        }

        return $this->operation🌀Orgs🌀Org🌀PersonalAccessTokens;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId(): PatId
    {
        if ($this->operation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId instanceof PatId === false) {
            $this->operation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId = new PatId();
        }

        return $this->operation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId🌀Repositories(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId🌀Repositories instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId🌀Repositories = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Projects(): Projects
    {
        if ($this->operation🌀Orgs🌀Org🌀Projects instanceof Projects === false) {
            $this->operation🌀Orgs🌀Org🌀Projects = new Projects();
        }

        return $this->operation🌀Orgs🌀Org🌀Projects;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema(): Schema
    {
        if ($this->operation🌀Orgs🌀Org🌀Properties🌀Schema instanceof Schema === false) {
            $this->operation🌀Orgs🌀Org🌀Properties🌀Schema = new Schema();
        }

        return $this->operation🌀Orgs🌀Org🌀Properties🌀Schema;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName(): CustomPropertyName
    {
        if ($this->operation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName instanceof CustomPropertyName === false) {
            $this->operation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName = new CustomPropertyName();
        }

        return $this->operation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Values(): Values
    {
        if ($this->operation🌀Orgs🌀Org🌀Properties🌀Values instanceof Values === false) {
            $this->operation🌀Orgs🌀Org🌀Properties🌀Values = new Values();
        }

        return $this->operation🌀Orgs🌀Org🌀Properties🌀Values;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers(): PublicMembers
    {
        if ($this->operation🌀Orgs🌀Org🌀PublicMembers instanceof PublicMembers === false) {
            $this->operation🌀Orgs🌀Org🌀PublicMembers = new PublicMembers();
        }

        return $this->operation🌀Orgs🌀Org🌀PublicMembers;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers🌀Username(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\PublicMembers\Username
    {
        if ($this->operation🌀Orgs🌀Org🌀PublicMembers🌀Username instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\PublicMembers\Username === false) {
            $this->operation🌀Orgs🌀Org🌀PublicMembers🌀Username = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\PublicMembers\Username();
        }

        return $this->operation🌀Orgs🌀Org🌀PublicMembers🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Repos(): Repos
    {
        if ($this->operation🌀Orgs🌀Org🌀Repos instanceof Repos === false) {
            $this->operation🌀Orgs🌀Org🌀Repos = new Repos();
        }

        return $this->operation🌀Orgs🌀Org🌀Repos;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets(): Rulesets
    {
        if ($this->operation🌀Orgs🌀Org🌀Rulesets instanceof Rulesets === false) {
            $this->operation🌀Orgs🌀Org🌀Rulesets = new Rulesets();
        }

        return $this->operation🌀Orgs🌀Org🌀Rulesets;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites(): RuleSuites
    {
        if ($this->operation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites instanceof RuleSuites === false) {
            $this->operation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites = new RuleSuites();
        }

        return $this->operation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites🌀RuleSuiteId(): RuleSuiteId
    {
        if ($this->operation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites🌀RuleSuiteId instanceof RuleSuiteId === false) {
            $this->operation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites🌀RuleSuiteId = new RuleSuiteId();
        }

        return $this->operation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites🌀RuleSuiteId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RulesetId(): RulesetId
    {
        if ($this->operation🌀Orgs🌀Org🌀Rulesets🌀RulesetId instanceof RulesetId === false) {
            $this->operation🌀Orgs🌀Org🌀Rulesets🌀RulesetId = new RulesetId();
        }

        return $this->operation🌀Orgs🌀Org🌀Rulesets🌀RulesetId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀SecretScanning🌀Alerts(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\SecretScanning\Alerts
    {
        if ($this->operation🌀Orgs🌀Org🌀SecretScanning🌀Alerts instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\SecretScanning\Alerts === false) {
            $this->operation🌀Orgs🌀Org🌀SecretScanning🌀Alerts = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\SecretScanning\Alerts();
        }

        return $this->operation🌀Orgs🌀Org🌀SecretScanning🌀Alerts;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀SecurityAdvisories(): SecurityAdvisories
    {
        if ($this->operation🌀Orgs🌀Org🌀SecurityAdvisories instanceof SecurityAdvisories === false) {
            $this->operation🌀Orgs🌀Org🌀SecurityAdvisories = new SecurityAdvisories();
        }

        return $this->operation🌀Orgs🌀Org🌀SecurityAdvisories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀SecurityManagers(): SecurityManagers
    {
        if ($this->operation🌀Orgs🌀Org🌀SecurityManagers instanceof SecurityManagers === false) {
            $this->operation🌀Orgs🌀Org🌀SecurityManagers = new SecurityManagers();
        }

        return $this->operation🌀Orgs🌀Org🌀SecurityManagers;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀SecurityManagers🌀Teams🌀TeamSlug(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\SecurityManagers\Teams\TeamSlug
    {
        if ($this->operation🌀Orgs🌀Org🌀SecurityManagers🌀Teams🌀TeamSlug instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\SecurityManagers\Teams\TeamSlug === false) {
            $this->operation🌀Orgs🌀Org🌀SecurityManagers🌀Teams🌀TeamSlug = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\SecurityManagers\Teams\TeamSlug();
        }

        return $this->operation🌀Orgs🌀Org🌀SecurityManagers🌀Teams🌀TeamSlug;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions(): Actions
    {
        if ($this->operation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions instanceof Actions === false) {
            $this->operation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions = new Actions();
        }

        return $this->operation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\Packages
    {
        if ($this->operation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\Packages === false) {
            $this->operation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\Packages();
        }

        return $this->operation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage(): SharedStorage
    {
        if ($this->operation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage instanceof SharedStorage === false) {
            $this->operation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage = new SharedStorage();
        }

        return $this->operation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Team🌀TeamSlug🌀Copilot🌀Metrics(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Team\TeamSlug\Copilot\Metrics
    {
        if ($this->operation🌀Orgs🌀Org🌀Team🌀TeamSlug🌀Copilot🌀Metrics instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Team\TeamSlug\Copilot\Metrics === false) {
            $this->operation🌀Orgs🌀Org🌀Team🌀TeamSlug🌀Copilot🌀Metrics = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Team\TeamSlug\Copilot\Metrics();
        }

        return $this->operation🌀Orgs🌀Org🌀Team🌀TeamSlug🌀Copilot🌀Metrics;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Team🌀TeamSlug🌀Copilot🌀Usage(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Team\TeamSlug\Copilot\Usage
    {
        if ($this->operation🌀Orgs🌀Org🌀Team🌀TeamSlug🌀Copilot🌀Usage instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Team\TeamSlug\Copilot\Usage === false) {
            $this->operation🌀Orgs🌀Org🌀Team🌀TeamSlug🌀Copilot🌀Usage = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Team\TeamSlug\Copilot\Usage();
        }

        return $this->operation🌀Orgs🌀Org🌀Team🌀TeamSlug🌀Copilot🌀Usage;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams === false) {
            $this->operation🌀Orgs🌀Org🌀Teams = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions(): Discussions
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions instanceof Discussions === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions = new Discussions();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber(): DiscussionNumber
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber instanceof DiscussionNumber === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber = new DiscussionNumber();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber(): CommentNumber
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber instanceof CommentNumber === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber = new CommentNumber();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions(): Reactions
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions instanceof Reactions === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions = new Reactions();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions🌀ReactionId(): ReactionId
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions🌀ReactionId instanceof ReactionId === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions🌀ReactionId = new ReactionId();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions🌀ReactionId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions\ReactionId
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions🌀ReactionId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions\ReactionId === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions🌀ReactionId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions\ReactionId();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Invitations(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Invitations
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Invitations instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Invitations === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Invitations = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Invitations();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Invitations;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Members
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Members === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Members();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Memberships\Username
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Memberships\Username === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Memberships\Username();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId(): ProjectId
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId instanceof ProjectId === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId = new ProjectId();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo(): Repo
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo instanceof Repo === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo = new Repo();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Teams
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Teams === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Teams();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀SecurityProduct🌀Enablement(): Enablement
    {
        if ($this->operation🌀Orgs🌀Org🌀SecurityProduct🌀Enablement instanceof Enablement === false) {
            $this->operation🌀Orgs🌀Org🌀SecurityProduct🌀Enablement = new Enablement();
        }

        return $this->operation🌀Orgs🌀Org🌀SecurityProduct🌀Enablement;
    }

    public function getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId(): CardId
    {
        if ($this->operation🌀Projects🌀Columns🌀Cards🌀CardId instanceof CardId === false) {
            $this->operation🌀Projects🌀Columns🌀Cards🌀CardId = new CardId();
        }

        return $this->operation🌀Projects🌀Columns🌀Cards🌀CardId;
    }

    public function getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves(): Moves
    {
        if ($this->operation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves instanceof Moves === false) {
            $this->operation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves = new Moves();
        }

        return $this->operation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves;
    }

    public function getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId(): ColumnId
    {
        if ($this->operation🌀Projects🌀Columns🌀ColumnId instanceof ColumnId === false) {
            $this->operation🌀Projects🌀Columns🌀ColumnId = new ColumnId();
        }

        return $this->operation🌀Projects🌀Columns🌀ColumnId;
    }

    public function getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards(): Cards
    {
        if ($this->operation🌀Projects🌀Columns🌀ColumnId🌀Cards instanceof Cards === false) {
            $this->operation🌀Projects🌀Columns🌀ColumnId🌀Cards = new Cards();
        }

        return $this->operation🌀Projects🌀Columns🌀ColumnId🌀Cards;
    }

    public function getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Moves(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\Columns\ColumnId\Moves
    {
        if ($this->operation🌀Projects🌀Columns🌀ColumnId🌀Moves instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\Columns\ColumnId\Moves === false) {
            $this->operation🌀Projects🌀Columns🌀ColumnId🌀Moves = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\Columns\ColumnId\Moves();
        }

        return $this->operation🌀Projects🌀Columns🌀ColumnId🌀Moves;
    }

    public function getObjectMapperOperation🌀Projects🌀ProjectId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\ProjectId
    {
        if ($this->operation🌀Projects🌀ProjectId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\ProjectId === false) {
            $this->operation🌀Projects🌀ProjectId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\ProjectId();
        }

        return $this->operation🌀Projects🌀ProjectId;
    }

    public function getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators(): Collaborators
    {
        if ($this->operation🌀Projects🌀ProjectId🌀Collaborators instanceof Collaborators === false) {
            $this->operation🌀Projects🌀ProjectId🌀Collaborators = new Collaborators();
        }

        return $this->operation🌀Projects🌀ProjectId🌀Collaborators;
    }

    public function getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\ProjectId\Collaborators\Username
    {
        if ($this->operation🌀Projects🌀ProjectId🌀Collaborators🌀Username instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\ProjectId\Collaborators\Username === false) {
            $this->operation🌀Projects🌀ProjectId🌀Collaborators🌀Username = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\ProjectId\Collaborators\Username();
        }

        return $this->operation🌀Projects🌀ProjectId🌀Collaborators🌀Username;
    }

    public function getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission(): Permission
    {
        if ($this->operation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission instanceof Permission === false) {
            $this->operation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission = new Permission();
        }

        return $this->operation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission;
    }

    public function getObjectMapperOperation🌀Projects🌀ProjectId🌀Columns(): Columns
    {
        if ($this->operation🌀Projects🌀ProjectId🌀Columns instanceof Columns === false) {
            $this->operation🌀Projects🌀ProjectId🌀Columns = new Columns();
        }

        return $this->operation🌀Projects🌀ProjectId🌀Columns;
    }

    public function getObjectMapperOperation🌀RateLimit(): RateLimit
    {
        if ($this->operation🌀RateLimit instanceof RateLimit === false) {
            $this->operation🌀RateLimit = new RateLimit();
        }

        return $this->operation🌀RateLimit;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo === false) {
            $this->operation🌀Repos🌀Owner🌀Repo = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts(): Artifacts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts instanceof Artifacts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts = new Artifacts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId(): ArtifactId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId instanceof ArtifactId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId = new ArtifactId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat(): ArchiveFormat
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat instanceof ArchiveFormat === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat = new ArchiveFormat();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Cache\Usage
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Cache\Usage === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Cache\Usage();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches(): Caches
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches instanceof Caches === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches = new Caches();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches🌀CacheId(): CacheId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches🌀CacheId instanceof CacheId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches🌀CacheId = new CacheId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches🌀CacheId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId(): JobId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId instanceof JobId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId = new JobId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs(): Logs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs instanceof Logs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs = new Logs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Rerun(): Rerun
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Rerun instanceof Rerun === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Rerun = new Rerun();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Rerun;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Oidc\Customization\Sub
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Oidc\Customization\Sub === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Oidc\Customization\Sub();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets(): OrganizationSecrets
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets instanceof OrganizationSecrets === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets = new OrganizationSecrets();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables(): OrganizationVariables
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables instanceof OrganizationVariables === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables = new OrganizationVariables();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Access
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Access === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Access();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\SelectedActions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\SelectedActions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\SelectedActions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Workflow(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Workflow
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Workflow instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Workflow === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Workflow = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Workflow();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Workflow;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\Downloads
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\Downloads === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\Downloads();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀GenerateJitconfig(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\GenerateJitconfig
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀GenerateJitconfig instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\GenerateJitconfig === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀GenerateJitconfig = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\GenerateJitconfig();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀GenerateJitconfig;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RegistrationToken
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RegistrationToken === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RegistrationToken();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RemoveToken
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RemoveToken === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RemoveToken();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels\Name
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels\Name === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels\Name();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs(): Runs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs instanceof Runs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs = new Runs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId(): RunId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId instanceof RunId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId = new RunId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approvals(): Approvals
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approvals instanceof Approvals === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approvals = new Approvals();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approvals;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approve(): Approve
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approve instanceof Approve === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approve = new Approve();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approve;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Artifacts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Artifacts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Artifacts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber(): AttemptNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber instanceof AttemptNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber = new AttemptNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs(): Jobs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs instanceof Jobs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs = new Jobs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Logs(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber\Logs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Logs instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber\Logs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Logs = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber\Logs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Logs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel(): Cancel
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel instanceof Cancel === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel = new Cancel();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀DeploymentProtectionRule(): DeploymentProtectionRule
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀DeploymentProtectionRule instanceof DeploymentProtectionRule === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀DeploymentProtectionRule = new DeploymentProtectionRule();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀DeploymentProtectionRule;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀ForceCancel(): ForceCancel
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀ForceCancel instanceof ForceCancel === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀ForceCancel = new ForceCancel();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀ForceCancel;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Jobs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Jobs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Jobs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Logs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Logs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Logs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments(): PendingDeployments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments instanceof PendingDeployments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments = new PendingDeployments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Rerun
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Rerun === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Rerun();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀RerunFailedJobs(): RerunFailedJobs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀RerunFailedJobs instanceof RerunFailedJobs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀RerunFailedJobs = new RerunFailedJobs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀RerunFailedJobs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing(): Timing
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing instanceof Timing === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing = new Timing();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\PublicKey
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\PublicKey === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\PublicKey();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Variables
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Variables === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Variables();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Variables\Name
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Variables\Name === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Variables\Name();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows(): Workflows
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows instanceof Workflows === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows = new Workflows();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId(): WorkflowId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId instanceof WorkflowId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId = new WorkflowId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Disable(): Disable
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Disable instanceof Disable === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Disable = new Disable();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Disable;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Dispatches(): Dispatches
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Dispatches instanceof Dispatches === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Dispatches = new Dispatches();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Dispatches;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Enable(): Enable
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Enable instanceof Enable === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Enable = new Enable();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Enable;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Runs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Runs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Runs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Timing
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Timing === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Timing();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Activity(): Activity
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Activity instanceof Activity === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Activity = new Activity();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Activity;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees(): Assignees
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Assignees instanceof Assignees === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Assignees = new Assignees();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Assignees;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee(): Assignee
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee instanceof Assignee === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee = new Assignee();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Attestations(): Attestations
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Attestations instanceof Attestations === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Attestations = new Attestations();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Attestations;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Attestations🌀SubjectDigest(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Attestations\SubjectDigest
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Attestations🌀SubjectDigest instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Attestations\SubjectDigest === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Attestations🌀SubjectDigest = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Attestations\SubjectDigest();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Attestations🌀SubjectDigest;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks(): Autolinks
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Autolinks instanceof Autolinks === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Autolinks = new Autolinks();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Autolinks;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId(): AutolinkId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId instanceof AutolinkId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId = new AutolinkId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes(): AutomatedSecurityFixes
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes instanceof AutomatedSecurityFixes === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes = new AutomatedSecurityFixes();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches(): Branches
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches instanceof Branches === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches = new Branches();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch(): Branch
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch instanceof Branch === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch = new Branch();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection(): Protection
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection instanceof Protection === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection = new Protection();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins(): EnforceAdmins
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins instanceof EnforceAdmins === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins = new EnforceAdmins();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews(): RequiredPullRequestReviews
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews instanceof RequiredPullRequestReviews === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews = new RequiredPullRequestReviews();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures(): RequiredSignatures
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures instanceof RequiredSignatures === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures = new RequiredSignatures();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks(): RequiredStatusChecks
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks instanceof RequiredStatusChecks === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks = new RequiredStatusChecks();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts(): Contexts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts instanceof Contexts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts = new Contexts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions(): Restrictions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions instanceof Restrictions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions = new Restrictions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps(): Apps
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps instanceof Apps === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps = new Apps();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Teams
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Teams === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Teams();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Users
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Users === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Users();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename(): Rename
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename instanceof Rename === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename = new Rename();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns(): CheckRuns
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns instanceof CheckRuns === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns = new CheckRuns();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId(): CheckRunId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId instanceof CheckRunId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId = new CheckRunId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations(): Annotations
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations instanceof Annotations === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations = new Annotations();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Rerequest(): Rerequest
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Rerequest instanceof Rerequest === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Rerequest = new Rerequest();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Rerequest;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites(): CheckSuites
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites instanceof CheckSuites === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites = new CheckSuites();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences(): Preferences
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences instanceof Preferences === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences = new Preferences();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId(): CheckSuiteId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId instanceof CheckSuiteId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId = new CheckSuiteId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\CheckRuns
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\CheckRuns === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\CheckRuns();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\Rerequest
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\Rerequest === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\Rerequest();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber(): AlertNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber instanceof AlertNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber = new AlertNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances(): Instances
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances instanceof Instances === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances = new Instances();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses(): Analyses
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses instanceof Analyses === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses = new Analyses();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId(): AnalysisId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId instanceof AnalysisId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId = new AnalysisId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases(): Databases
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases instanceof Databases === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases = new Databases();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language(): Language
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language instanceof Language === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language = new Language();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses(): VariantAnalyses
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses instanceof VariantAnalyses === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses = new VariantAnalyses();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses🌀CodeqlVariantAnalysisId(): CodeqlVariantAnalysisId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses🌀CodeqlVariantAnalysisId instanceof CodeqlVariantAnalysisId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses🌀CodeqlVariantAnalysisId = new CodeqlVariantAnalysisId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses🌀CodeqlVariantAnalysisId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses🌀CodeqlVariantAnalysisId🌀Repos🌀RepoOwner🌀RepoName(): RepoName
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses🌀CodeqlVariantAnalysisId🌀Repos🌀RepoOwner🌀RepoName instanceof RepoName === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses🌀CodeqlVariantAnalysisId🌀Repos🌀RepoOwner🌀RepoName = new RepoName();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses🌀CodeqlVariantAnalysisId🌀Repos🌀RepoOwner🌀RepoName;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup(): DefaultSetup
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup instanceof DefaultSetup === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup = new DefaultSetup();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs(): Sarifs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs instanceof Sarifs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs = new Sarifs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId(): SarifId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId instanceof SarifId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId = new SarifId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeSecurityConfiguration(): CodeSecurityConfiguration
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeSecurityConfiguration instanceof CodeSecurityConfiguration === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeSecurityConfiguration = new CodeSecurityConfiguration();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeSecurityConfiguration;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors(): Errors
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors instanceof Errors === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors = new Errors();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers(): Devcontainers
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers instanceof Devcontainers === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers = new Devcontainers();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines(): Machines
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines instanceof Machines === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines = new Machines();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_(): New_
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_ instanceof New_ === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_ = new New_();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀PermissionsCheck(): PermissionsCheck
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀PermissionsCheck instanceof PermissionsCheck === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀PermissionsCheck = new PermissionsCheck();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀PermissionsCheck;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀PublicKey(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\PublicKey
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀PublicKey instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\PublicKey === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀PublicKey = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\PublicKey();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀PublicKey;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\SecretName
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\SecretName === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\SecretName();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username\Permission
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username\Permission === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username\Permission();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Comments instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Comments = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions🌀ReactionId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions\ReactionId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions🌀ReactionId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions\ReactionId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions🌀ReactionId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions\ReactionId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead(): BranchesWhereHead
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead instanceof BranchesWhereHead === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead = new BranchesWhereHead();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls(): Pulls
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls instanceof Pulls === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls = new Pulls();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref(): Ref
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref instanceof Ref === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref = new Ref();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckRuns
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckRuns === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckRuns();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckSuites
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckSuites === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckSuites();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status(): Status
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status instanceof Status === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status = new Status();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses(): Statuses
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses instanceof Statuses === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses = new Statuses();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Community🌀Profile(): Profile
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Community🌀Profile instanceof Profile === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Community🌀Profile = new Profile();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Community🌀Profile;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead(): Basehead
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead instanceof Basehead === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead = new Basehead();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path(): Path
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path instanceof Path === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path = new Path();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contributors(): Contributors
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Contributors instanceof Contributors === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Contributors = new Contributors();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Contributors;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts\AlertNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts\AlertNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts\AlertNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀PublicKey(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\PublicKey
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀PublicKey instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\PublicKey === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀PublicKey = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\PublicKey();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀PublicKey;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\SecretName
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\SecretName === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\SecretName();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Compare🌀Basehead(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Compare\Basehead
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Compare🌀Basehead instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Compare\Basehead === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Compare🌀Basehead = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Compare\Basehead();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Compare🌀Basehead;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom(): Sbom
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom instanceof Sbom === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom = new Sbom();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Snapshots(): Snapshots
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Snapshots instanceof Snapshots === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Snapshots = new Snapshots();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Snapshots;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments(): Deployments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Deployments instanceof Deployments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments = new Deployments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId(): DeploymentId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId instanceof DeploymentId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId = new DeploymentId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId(): StatusId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId instanceof StatusId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId = new StatusId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dispatches(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dispatches
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Dispatches instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dispatches === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Dispatches = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Dispatches();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Dispatches;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments(): Environments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments instanceof Environments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments = new Environments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName(): EnvironmentName
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName instanceof EnvironmentName === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName = new EnvironmentName();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies(): DeploymentBranchPolicies
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies instanceof DeploymentBranchPolicies === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies = new DeploymentBranchPolicies();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId(): BranchPolicyId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId instanceof BranchPolicyId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId = new BranchPolicyId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules(): DeploymentProtectionRules
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules instanceof DeploymentProtectionRules === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules = new DeploymentProtectionRules();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀Apps(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules\Apps
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀Apps instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules\Apps === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀Apps = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules\Apps();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀Apps;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀ProtectionRuleId(): ProtectionRuleId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀ProtectionRuleId instanceof ProtectionRuleId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀ProtectionRuleId = new ProtectionRuleId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀ProtectionRuleId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀PublicKey(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets\PublicKey
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀PublicKey instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets\PublicKey === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀PublicKey = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets\PublicKey();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀PublicKey;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets\SecretName
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets\SecretName === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets\SecretName();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Variables
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Variables === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Variables();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables🌀Name(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Variables\Name
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables🌀Name instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Variables\Name === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables🌀Name = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Variables\Name();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables🌀Name;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Events(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Events
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Events instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Events === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Events = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Events();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Events;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Forks(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Forks
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Forks instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Forks === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Forks = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Forks();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Forks;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs(): Blobs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs instanceof Blobs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs = new Blobs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha(): FileSha
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha instanceof FileSha === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha = new FileSha();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Commits
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Commits === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Commits();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha(): CommitSha
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha instanceof CommitSha === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha = new CommitSha();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\MatchingRefs\Ref
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\MatchingRefs\Ref === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\MatchingRefs\Ref();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Ref\Ref
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Ref\Ref === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Ref\Ref();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs(): Refs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs instanceof Refs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs = new Refs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Refs\Ref
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Refs\Ref === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Refs\Ref();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags(): Tags
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags instanceof Tags === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags = new Tags();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha(): TagSha
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha instanceof TagSha === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha = new TagSha();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees(): Trees
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees instanceof Trees === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees = new Trees();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha(): TreeSha
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha instanceof TreeSha === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha = new TreeSha();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries\DeliveryId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries\DeliveryId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries\DeliveryId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries\DeliveryId\Attempts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries\DeliveryId\Attempts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries\DeliveryId\Attempts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Pings
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Pings === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Pings();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests(): Tests
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests instanceof Tests === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests = new Tests();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import(): Import
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Import instanceof Import === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Import = new Import();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Import;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors(): Authors
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors instanceof Authors === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors = new Authors();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors🌀AuthorId(): AuthorId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors🌀AuthorId instanceof AuthorId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors🌀AuthorId = new AuthorId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors🌀AuthorId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀LargeFiles(): LargeFiles
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀LargeFiles instanceof LargeFiles === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀LargeFiles = new LargeFiles();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀LargeFiles;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Lfs(): Lfs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀Lfs instanceof Lfs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀Lfs = new Lfs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀Lfs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Installation(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Installation
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Installation instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Installation === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Installation = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Installation();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Installation;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀InteractionLimits(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\InteractionLimits
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀InteractionLimits instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\InteractionLimits === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀InteractionLimits = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\InteractionLimits();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀InteractionLimits;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Invitations
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Invitations instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Invitations === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Invitations = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Invitations();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Invitations;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Invitations\InvitationId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Invitations\InvitationId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Invitations\InvitationId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions🌀ReactionId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions\ReactionId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions🌀ReactionId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions\ReactionId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions🌀ReactionId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions\ReactionId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Events
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Events === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Events();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId(): EventId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId instanceof EventId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId = new EventId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber(): IssueNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber instanceof IssueNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber = new IssueNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees🌀Assignee(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees\Assignee
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees🌀Assignee instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees\Assignee === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees🌀Assignee = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees\Assignee();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees🌀Assignee;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Events
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Events === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Events();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels\Name
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels\Name === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels\Name();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Lock
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Lock === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Lock();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions🌀ReactionId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions\ReactionId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions🌀ReactionId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions\ReactionId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions🌀ReactionId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions\ReactionId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssue(): SubIssue
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssue instanceof SubIssue === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssue = new SubIssue();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssue;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssues(): SubIssues
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssues instanceof SubIssues === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssues = new SubIssues();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssues;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssues🌀Priority(): Priority
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssues🌀Priority instanceof Priority === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssues🌀Priority = new Priority();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀SubIssues🌀Priority;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline(): Timeline
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline instanceof Timeline === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline = new Timeline();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys(): Keys
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Keys instanceof Keys === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Keys = new Keys();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Keys;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId(): KeyId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId instanceof KeyId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId = new KeyId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Labels
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Labels instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Labels === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Labels = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Labels();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Labels;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Labels\Name
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Labels\Name === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Labels\Name();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Languages(): Languages
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Languages instanceof Languages === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Languages = new Languages();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Languages;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀License(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\License
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀License instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\License === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀License = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\License();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀License;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀MergeUpstream(): MergeUpstream
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀MergeUpstream instanceof MergeUpstream === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀MergeUpstream = new MergeUpstream();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀MergeUpstream;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Merges(): Merges
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Merges instanceof Merges === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Merges = new Merges();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Merges;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones(): Milestones
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Milestones instanceof Milestones === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Milestones = new Milestones();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Milestones;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber(): MilestoneNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber instanceof MilestoneNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber = new MilestoneNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber\Labels
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber\Labels === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber\Labels();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Notifications
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Notifications instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Notifications === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Notifications = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Notifications();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Notifications;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages(): Pages
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages instanceof Pages === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages = new Pages();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds(): Builds
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds instanceof Builds === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds = new Builds();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest(): Latest
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest instanceof Latest === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest = new Latest();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId(): BuildId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId instanceof BuildId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId = new BuildId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId(): PagesDeploymentId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId instanceof PagesDeploymentId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId = new PagesDeploymentId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId🌀Cancel(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments\PagesDeploymentId\Cancel
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId🌀Cancel instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments\PagesDeploymentId\Cancel === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId🌀Cancel = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments\PagesDeploymentId\Cancel();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId🌀Cancel;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Health(): Health
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Health instanceof Health === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Health = new Health();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Health;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting(): PrivateVulnerabilityReporting
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting instanceof PrivateVulnerabilityReporting === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting = new PrivateVulnerabilityReporting();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Projects(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Projects
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Projects instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Projects === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Projects = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Projects();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Projects;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Properties🌀Values(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Properties\Values
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Properties🌀Values instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Properties\Values === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Properties🌀Values = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Properties\Values();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Properties🌀Values;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions🌀ReactionId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions\ReactionId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions🌀ReactionId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions\ReactionId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions🌀ReactionId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions\ReactionId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber(): PullNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber instanceof PullNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber = new PullNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Codespaces(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Codespaces
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Codespaces instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Codespaces === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Codespaces = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Codespaces();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Codespaces;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies(): Replies
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies instanceof Replies === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies = new Replies();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Commits
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Commits === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Commits();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files(): Files
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files instanceof Files === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files = new Files();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge(): Merge
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge instanceof Merge === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge = new Merge();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers(): RequestedReviewers
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers instanceof RequestedReviewers === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers = new RequestedReviewers();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews(): Reviews
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews instanceof Reviews === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews = new Reviews();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId(): ReviewId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId instanceof ReviewId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId = new ReviewId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals(): Dismissals
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals instanceof Dismissals === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals = new Dismissals();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Events
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Events === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Events();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch(): UpdateBranch
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch instanceof UpdateBranch === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch = new UpdateBranch();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme(): Readme
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Readme instanceof Readme === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Readme = new Readme();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Readme;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir(): Dir
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir instanceof Dir === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir = new Dir();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases(): Releases
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases instanceof Releases === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases = new Releases();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId(): AssetId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId instanceof AssetId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId = new AssetId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀GenerateNotes(): GenerateNotes
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀GenerateNotes instanceof GenerateNotes === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀GenerateNotes = new GenerateNotes();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀GenerateNotes;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Latest
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Latest === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Latest();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag(): Tag
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag instanceof Tag === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag = new Tag();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId(): ReleaseId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId instanceof ReleaseId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId = new ReleaseId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets(): Assets
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets instanceof Assets === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets = new Assets();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions🌀ReactionId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions\ReactionId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions🌀ReactionId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions\ReactionId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions🌀ReactionId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions\ReactionId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rules🌀Branches🌀Branch(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rules\Branches\Branch
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Rules🌀Branches🌀Branch instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rules\Branches\Branch === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Rules🌀Branches🌀Branch = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rules\Branches\Branch();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Rules🌀Branches🌀Branch;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RuleSuites
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RuleSuites === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RuleSuites();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites🌀RuleSuiteId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RuleSuites\RuleSuiteId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites🌀RuleSuiteId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RuleSuites\RuleSuiteId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites🌀RuleSuiteId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RuleSuites\RuleSuiteId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites🌀RuleSuiteId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RulesetId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RulesetId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RulesetId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations(): Locations
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations instanceof Locations === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations = new Locations();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀PushProtectionBypasses(): PushProtectionBypasses
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀PushProtectionBypasses instanceof PushProtectionBypasses === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀PushProtectionBypasses = new PushProtectionBypasses();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀PushProtectionBypasses;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀ScanHistory(): ScanHistory
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀ScanHistory instanceof ScanHistory === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀ScanHistory = new ScanHistory();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀ScanHistory;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀Reports(): Reports
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀Reports instanceof Reports === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀Reports = new Reports();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀Reports;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve(): Cve
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve instanceof Cve === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve = new Cve();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Forks(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId\Forks
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Forks instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId\Forks === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Forks = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId\Forks();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Forks;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stargazers(): Stargazers
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Stargazers instanceof Stargazers === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Stargazers = new Stargazers();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Stargazers;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency(): CodeFrequency
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency instanceof CodeFrequency === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency = new CodeFrequency();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity(): CommitActivity
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity instanceof CommitActivity === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity = new CommitActivity();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\Contributors
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\Contributors === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\Contributors();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation(): Participation
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation instanceof Participation === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation = new Participation();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard(): PunchCard
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard instanceof PunchCard === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard = new PunchCard();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Statuses\Sha
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Statuses\Sha === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Statuses\Sha();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscribers(): Subscribers
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Subscribers instanceof Subscribers === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Subscribers = new Subscribers();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Subscribers;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Subscription
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Subscription instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Subscription === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Subscription = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Subscription();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Subscription;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Tags
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Tags instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Tags === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Tags = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Tags();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Tags;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Tags\Protection
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Tags\Protection === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Tags\Protection();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection🌀TagProtectionId(): TagProtectionId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection🌀TagProtectionId instanceof TagProtectionId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection🌀TagProtectionId = new TagProtectionId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection🌀TagProtectionId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tarball🌀Ref(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Tarball\Ref
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Tarball🌀Ref instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Tarball\Ref === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Tarball🌀Ref = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Tarball\Ref();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Tarball🌀Ref;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Teams(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Teams
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Teams instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Teams === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Teams = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Teams();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Teams;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics(): Topics
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Topics instanceof Topics === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Topics = new Topics();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Topics;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Clones(): Clones
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Clones instanceof Clones === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Clones = new Clones();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Clones;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Paths(): Paths
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Paths instanceof Paths === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Paths = new Paths();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Paths;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Referrers(): Referrers
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Referrers instanceof Referrers === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Referrers = new Referrers();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Referrers;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Views(): Views
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Views instanceof Views === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Views = new Views();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Views;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Transfer(): Transfer
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Transfer instanceof Transfer === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Transfer = new Transfer();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Transfer;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀VulnerabilityAlerts(): VulnerabilityAlerts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀VulnerabilityAlerts instanceof VulnerabilityAlerts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀VulnerabilityAlerts = new VulnerabilityAlerts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀VulnerabilityAlerts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Zipball🌀Ref(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Zipball\Ref
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Zipball🌀Ref instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Zipball\Ref === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Zipball🌀Ref = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Zipball\Ref();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Zipball🌀Ref;
    }

    public function getObjectMapperOperation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate(): Generate
    {
        if ($this->operation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate instanceof Generate === false) {
            $this->operation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate = new Generate();
        }

        return $this->operation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate;
    }

    public function getObjectMapperOperation🌀Repositories(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repositories
    {
        if ($this->operation🌀Repositories instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repositories === false) {
            $this->operation🌀Repositories = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repositories();
        }

        return $this->operation🌀Repositories;
    }

    public function getObjectMapperOperation🌀Search🌀Code(): Code
    {
        if ($this->operation🌀Search🌀Code instanceof Code === false) {
            $this->operation🌀Search🌀Code = new Code();
        }

        return $this->operation🌀Search🌀Code;
    }

    public function getObjectMapperOperation🌀Search🌀Commits(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Commits
    {
        if ($this->operation🌀Search🌀Commits instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Commits === false) {
            $this->operation🌀Search🌀Commits = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Commits();
        }

        return $this->operation🌀Search🌀Commits;
    }

    public function getObjectMapperOperation🌀Search🌀Issues(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Issues
    {
        if ($this->operation🌀Search🌀Issues instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Issues === false) {
            $this->operation🌀Search🌀Issues = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Issues();
        }

        return $this->operation🌀Search🌀Issues;
    }

    public function getObjectMapperOperation🌀Search🌀Labels(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Labels
    {
        if ($this->operation🌀Search🌀Labels instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Labels === false) {
            $this->operation🌀Search🌀Labels = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Labels();
        }

        return $this->operation🌀Search🌀Labels;
    }

    public function getObjectMapperOperation🌀Search🌀Repositories(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Repositories
    {
        if ($this->operation🌀Search🌀Repositories instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Repositories === false) {
            $this->operation🌀Search🌀Repositories = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Repositories();
        }

        return $this->operation🌀Search🌀Repositories;
    }

    public function getObjectMapperOperation🌀Search🌀Topics(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Topics
    {
        if ($this->operation🌀Search🌀Topics instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Topics === false) {
            $this->operation🌀Search🌀Topics = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Topics();
        }

        return $this->operation🌀Search🌀Topics;
    }

    public function getObjectMapperOperation🌀Search🌀Users(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Users
    {
        if ($this->operation🌀Search🌀Users instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Users === false) {
            $this->operation🌀Search🌀Users = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Search\Users();
        }

        return $this->operation🌀Search🌀Users;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId(): TeamId
    {
        if ($this->operation🌀Teams🌀TeamId instanceof TeamId === false) {
            $this->operation🌀Teams🌀TeamId = new TeamId();
        }

        return $this->operation🌀Teams🌀TeamId;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions
    {
        if ($this->operation🌀Teams🌀TeamId🌀Discussions instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions === false) {
            $this->operation🌀Teams🌀TeamId🌀Discussions = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions();
        }

        return $this->operation🌀Teams🌀TeamId🌀Discussions;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber
    {
        if ($this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber === false) {
            $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber();
        }

        return $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments
    {
        if ($this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments === false) {
            $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments();
        }

        return $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber
    {
        if ($this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber === false) {
            $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber();
        }

        return $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions
    {
        if ($this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions === false) {
            $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions();
        }

        return $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Reactions
    {
        if ($this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Reactions === false) {
            $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Reactions();
        }

        return $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Invitations(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Invitations
    {
        if ($this->operation🌀Teams🌀TeamId🌀Invitations instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Invitations === false) {
            $this->operation🌀Teams🌀TeamId🌀Invitations = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Invitations();
        }

        return $this->operation🌀Teams🌀TeamId🌀Invitations;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Members(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Members
    {
        if ($this->operation🌀Teams🌀TeamId🌀Members instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Members === false) {
            $this->operation🌀Teams🌀TeamId🌀Members = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Members();
        }

        return $this->operation🌀Teams🌀TeamId🌀Members;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Members🌀Username(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Members\Username
    {
        if ($this->operation🌀Teams🌀TeamId🌀Members🌀Username instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Members\Username === false) {
            $this->operation🌀Teams🌀TeamId🌀Members🌀Username = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Members\Username();
        }

        return $this->operation🌀Teams🌀TeamId🌀Members🌀Username;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Memberships🌀Username(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Memberships\Username
    {
        if ($this->operation🌀Teams🌀TeamId🌀Memberships🌀Username instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Memberships\Username === false) {
            $this->operation🌀Teams🌀TeamId🌀Memberships🌀Username = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Memberships\Username();
        }

        return $this->operation🌀Teams🌀TeamId🌀Memberships🌀Username;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Projects(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Projects
    {
        if ($this->operation🌀Teams🌀TeamId🌀Projects instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Projects === false) {
            $this->operation🌀Teams🌀TeamId🌀Projects = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Projects();
        }

        return $this->operation🌀Teams🌀TeamId🌀Projects;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Projects\ProjectId
    {
        if ($this->operation🌀Teams🌀TeamId🌀Projects🌀ProjectId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Projects\ProjectId === false) {
            $this->operation🌀Teams🌀TeamId🌀Projects🌀ProjectId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Projects\ProjectId();
        }

        return $this->operation🌀Teams🌀TeamId🌀Projects🌀ProjectId;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Repos(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Repos
    {
        if ($this->operation🌀Teams🌀TeamId🌀Repos instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Repos === false) {
            $this->operation🌀Teams🌀TeamId🌀Repos = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Repos();
        }

        return $this->operation🌀Teams🌀TeamId🌀Repos;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo
    {
        if ($this->operation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo === false) {
            $this->operation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo();
        }

        return $this->operation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Teams(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Teams
    {
        if ($this->operation🌀Teams🌀TeamId🌀Teams instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Teams === false) {
            $this->operation🌀Teams🌀TeamId🌀Teams = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Teams();
        }

        return $this->operation🌀Teams🌀TeamId🌀Teams;
    }

    public function getObjectMapperOperation🌀User(): User
    {
        if ($this->operation🌀User instanceof User === false) {
            $this->operation🌀User = new User();
        }

        return $this->operation🌀User;
    }

    public function getObjectMapperOperation🌀User🌀Blocks(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Blocks
    {
        if ($this->operation🌀User🌀Blocks instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Blocks === false) {
            $this->operation🌀User🌀Blocks = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Blocks();
        }

        return $this->operation🌀User🌀Blocks;
    }

    public function getObjectMapperOperation🌀User🌀Blocks🌀Username(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Blocks\Username
    {
        if ($this->operation🌀User🌀Blocks🌀Username instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Blocks\Username === false) {
            $this->operation🌀User🌀Blocks🌀Username = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Blocks\Username();
        }

        return $this->operation🌀User🌀Blocks🌀Username;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces
    {
        if ($this->operation🌀User🌀Codespaces instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces === false) {
            $this->operation🌀User🌀Codespaces = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces();
        }

        return $this->operation🌀User🌀Codespaces;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀Secrets(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets
    {
        if ($this->operation🌀User🌀Codespaces🌀Secrets instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets === false) {
            $this->operation🌀User🌀Codespaces🌀Secrets = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets();
        }

        return $this->operation🌀User🌀Codespaces🌀Secrets;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets\PublicKey
    {
        if ($this->operation🌀User🌀Codespaces🌀Secrets🌀PublicKey instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets\PublicKey === false) {
            $this->operation🌀User🌀Codespaces🌀Secrets🌀PublicKey = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets\PublicKey();
        }

        return $this->operation🌀User🌀Codespaces🌀Secrets🌀PublicKey;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName
    {
        if ($this->operation🌀User🌀Codespaces🌀Secrets🌀SecretName instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName === false) {
            $this->operation🌀User🌀Codespaces🌀Secrets🌀SecretName = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName();
        }

        return $this->operation🌀User🌀Codespaces🌀Secrets🌀SecretName;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories
    {
        if ($this->operation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories === false) {
            $this->operation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories();
        }

        return $this->operation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories\RepositoryId
    {
        if ($this->operation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories\RepositoryId === false) {
            $this->operation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories\RepositoryId();
        }

        return $this->operation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\CodespaceName
    {
        if ($this->operation🌀User🌀Codespaces🌀CodespaceName instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\CodespaceName === false) {
            $this->operation🌀User🌀Codespaces🌀CodespaceName = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\CodespaceName();
        }

        return $this->operation🌀User🌀Codespaces🌀CodespaceName;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports(): Exports
    {
        if ($this->operation🌀User🌀Codespaces🌀CodespaceName🌀Exports instanceof Exports === false) {
            $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Exports = new Exports();
        }

        return $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Exports;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports🌀ExportId(): ExportId
    {
        if ($this->operation🌀User🌀Codespaces🌀CodespaceName🌀Exports🌀ExportId instanceof ExportId === false) {
            $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Exports🌀ExportId = new ExportId();
        }

        return $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Exports🌀ExportId;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Machines(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Machines
    {
        if ($this->operation🌀User🌀Codespaces🌀CodespaceName🌀Machines instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Machines === false) {
            $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Machines = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Machines();
        }

        return $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Machines;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Publish(): Publish
    {
        if ($this->operation🌀User🌀Codespaces🌀CodespaceName🌀Publish instanceof Publish === false) {
            $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Publish = new Publish();
        }

        return $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Publish;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Start(): Start
    {
        if ($this->operation🌀User🌀Codespaces🌀CodespaceName🌀Start instanceof Start === false) {
            $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Start = new Start();
        }

        return $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Start;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Stop(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Stop
    {
        if ($this->operation🌀User🌀Codespaces🌀CodespaceName🌀Stop instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Stop === false) {
            $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Stop = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Stop();
        }

        return $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Stop;
    }

    public function getObjectMapperOperation🌀User🌀Docker🌀Conflicts(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Docker\Conflicts
    {
        if ($this->operation🌀User🌀Docker🌀Conflicts instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Docker\Conflicts === false) {
            $this->operation🌀User🌀Docker🌀Conflicts = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Docker\Conflicts();
        }

        return $this->operation🌀User🌀Docker🌀Conflicts;
    }

    public function getObjectMapperOperation🌀User🌀Email🌀Visibility(): Visibility
    {
        if ($this->operation🌀User🌀Email🌀Visibility instanceof Visibility === false) {
            $this->operation🌀User🌀Email🌀Visibility = new Visibility();
        }

        return $this->operation🌀User🌀Email🌀Visibility;
    }

    public function getObjectMapperOperation🌀User🌀Emails(): Emails
    {
        if ($this->operation🌀User🌀Emails instanceof Emails === false) {
            $this->operation🌀User🌀Emails = new Emails();
        }

        return $this->operation🌀User🌀Emails;
    }

    public function getObjectMapperOperation🌀User🌀Followers(): Followers
    {
        if ($this->operation🌀User🌀Followers instanceof Followers === false) {
            $this->operation🌀User🌀Followers = new Followers();
        }

        return $this->operation🌀User🌀Followers;
    }

    public function getObjectMapperOperation🌀User🌀Following(): Following
    {
        if ($this->operation🌀User🌀Following instanceof Following === false) {
            $this->operation🌀User🌀Following = new Following();
        }

        return $this->operation🌀User🌀Following;
    }

    public function getObjectMapperOperation🌀User🌀Following🌀Username(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Following\Username
    {
        if ($this->operation🌀User🌀Following🌀Username instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Following\Username === false) {
            $this->operation🌀User🌀Following🌀Username = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Following\Username();
        }

        return $this->operation🌀User🌀Following🌀Username;
    }

    public function getObjectMapperOperation🌀User🌀GpgKeys(): GpgKeys
    {
        if ($this->operation🌀User🌀GpgKeys instanceof GpgKeys === false) {
            $this->operation🌀User🌀GpgKeys = new GpgKeys();
        }

        return $this->operation🌀User🌀GpgKeys;
    }

    public function getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId(): GpgKeyId
    {
        if ($this->operation🌀User🌀GpgKeys🌀GpgKeyId instanceof GpgKeyId === false) {
            $this->operation🌀User🌀GpgKeys🌀GpgKeyId = new GpgKeyId();
        }

        return $this->operation🌀User🌀GpgKeys🌀GpgKeyId;
    }

    public function getObjectMapperOperation🌀User🌀Installations(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Installations
    {
        if ($this->operation🌀User🌀Installations instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Installations === false) {
            $this->operation🌀User🌀Installations = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Installations();
        }

        return $this->operation🌀User🌀Installations;
    }

    public function getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Installations\InstallationId\Repositories
    {
        if ($this->operation🌀User🌀Installations🌀InstallationId🌀Repositories instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Installations\InstallationId\Repositories === false) {
            $this->operation🌀User🌀Installations🌀InstallationId🌀Repositories = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Installations\InstallationId\Repositories();
        }

        return $this->operation🌀User🌀Installations🌀InstallationId🌀Repositories;
    }

    public function getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Installations\InstallationId\Repositories\RepositoryId
    {
        if ($this->operation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Installations\InstallationId\Repositories\RepositoryId === false) {
            $this->operation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Installations\InstallationId\Repositories\RepositoryId();
        }

        return $this->operation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀User🌀InteractionLimits(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\InteractionLimits
    {
        if ($this->operation🌀User🌀InteractionLimits instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\InteractionLimits === false) {
            $this->operation🌀User🌀InteractionLimits = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\InteractionLimits();
        }

        return $this->operation🌀User🌀InteractionLimits;
    }

    public function getObjectMapperOperation🌀User🌀Issues(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Issues
    {
        if ($this->operation🌀User🌀Issues instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Issues === false) {
            $this->operation🌀User🌀Issues = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Issues();
        }

        return $this->operation🌀User🌀Issues;
    }

    public function getObjectMapperOperation🌀User🌀Keys(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Keys
    {
        if ($this->operation🌀User🌀Keys instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Keys === false) {
            $this->operation🌀User🌀Keys = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Keys();
        }

        return $this->operation🌀User🌀Keys;
    }

    public function getObjectMapperOperation🌀User🌀Keys🌀KeyId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Keys\KeyId
    {
        if ($this->operation🌀User🌀Keys🌀KeyId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Keys\KeyId === false) {
            $this->operation🌀User🌀Keys🌀KeyId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Keys\KeyId();
        }

        return $this->operation🌀User🌀Keys🌀KeyId;
    }

    public function getObjectMapperOperation🌀User🌀MarketplacePurchases(): MarketplacePurchases
    {
        if ($this->operation🌀User🌀MarketplacePurchases instanceof MarketplacePurchases === false) {
            $this->operation🌀User🌀MarketplacePurchases = new MarketplacePurchases();
        }

        return $this->operation🌀User🌀MarketplacePurchases;
    }

    public function getObjectMapperOperation🌀User🌀MarketplacePurchases🌀Stubbed(): Stubbed
    {
        if ($this->operation🌀User🌀MarketplacePurchases🌀Stubbed instanceof Stubbed === false) {
            $this->operation🌀User🌀MarketplacePurchases🌀Stubbed = new Stubbed();
        }

        return $this->operation🌀User🌀MarketplacePurchases🌀Stubbed;
    }

    public function getObjectMapperOperation🌀User🌀Memberships🌀Orgs(): Orgs
    {
        if ($this->operation🌀User🌀Memberships🌀Orgs instanceof Orgs === false) {
            $this->operation🌀User🌀Memberships🌀Orgs = new Orgs();
        }

        return $this->operation🌀User🌀Memberships🌀Orgs;
    }

    public function getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Memberships\Orgs\Org
    {
        if ($this->operation🌀User🌀Memberships🌀Orgs🌀Org instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Memberships\Orgs\Org === false) {
            $this->operation🌀User🌀Memberships🌀Orgs🌀Org = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Memberships\Orgs\Org();
        }

        return $this->operation🌀User🌀Memberships🌀Orgs🌀Org;
    }

    public function getObjectMapperOperation🌀User🌀Migrations(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations
    {
        if ($this->operation🌀User🌀Migrations instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations === false) {
            $this->operation🌀User🌀Migrations = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations();
        }

        return $this->operation🌀User🌀Migrations;
    }

    public function getObjectMapperOperation🌀User🌀Migrations🌀MigrationId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations\MigrationId
    {
        if ($this->operation🌀User🌀Migrations🌀MigrationId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations\MigrationId === false) {
            $this->operation🌀User🌀Migrations🌀MigrationId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations\MigrationId();
        }

        return $this->operation🌀User🌀Migrations🌀MigrationId;
    }

    public function getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Archive(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations\MigrationId\Archive
    {
        if ($this->operation🌀User🌀Migrations🌀MigrationId🌀Archive instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations\MigrationId\Archive === false) {
            $this->operation🌀User🌀Migrations🌀MigrationId🌀Archive = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations\MigrationId\Archive();
        }

        return $this->operation🌀User🌀Migrations🌀MigrationId🌀Archive;
    }

    public function getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations\MigrationId\Repos\RepoName\Lock
    {
        if ($this->operation🌀User🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations\MigrationId\Repos\RepoName\Lock === false) {
            $this->operation🌀User🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations\MigrationId\Repos\RepoName\Lock();
        }

        return $this->operation🌀User🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock;
    }

    public function getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repositories(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations\MigrationId\Repositories
    {
        if ($this->operation🌀User🌀Migrations🌀MigrationId🌀Repositories instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations\MigrationId\Repositories === false) {
            $this->operation🌀User🌀Migrations🌀MigrationId🌀Repositories = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Migrations\MigrationId\Repositories();
        }

        return $this->operation🌀User🌀Migrations🌀MigrationId🌀Repositories;
    }

    public function getObjectMapperOperation🌀User🌀Orgs(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Orgs
    {
        if ($this->operation🌀User🌀Orgs instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Orgs === false) {
            $this->operation🌀User🌀Orgs = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Orgs();
        }

        return $this->operation🌀User🌀Orgs;
    }

    public function getObjectMapperOperation🌀User🌀Packages(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages
    {
        if ($this->operation🌀User🌀Packages instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages === false) {
            $this->operation🌀User🌀Packages = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages();
        }

        return $this->operation🌀User🌀Packages;
    }

    public function getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName
    {
        if ($this->operation🌀User🌀Packages🌀PackageType🌀PackageName instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName === false) {
            $this->operation🌀User🌀Packages🌀PackageType🌀PackageName = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName();
        }

        return $this->operation🌀User🌀Packages🌀PackageType🌀PackageName;
    }

    public function getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Restore(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Restore
    {
        if ($this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Restore instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Restore === false) {
            $this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Restore = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Restore();
        }

        return $this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Restore;
    }

    public function getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions
    {
        if ($this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions === false) {
            $this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions();
        }

        return $this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions;
    }

    public function getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId
    {
        if ($this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId === false) {
            $this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId();
        }

        return $this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId;
    }

    public function getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore
    {
        if ($this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore === false) {
            $this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore();
        }

        return $this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore;
    }

    public function getObjectMapperOperation🌀User🌀Projects(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Projects
    {
        if ($this->operation🌀User🌀Projects instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Projects === false) {
            $this->operation🌀User🌀Projects = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Projects();
        }

        return $this->operation🌀User🌀Projects;
    }

    public function getObjectMapperOperation🌀User🌀PublicEmails(): PublicEmails
    {
        if ($this->operation🌀User🌀PublicEmails instanceof PublicEmails === false) {
            $this->operation🌀User🌀PublicEmails = new PublicEmails();
        }

        return $this->operation🌀User🌀PublicEmails;
    }

    public function getObjectMapperOperation🌀User🌀Repos(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Repos
    {
        if ($this->operation🌀User🌀Repos instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Repos === false) {
            $this->operation🌀User🌀Repos = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Repos();
        }

        return $this->operation🌀User🌀Repos;
    }

    public function getObjectMapperOperation🌀User🌀RepositoryInvitations(): RepositoryInvitations
    {
        if ($this->operation🌀User🌀RepositoryInvitations instanceof RepositoryInvitations === false) {
            $this->operation🌀User🌀RepositoryInvitations = new RepositoryInvitations();
        }

        return $this->operation🌀User🌀RepositoryInvitations;
    }

    public function getObjectMapperOperation🌀User🌀RepositoryInvitations🌀InvitationId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\RepositoryInvitations\InvitationId
    {
        if ($this->operation🌀User🌀RepositoryInvitations🌀InvitationId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\RepositoryInvitations\InvitationId === false) {
            $this->operation🌀User🌀RepositoryInvitations🌀InvitationId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\RepositoryInvitations\InvitationId();
        }

        return $this->operation🌀User🌀RepositoryInvitations🌀InvitationId;
    }

    public function getObjectMapperOperation🌀User🌀SocialAccounts(): SocialAccounts
    {
        if ($this->operation🌀User🌀SocialAccounts instanceof SocialAccounts === false) {
            $this->operation🌀User🌀SocialAccounts = new SocialAccounts();
        }

        return $this->operation🌀User🌀SocialAccounts;
    }

    public function getObjectMapperOperation🌀User🌀SshSigningKeys(): SshSigningKeys
    {
        if ($this->operation🌀User🌀SshSigningKeys instanceof SshSigningKeys === false) {
            $this->operation🌀User🌀SshSigningKeys = new SshSigningKeys();
        }

        return $this->operation🌀User🌀SshSigningKeys;
    }

    public function getObjectMapperOperation🌀User🌀SshSigningKeys🌀SshSigningKeyId(): SshSigningKeyId
    {
        if ($this->operation🌀User🌀SshSigningKeys🌀SshSigningKeyId instanceof SshSigningKeyId === false) {
            $this->operation🌀User🌀SshSigningKeys🌀SshSigningKeyId = new SshSigningKeyId();
        }

        return $this->operation🌀User🌀SshSigningKeys🌀SshSigningKeyId;
    }

    public function getObjectMapperOperation🌀User🌀Starred(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Starred
    {
        if ($this->operation🌀User🌀Starred instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Starred === false) {
            $this->operation🌀User🌀Starred = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Starred();
        }

        return $this->operation🌀User🌀Starred;
    }

    public function getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Starred\Owner\Repo
    {
        if ($this->operation🌀User🌀Starred🌀Owner🌀Repo instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Starred\Owner\Repo === false) {
            $this->operation🌀User🌀Starred🌀Owner🌀Repo = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Starred\Owner\Repo();
        }

        return $this->operation🌀User🌀Starred🌀Owner🌀Repo;
    }

    public function getObjectMapperOperation🌀User🌀Subscriptions(): Subscriptions
    {
        if ($this->operation🌀User🌀Subscriptions instanceof Subscriptions === false) {
            $this->operation🌀User🌀Subscriptions = new Subscriptions();
        }

        return $this->operation🌀User🌀Subscriptions;
    }

    public function getObjectMapperOperation🌀User🌀Teams(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Teams
    {
        if ($this->operation🌀User🌀Teams instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Teams === false) {
            $this->operation🌀User🌀Teams = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Teams();
        }

        return $this->operation🌀User🌀Teams;
    }

    public function getObjectMapperOperation🌀User🌀AccountId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\AccountId
    {
        if ($this->operation🌀User🌀AccountId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\AccountId === false) {
            $this->operation🌀User🌀AccountId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\AccountId();
        }

        return $this->operation🌀User🌀AccountId;
    }

    public function getObjectMapperOperation🌀Users(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users
    {
        if ($this->operation🌀Users instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users === false) {
            $this->operation🌀Users = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users();
        }

        return $this->operation🌀Users;
    }

    public function getObjectMapperOperation🌀Users🌀Username(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username
    {
        if ($this->operation🌀Users🌀Username instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username === false) {
            $this->operation🌀Users🌀Username = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username();
        }

        return $this->operation🌀Users🌀Username;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Attestations🌀SubjectDigest(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Attestations\SubjectDigest
    {
        if ($this->operation🌀Users🌀Username🌀Attestations🌀SubjectDigest instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Attestations\SubjectDigest === false) {
            $this->operation🌀Users🌀Username🌀Attestations🌀SubjectDigest = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Attestations\SubjectDigest();
        }

        return $this->operation🌀Users🌀Username🌀Attestations🌀SubjectDigest;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Docker🌀Conflicts(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Docker\Conflicts
    {
        if ($this->operation🌀Users🌀Username🌀Docker🌀Conflicts instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Docker\Conflicts === false) {
            $this->operation🌀Users🌀Username🌀Docker🌀Conflicts = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Docker\Conflicts();
        }

        return $this->operation🌀Users🌀Username🌀Docker🌀Conflicts;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Events(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Events
    {
        if ($this->operation🌀Users🌀Username🌀Events instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Events === false) {
            $this->operation🌀Users🌀Username🌀Events = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Events();
        }

        return $this->operation🌀Users🌀Username🌀Events;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Events🌀Orgs🌀Org(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Events\Orgs\Org
    {
        if ($this->operation🌀Users🌀Username🌀Events🌀Orgs🌀Org instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Events\Orgs\Org === false) {
            $this->operation🌀Users🌀Username🌀Events🌀Orgs🌀Org = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Events\Orgs\Org();
        }

        return $this->operation🌀Users🌀Username🌀Events🌀Orgs🌀Org;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Events🌀Public_(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Events\Public_
    {
        if ($this->operation🌀Users🌀Username🌀Events🌀Public_ instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Events\Public_ === false) {
            $this->operation🌀Users🌀Username🌀Events🌀Public_ = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Events\Public_();
        }

        return $this->operation🌀Users🌀Username🌀Events🌀Public_;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Followers(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Followers
    {
        if ($this->operation🌀Users🌀Username🌀Followers instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Followers === false) {
            $this->operation🌀Users🌀Username🌀Followers = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Followers();
        }

        return $this->operation🌀Users🌀Username🌀Followers;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Following(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Following
    {
        if ($this->operation🌀Users🌀Username🌀Following instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Following === false) {
            $this->operation🌀Users🌀Username🌀Following = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Following();
        }

        return $this->operation🌀Users🌀Username🌀Following;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Following🌀TargetUser(): TargetUser
    {
        if ($this->operation🌀Users🌀Username🌀Following🌀TargetUser instanceof TargetUser === false) {
            $this->operation🌀Users🌀Username🌀Following🌀TargetUser = new TargetUser();
        }

        return $this->operation🌀Users🌀Username🌀Following🌀TargetUser;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Gists(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Gists
    {
        if ($this->operation🌀Users🌀Username🌀Gists instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Gists === false) {
            $this->operation🌀Users🌀Username🌀Gists = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Gists();
        }

        return $this->operation🌀Users🌀Username🌀Gists;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀GpgKeys(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\GpgKeys
    {
        if ($this->operation🌀Users🌀Username🌀GpgKeys instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\GpgKeys === false) {
            $this->operation🌀Users🌀Username🌀GpgKeys = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\GpgKeys();
        }

        return $this->operation🌀Users🌀Username🌀GpgKeys;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Hovercard(): Hovercard
    {
        if ($this->operation🌀Users🌀Username🌀Hovercard instanceof Hovercard === false) {
            $this->operation🌀Users🌀Username🌀Hovercard = new Hovercard();
        }

        return $this->operation🌀Users🌀Username🌀Hovercard;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Installation(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Installation
    {
        if ($this->operation🌀Users🌀Username🌀Installation instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Installation === false) {
            $this->operation🌀Users🌀Username🌀Installation = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Installation();
        }

        return $this->operation🌀Users🌀Username🌀Installation;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Keys(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Keys
    {
        if ($this->operation🌀Users🌀Username🌀Keys instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Keys === false) {
            $this->operation🌀Users🌀Username🌀Keys = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Keys();
        }

        return $this->operation🌀Users🌀Username🌀Keys;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Orgs(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Orgs
    {
        if ($this->operation🌀Users🌀Username🌀Orgs instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Orgs === false) {
            $this->operation🌀Users🌀Username🌀Orgs = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Orgs();
        }

        return $this->operation🌀Users🌀Username🌀Orgs;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Packages(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages
    {
        if ($this->operation🌀Users🌀Username🌀Packages instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages === false) {
            $this->operation🌀Users🌀Username🌀Packages = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages();
        }

        return $this->operation🌀Users🌀Username🌀Packages;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName
    {
        if ($this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName === false) {
            $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName();
        }

        return $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Restore(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Restore
    {
        if ($this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Restore instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Restore === false) {
            $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Restore = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Restore();
        }

        return $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Restore;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions
    {
        if ($this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions === false) {
            $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions();
        }

        return $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId
    {
        if ($this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId === false) {
            $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId();
        }

        return $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore
    {
        if ($this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore === false) {
            $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore();
        }

        return $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Projects(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Projects
    {
        if ($this->operation🌀Users🌀Username🌀Projects instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Projects === false) {
            $this->operation🌀Users🌀Username🌀Projects = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Projects();
        }

        return $this->operation🌀Users🌀Username🌀Projects;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents(): ReceivedEvents
    {
        if ($this->operation🌀Users🌀Username🌀ReceivedEvents instanceof ReceivedEvents === false) {
            $this->operation🌀Users🌀Username🌀ReceivedEvents = new ReceivedEvents();
        }

        return $this->operation🌀Users🌀Username🌀ReceivedEvents;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents🌀Public_(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\ReceivedEvents\Public_
    {
        if ($this->operation🌀Users🌀Username🌀ReceivedEvents🌀Public_ instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\ReceivedEvents\Public_ === false) {
            $this->operation🌀Users🌀Username🌀ReceivedEvents🌀Public_ = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\ReceivedEvents\Public_();
        }

        return $this->operation🌀Users🌀Username🌀ReceivedEvents🌀Public_;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Repos(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Repos
    {
        if ($this->operation🌀Users🌀Username🌀Repos instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Repos === false) {
            $this->operation🌀Users🌀Username🌀Repos = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Repos();
        }

        return $this->operation🌀Users🌀Username🌀Repos;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Actions(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Settings\Billing\Actions
    {
        if ($this->operation🌀Users🌀Username🌀Settings🌀Billing🌀Actions instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Settings\Billing\Actions === false) {
            $this->operation🌀Users🌀Username🌀Settings🌀Billing🌀Actions = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Settings\Billing\Actions();
        }

        return $this->operation🌀Users🌀Username🌀Settings🌀Billing🌀Actions;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Packages(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Settings\Billing\Packages
    {
        if ($this->operation🌀Users🌀Username🌀Settings🌀Billing🌀Packages instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Settings\Billing\Packages === false) {
            $this->operation🌀Users🌀Username🌀Settings🌀Billing🌀Packages = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Settings\Billing\Packages();
        }

        return $this->operation🌀Users🌀Username🌀Settings🌀Billing🌀Packages;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Settings\Billing\SharedStorage
    {
        if ($this->operation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Settings\Billing\SharedStorage === false) {
            $this->operation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Settings\Billing\SharedStorage();
        }

        return $this->operation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀SocialAccounts(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\SocialAccounts
    {
        if ($this->operation🌀Users🌀Username🌀SocialAccounts instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\SocialAccounts === false) {
            $this->operation🌀Users🌀Username🌀SocialAccounts = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\SocialAccounts();
        }

        return $this->operation🌀Users🌀Username🌀SocialAccounts;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀SshSigningKeys(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\SshSigningKeys
    {
        if ($this->operation🌀Users🌀Username🌀SshSigningKeys instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\SshSigningKeys === false) {
            $this->operation🌀Users🌀Username🌀SshSigningKeys = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\SshSigningKeys();
        }

        return $this->operation🌀Users🌀Username🌀SshSigningKeys;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Starred(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Starred
    {
        if ($this->operation🌀Users🌀Username🌀Starred instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Starred === false) {
            $this->operation🌀Users🌀Username🌀Starred = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Starred();
        }

        return $this->operation🌀Users🌀Username🌀Starred;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Subscriptions(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Subscriptions
    {
        if ($this->operation🌀Users🌀Username🌀Subscriptions instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Subscriptions === false) {
            $this->operation🌀Users🌀Username🌀Subscriptions = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Subscriptions();
        }

        return $this->operation🌀Users🌀Username🌀Subscriptions;
    }

    public function getObjectMapperOperation🌀Versions(): \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Versions
    {
        if ($this->operation🌀Versions instanceof \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Versions === false) {
            $this->operation🌀Versions = new \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Versions();
        }

        return $this->operation🌀Versions;
    }

    public function getObjectMapperOperation🌀Zen(): Zen
    {
        if ($this->operation🌀Zen instanceof Zen === false) {
            $this->operation🌀Zen = new Zen();
        }

        return $this->operation🌀Zen;
    }
}
