<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property bool $adminEnforced
 * @property string $allowDeletionsEnforcementLevel
 * @property string $allowForcePushesEnforcementLevel
 * @property array $authorizedActorNames
 * @property bool $authorizedActorsOnly
 * @property bool $authorizedDismissalActorsOnly
 * @property ?bool $createProtected
 * @property string $createdAt
 * @property bool $dismissStaleReviewsOnPush
 * @property int $id
 * @property bool $ignoreApprovalsFromContributors
 * @property string $linearHistoryRequirementEnforcementLevel
 * @property string $lockBranchEnforcementLevel
 * @property ?bool $lockAllowsForkSync
 * @property string $mergeQueueEnforcementLevel
 * @property string $name
 * @property string $pullRequestReviewsEnforcementLevel
 * @property int $repositoryId
 * @property bool $requireCodeOwnerReview
 * @property ?bool $requireLastPushApproval
 * @property int $requiredApprovingReviewCount
 * @property string $requiredConversationResolutionLevel
 * @property string $requiredDeploymentsEnforcementLevel
 * @property array $requiredStatusChecks
 * @property string $requiredStatusChecksEnforcementLevel
 * @property string $signatureRequirementEnforcementLevel
 * @property bool $strictRequiredStatusChecksPolicy
 * @property string $updatedAt
 */
interface WebhooksRule
{
}
