<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\CopilotOrganizationDetails;
use ApiClients\Client\GitHub\Schema\CopilotSeatDetails;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotSeatsForTeams\Response\ApplicationJson\Created;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\ListCopilotSeats\Response\ApplicationJson\Ok;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Copilot
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function getCopilotOrganizationDetails(string $org): CopilotOrganizationDetails|WithoutBody
    {
        return $this->operators->copilot👷GetCopilotOrganizationDetails()->call($org);
    }

    /** @return */
    public function listCopilotSeats(string $org, int $page, int $perPage): Ok
    {
        return $this->operators->copilot👷ListCopilotSeats()->call($org, $page, $perPage);
    }

    /** @return */
    public function addCopilotSeatsForTeams(string $org, array $params): Created|WithoutBody
    {
        return $this->operators->copilot👷AddCopilotSeatsForTeams()->call($org, $params);
    }

    /** @return */
    public function cancelCopilotSeatAssignmentForTeams(string $org, array $params): \ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok|WithoutBody
    {
        return $this->operators->copilot👷CancelCopilotSeatAssignmentForTeams()->call($org, $params);
    }

    /** @return */
    public function addCopilotSeatsForUsers(string $org, array $params): \ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotSeatsForUsers\Response\ApplicationJson\Created|WithoutBody
    {
        return $this->operators->copilot👷AddCopilotSeatsForUsers()->call($org, $params);
    }

    /** @return */
    public function cancelCopilotSeatAssignmentForUsers(string $org, array $params): \ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForUsers\Response\ApplicationJson\Ok|WithoutBody
    {
        return $this->operators->copilot👷CancelCopilotSeatAssignmentForUsers()->call($org, $params);
    }

    /** @return Observable<Schema\CopilotUsageMetricsDay> */
    public function copilotMetricsForOrganization(string $org, string $since, string $until, int $page, int $perPage): iterable
    {
        return $this->operators->copilot👷CopilotMetricsForOrganization()->call($org, $since, $until, $page, $perPage);
    }

    /** @return Observable<Schema\CopilotUsageMetricsDay> */
    public function copilotMetricsForOrganizationListing(string $org, string $since, string $until, int $page, int $perPage): iterable
    {
        return $this->operators->copilot👷CopilotMetricsForOrganizationListing()->call($org, $since, $until, $page, $perPage);
    }

    /** @return */
    public function getCopilotSeatDetailsForUser(string $org, string $username): CopilotSeatDetails|WithoutBody
    {
        return $this->operators->copilot👷GetCopilotSeatDetailsForUser()->call($org, $username);
    }

    /** @return Observable<Schema\CopilotUsageMetricsDay> */
    public function copilotMetricsForTeam(string $org, string $teamSlug, string $since, string $until, int $page, int $perPage): iterable
    {
        return $this->operators->copilot👷CopilotMetricsForTeam()->call($org, $teamSlug, $since, $until, $page, $perPage);
    }

    /** @return Observable<Schema\CopilotUsageMetricsDay> */
    public function copilotMetricsForTeamListing(string $org, string $teamSlug, string $since, string $until, int $page, int $perPage): iterable
    {
        return $this->operators->copilot👷CopilotMetricsForTeamListing()->call($org, $teamSlug, $since, $until, $page, $perPage);
    }
}
