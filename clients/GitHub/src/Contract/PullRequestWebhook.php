<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property ?bool $allowAutoMerge
 * @property ?bool $allowUpdateBranch
 * @property ?bool $deleteBranchOnMerge
 * @property ?string $mergeCommitMessage
 * @property ?string $mergeCommitTitle
 * @property ?string $squashMergeCommitMessage
 * @property ?string $squashMergeCommitTitle
 * @property ?bool $useSquashPrTitleAsDefault
 */
interface PullRequestWebhook
{
}
