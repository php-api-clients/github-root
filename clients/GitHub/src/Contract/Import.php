<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property ?string $vcs
 * @property ?bool $useLfs
 * @property string $vcsUrl
 * @property ?string $svcRoot
 * @property ?string $tfvcProject
 * @property string $status
 * @property ?string $statusText
 * @property ?string $failedStep
 * @property ?string $errorMessage
 * @property ?int $importPercent
 * @property ?int $commitCount
 * @property ?int $pushPercent
 * @property ?bool $hasLargeFiles
 * @property ?int $largeFilesSize
 * @property ?int $largeFilesCount
 * @property ?array $projectChoices
 * @property ?string $message
 * @property ?int $authorsCount
 * @property string $url
 * @property string $htmlUrl
 * @property string $authorsUrl
 * @property string $repositoryUrl
 * @property ?string $svnRoot
 */
interface Import
{
}
