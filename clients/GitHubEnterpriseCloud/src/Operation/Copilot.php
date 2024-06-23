<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CopilotOrganizationDetails;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CopilotSeatDetails;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\AddCopilotSeatsForTeams\Response\ApplicationJson\Created;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\AddCopilotSeatsForUsers\Response\ApplicationJson\Created\Application\Json;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\ListCopilotSeatsForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Copilot
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function listCopilotSeatsForEnterprise(string $enterprise, int $page, int $perPage): Ok
    {
        return $this->operators->copilot👷ListCopilotSeatsForEnterprise()->call($enterprise, $page, $perPage);
    }

    /** @return Observable<Schema\CopilotUsageMetrics> */
    public function usageMetricsForEnterprise(string $enterprise, string $since, string $until, int $page, int $perPage): iterable
    {
        return $this->operators->copilot👷UsageMetricsForEnterprise()->call($enterprise, $since, $until, $page, $perPage);
    }

    /** @return Observable<Schema\CopilotUsageMetrics> */
    public function usageMetricsForEnterpriseListing(string $enterprise, string $since, string $until, int $page, int $perPage): iterable
    {
        return $this->operators->copilot👷UsageMetricsForEnterpriseListing()->call($enterprise, $since, $until, $page, $perPage);
    }

    /** @return */
    public function getCopilotOrganizationDetails(string $org): CopilotOrganizationDetails|WithoutBody
    {
        return $this->operators->copilot👷GetCopilotOrganizationDetails()->call($org);
    }

    /** @return */
    public function listCopilotSeats(string $org, int $page, int $perPage): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\ListCopilotSeats\Response\ApplicationJson\Ok
    {
        return $this->operators->copilot👷ListCopilotSeats()->call($org, $page, $perPage);
    }

    /** @return */
    public function addCopilotSeatsForTeams(string $org, array $params): Created|WithoutBody
    {
        return $this->operators->copilot👷AddCopilotSeatsForTeams()->call($org, $params);
    }

    /** @return */
    public function cancelCopilotSeatAssignmentForTeams(string $org, array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok|WithoutBody
    {
        return $this->operators->copilot👷CancelCopilotSeatAssignmentForTeams()->call($org, $params);
    }

    /** @return */
    public function addCopilotSeatsForUsers(string $org, array $params): Json|WithoutBody
    {
        return $this->operators->copilot👷AddCopilotSeatsForUsers()->call($org, $params);
    }

    /** @return */
    public function cancelCopilotSeatAssignmentForUsers(string $org, array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForUsers\Response\ApplicationJson\Ok\Application\Json|WithoutBody
    {
        return $this->operators->copilot👷CancelCopilotSeatAssignmentForUsers()->call($org, $params);
    }

    /** @return Observable<Schema\CopilotUsageMetrics> */
    public function usageMetricsForOrg(string $org, string $since, string $until, int $page, int $perPage): iterable
    {
        return $this->operators->copilot👷UsageMetricsForOrg()->call($org, $since, $until, $page, $perPage);
    }

    /** @return Observable<Schema\CopilotUsageMetrics> */
    public function usageMetricsForOrgListing(string $org, string $since, string $until, int $page, int $perPage): iterable
    {
        return $this->operators->copilot👷UsageMetricsForOrgListing()->call($org, $since, $until, $page, $perPage);
    }

    /** @return */
    public function getCopilotSeatDetailsForUser(string $org, string $username): CopilotSeatDetails|WithoutBody
    {
        return $this->operators->copilot👷GetCopilotSeatDetailsForUser()->call($org, $username);
    }
}
