<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $day
 * @property ?int $totalSuggestionsCount
 * @property ?int $totalAcceptancesCount
 * @property ?int $totalLinesSuggested
 * @property ?int $totalLinesAccepted
 * @property ?int $totalActiveUsers
 * @property ?int $totalChatAcceptances
 * @property ?int $totalChatTurns
 * @property ?int $totalActiveChatUsers
 * @property ?array $breakdown
 */
interface CopilotUsageMetrics
{
}
