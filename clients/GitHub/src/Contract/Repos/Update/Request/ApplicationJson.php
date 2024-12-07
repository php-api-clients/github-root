<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Repos\Update\Request;

use ApiClients\Client\GitHub\Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis;

/**
 * @property ?string $name
 * @property ?string $description
 * @property ?string $homepage
 * @property ?bool $private
 * @property ?string $visibility
 * @property ?SecurityAndAnalysis $securityAndAnalysis
 * @property ?bool $hasIssues
 * @property ?bool $hasProjects
 * @property ?bool $hasWiki
 * @property ?bool $isTemplate
 * @property ?string $defaultBranch
 * @property ?bool $allowSquashMerge
 * @property ?bool $allowMergeCommit
 * @property ?bool $allowRebaseMerge
 * @property ?bool $allowAutoMerge
 * @property ?bool $deleteBranchOnMerge
 * @property ?bool $allowUpdateBranch
 * @property ?bool $useSquashPrTitleAsDefault
 * @property ?string $squashMergeCommitTitle
 * @property ?string $squashMergeCommitMessage
 * @property ?string $mergeCommitTitle
 * @property ?string $mergeCommitMessage
 * @property ?bool $archived
 * @property ?bool $allowForking
 * @property ?bool $webCommitSignoffRequired
 */
interface ApplicationJson
{
}
