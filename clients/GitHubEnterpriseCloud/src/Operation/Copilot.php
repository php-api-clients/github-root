<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CopilotOrganizationDetails;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CopilotSeatDetails;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\AddCopilotForBusinessSeatsForTeams\Response\ApplicationJson\Created;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\AddCopilotForBusinessSeatsForUsers\Response\ApplicationJson\Created\Application\Json;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\ListCopilotSeats\Response\ApplicationJson\Ok;

final class Copilot
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Schema\CopilotOrganizationDetails */
    public function getCopilotOrganizationDetails(string $org): CopilotOrganizationDetails|array
    {
        return $this->operators->copilot👷GetCopilotOrganizationDetails()->call($org);
    }

    /** @return Schema\Operations\Copilot\ListCopilotSeats\Response\ApplicationJson\Ok */
    public function listCopilotSeats(string $org, int $page, int $perPage): Ok|array
    {
        return $this->operators->copilot👷ListCopilotSeats()->call($org, $page, $perPage);
    }

    /** @return Schema\Operations\Copilot\AddCopilotForBusinessSeatsForTeams\Response\ApplicationJson\Created|array{code:int} */
    public function addCopilotForBusinessSeatsForTeams(string $org, array $params): Created|array
    {
        return $this->operators->copilot👷AddCopilotForBusinessSeatsForTeams()->call($org, $params);
    }

    /** @return Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok|array{code:int} */
    public function cancelCopilotSeatAssignmentForTeams(string $org, array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok|array
    {
        return $this->operators->copilot👷CancelCopilotSeatAssignmentForTeams()->call($org, $params);
    }

    /** @return Schema\Operations\Copilot\AddCopilotForBusinessSeatsForUsers\Response\ApplicationJson\Created\Application\Json|array{code:int} */
    public function addCopilotForBusinessSeatsForUsers(string $org, array $params): Json|array
    {
        return $this->operators->copilot👷AddCopilotForBusinessSeatsForUsers()->call($org, $params);
    }

    /** @return Schema\Operations\Copilot\CancelCopilotSeatAssignmentForUsers\Response\ApplicationJson\Ok\Application\Json|array{code:int} */
    public function cancelCopilotSeatAssignmentForUsers(string $org, array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForUsers\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->copilot👷CancelCopilotSeatAssignmentForUsers()->call($org, $params);
    }

    /** @return Schema\CopilotSeatDetails|array{code:int} */
    public function getCopilotSeatAssignmentDetailsForUser(string $org, string $username): CopilotSeatDetails|array
    {
        return $this->operators->copilot👷GetCopilotSeatAssignmentDetailsForUser()->call($org, $username);
    }
}
