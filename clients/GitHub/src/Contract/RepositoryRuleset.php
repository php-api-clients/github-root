<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property string $name
 * @property ?string $target
 * @property ?string $sourceType
 * @property string $source
 * @property string $enforcement
 * @property ?array $bypassActors
 * @property ?string $currentUserCanBypass
 * @property ?string $nodeId
 * @property ?\ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links $links
 * @property null|\ApiClients\Client\GitHub\Schema\RepositoryRulesetConditions|array $conditions
 * @property ?array<\ApiClients\Client\GitHub\Schema\RepositoryRuleCreation|\ApiClients\Client\GitHub\Schema\RepositoryRuleUpdate|\ApiClients\Client\GitHub\Schema\RepositoryRuleDeletion|\ApiClients\Client\GitHub\Schema\RepositoryRuleRequiredLinearHistory|\ApiClients\Client\GitHub\Schema\RepositoryRuleMergeQueue|\ApiClients\Client\GitHub\Schema\RepositoryRuleRequiredDeployments|\ApiClients\Client\GitHub\Schema\RepositoryRuleRequiredSignatures|\ApiClients\Client\GitHub\Schema\RepositoryRulePullRequest|\ApiClients\Client\GitHub\Schema\RepositoryRuleRequiredStatusChecks|\ApiClients\Client\GitHub\Schema\RepositoryRuleNonFastForward|\ApiClients\Client\GitHub\Schema\RepositoryRuleCommitMessagePattern|\ApiClients\Client\GitHub\Schema\RepositoryRuleCommitAuthorEmailPattern|\ApiClients\Client\GitHub\Schema\RepositoryRuleCommitterEmailPattern|\ApiClients\Client\GitHub\Schema\RepositoryRuleBranchNamePattern|\ApiClients\Client\GitHub\Schema\RepositoryRuleTagNamePattern|\ApiClients\Client\GitHub\Schema\RepositoryRuleset\Rules\Fifteen|\ApiClients\Client\GitHub\Schema\RepositoryRuleset\Rules\Sixteen|\ApiClients\Client\GitHub\Schema\RepositoryRuleset\Rules\Seventeen|\ApiClients\Client\GitHub\Schema\RepositoryRuleset\Rules\Eighteen|\ApiClients\Client\GitHub\Schema\RepositoryRuleWorkflows|\ApiClients\Client\GitHub\Schema\RepositoryRuleCodeScanning> $rules
 * @property ?string $createdAt
 * @property ?string $updatedAt
 */
interface RepositoryRuleset
{
}
