<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\CopilotUsageMetrics;

/**
 * @property ?string $language
 * @property ?string $editor
 * @property ?int $suggestionsCount
 * @property ?int $acceptancesCount
 * @property ?int $linesSuggested
 * @property ?int $linesAccepted
 * @property ?int $activeUsers
 */
interface Breakdown
{
}
