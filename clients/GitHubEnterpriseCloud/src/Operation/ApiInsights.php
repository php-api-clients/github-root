<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiInsightsSummaryStats;

final class ApiInsights
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<int,Schema\ApiInsightsRouteStats> */
    public function getRouteStatsByActor(string $org, string $actorType, int $actorId, string $minTimestamp, string $maxTimestamp, array $sort, int $page, int $perPage, string $direction): iterable
    {
        return $this->operators->apiInsights👷GetRouteStatsByActor()->call($org, $actorType, $actorId, $minTimestamp, $maxTimestamp, $sort, $page, $perPage, $direction);
    }

    /** @return iterable<int,Schema\ApiInsightsRouteStats> */
    public function getRouteStatsByActorListing(string $org, string $actorType, int $actorId, string $minTimestamp, string $maxTimestamp, array $sort, int $page, int $perPage, string $direction): iterable
    {
        return $this->operators->apiInsights👷GetRouteStatsByActorListing()->call($org, $actorType, $actorId, $minTimestamp, $maxTimestamp, $sort, $page, $perPage, $direction);
    }

    /** @return iterable<int,Schema\ApiInsightsSubjectStats> */
    public function getSubjectStats(string $org, string $minTimestamp, string $maxTimestamp, array $sort, int $page, int $perPage, string $direction): iterable
    {
        return $this->operators->apiInsights👷GetSubjectStats()->call($org, $minTimestamp, $maxTimestamp, $sort, $page, $perPage, $direction);
    }

    /** @return iterable<int,Schema\ApiInsightsSubjectStats> */
    public function getSubjectStatsListing(string $org, string $minTimestamp, string $maxTimestamp, array $sort, int $page, int $perPage, string $direction): iterable
    {
        return $this->operators->apiInsights👷GetSubjectStatsListing()->call($org, $minTimestamp, $maxTimestamp, $sort, $page, $perPage, $direction);
    }

    public function getSummaryStats(string $org, string $minTimestamp, string $maxTimestamp): ApiInsightsSummaryStats
    {
        return $this->operators->apiInsights👷GetSummaryStats()->call($org, $minTimestamp, $maxTimestamp);
    }

    public function getSummaryStatsByUser(string $org, string $userId, string $minTimestamp, string $maxTimestamp): ApiInsightsSummaryStats
    {
        return $this->operators->apiInsights👷GetSummaryStatsByUser()->call($org, $userId, $minTimestamp, $maxTimestamp);
    }

    public function getSummaryStatsByActor(string $org, string $minTimestamp, string $maxTimestamp, string $actorType, int $actorId): ApiInsightsSummaryStats
    {
        return $this->operators->apiInsights👷GetSummaryStatsByActor()->call($org, $minTimestamp, $maxTimestamp, $actorType, $actorId);
    }

    /** @return iterable<int,Schema\ApiInsightsTimeStats> */
    public function getTimeStats(string $org, string $minTimestamp, string $maxTimestamp, string $timestampIncrement): iterable
    {
        return $this->operators->apiInsights👷GetTimeStats()->call($org, $minTimestamp, $maxTimestamp, $timestampIncrement);
    }

    /** @return iterable<int,Schema\ApiInsightsTimeStats> */
    public function getTimeStatsByUser(string $org, string $userId, string $minTimestamp, string $maxTimestamp, string $timestampIncrement): iterable
    {
        return $this->operators->apiInsights👷GetTimeStatsByUser()->call($org, $userId, $minTimestamp, $maxTimestamp, $timestampIncrement);
    }

    /** @return iterable<int,Schema\ApiInsightsTimeStats> */
    public function getTimeStatsByActor(string $org, string $actorType, int $actorId, string $minTimestamp, string $maxTimestamp, string $timestampIncrement): iterable
    {
        return $this->operators->apiInsights👷GetTimeStatsByActor()->call($org, $actorType, $actorId, $minTimestamp, $maxTimestamp, $timestampIncrement);
    }

    /** @return iterable<int,Schema\ApiInsightsUserStats> */
    public function getUserStats(string $org, string $userId, string $minTimestamp, string $maxTimestamp, array $sort, int $page, int $perPage, string $direction): iterable
    {
        return $this->operators->apiInsights👷GetUserStats()->call($org, $userId, $minTimestamp, $maxTimestamp, $sort, $page, $perPage, $direction);
    }

    /** @return iterable<int,Schema\ApiInsightsUserStats> */
    public function getUserStatsListing(string $org, string $userId, string $minTimestamp, string $maxTimestamp, array $sort, int $page, int $perPage, string $direction): iterable
    {
        return $this->operators->apiInsights👷GetUserStatsListing()->call($org, $userId, $minTimestamp, $maxTimestamp, $sort, $page, $perPage, $direction);
    }
}
