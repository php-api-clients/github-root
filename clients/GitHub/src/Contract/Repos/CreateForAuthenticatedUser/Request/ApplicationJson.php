<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Repos\CreateForAuthenticatedUser\Request;

/**
 * @property string $name
 * @property ?string $description
 * @property ?string $homepage
 * @property ?bool $private
 * @property ?bool $hasIssues
 * @property ?bool $hasProjects
 * @property ?bool $hasWiki
 * @property ?bool $hasDiscussions
 * @property ?int $teamId
 * @property ?bool $autoInit
 * @property ?string $gitignoreTemplate
 * @property ?string $licenseTemplate
 * @property ?bool $allowSquashMerge
 * @property ?bool $allowMergeCommit
 * @property ?bool $allowRebaseMerge
 * @property ?bool $allowAutoMerge
 * @property ?bool $deleteBranchOnMerge
 * @property ?string $squashMergeCommitTitle
 * @property ?string $squashMergeCommitMessage
 * @property ?string $mergeCommitTitle
 * @property ?string $mergeCommitMessage
 * @property ?bool $hasDownloads
 * @property ?bool $isTemplate
 */
interface ApplicationJson
{
}
