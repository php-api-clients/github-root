<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Repos\CreateRepoRuleset\Request;

use ApiClients\Client\GitHub\Schema\RepositoryRuleBranchNamePattern;
use ApiClients\Client\GitHub\Schema\RepositoryRuleCodeScanning;
use ApiClients\Client\GitHub\Schema\RepositoryRuleCommitAuthorEmailPattern;
use ApiClients\Client\GitHub\Schema\RepositoryRuleCommitMessagePattern;
use ApiClients\Client\GitHub\Schema\RepositoryRuleCommitterEmailPattern;
use ApiClients\Client\GitHub\Schema\RepositoryRuleCreation;
use ApiClients\Client\GitHub\Schema\RepositoryRuleDeletion;
use ApiClients\Client\GitHub\Schema\RepositoryRuleMergeQueue;
use ApiClients\Client\GitHub\Schema\RepositoryRuleNonFastForward;
use ApiClients\Client\GitHub\Schema\RepositoryRulePullRequest;
use ApiClients\Client\GitHub\Schema\RepositoryRuleRequiredDeployments;
use ApiClients\Client\GitHub\Schema\RepositoryRuleRequiredLinearHistory;
use ApiClients\Client\GitHub\Schema\RepositoryRuleRequiredSignatures;
use ApiClients\Client\GitHub\Schema\RepositoryRuleRequiredStatusChecks;
use ApiClients\Client\GitHub\Schema\RepositoryRuleset\Rules\Eighteen;
use ApiClients\Client\GitHub\Schema\RepositoryRuleset\Rules\Fifteen;
use ApiClients\Client\GitHub\Schema\RepositoryRuleset\Rules\Seventeen;
use ApiClients\Client\GitHub\Schema\RepositoryRuleset\Rules\Sixteen;
use ApiClients\Client\GitHub\Schema\RepositoryRulesetConditions;
use ApiClients\Client\GitHub\Schema\RepositoryRuleTagNamePattern;
use ApiClients\Client\GitHub\Schema\RepositoryRuleUpdate;
use ApiClients\Client\GitHub\Schema\RepositoryRuleWorkflows;

/**
 * @property string $name
 * @property ?string $target
 * @property string $enforcement
 * @property ?array $bypassActors
 * @property ?RepositoryRulesetConditions $conditions
 * @property ?array<RepositoryRuleCreation|RepositoryRuleUpdate|RepositoryRuleDeletion|RepositoryRuleRequiredLinearHistory|RepositoryRuleMergeQueue|RepositoryRuleRequiredDeployments|RepositoryRuleRequiredSignatures|RepositoryRulePullRequest|RepositoryRuleRequiredStatusChecks|RepositoryRuleNonFastForward|RepositoryRuleCommitMessagePattern|RepositoryRuleCommitAuthorEmailPattern|RepositoryRuleCommitterEmailPattern|RepositoryRuleBranchNamePattern|RepositoryRuleTagNamePattern|Fifteen|Sixteen|Seventeen|Eighteen|RepositoryRuleWorkflows|RepositoryRuleCodeScanning> $rules
 */
interface ApplicationJson
{
}
