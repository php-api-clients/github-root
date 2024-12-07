<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookBranchProtectionRuleEdited;

use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorNames;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorsOnly;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedDismissalActorsOnly;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\LinearHistoryRequirementEnforcementLevel;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\LockAllowsForkSync;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\LockBranchEnforcementLevel;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\PullRequestReviewsEnforcementLevel;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\RequiredStatusChecks;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\RequiredStatusChecksEnforcementLevel;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\RequireLastPushApproval;

/**
 * @property ?AdminEnforced $adminEnforced
 * @property ?AuthorizedActorNames $authorizedActorNames
 * @property ?AuthorizedActorsOnly $authorizedActorsOnly
 * @property ?AuthorizedDismissalActorsOnly $authorizedDismissalActorsOnly
 * @property ?LinearHistoryRequirementEnforcementLevel $linearHistoryRequirementEnforcementLevel
 * @property ?LockBranchEnforcementLevel $lockBranchEnforcementLevel
 * @property ?LockAllowsForkSync $lockAllowsForkSync
 * @property ?PullRequestReviewsEnforcementLevel $pullRequestReviewsEnforcementLevel
 * @property ?RequireLastPushApproval $requireLastPushApproval
 * @property ?RequiredStatusChecks $requiredStatusChecks
 * @property ?RequiredStatusChecksEnforcementLevel $requiredStatusChecksEnforcementLevel
 */
interface Changes
{
}
