<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Operators;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\SecretScanningAlert;

final class SecretScanning
{
    public function __construct(private Operators $operators)
    {
    }

    /** @return iterable<Schema\SecretScanningAlert>|array{code:int} */
    public function listAlertsForRepo(string $owner, string $repo, string $state, string $secretType, string $resolution, int $page, int $perPage): iterable
    {
        return $this->operators->secretScanning👷ListAlertsForRepo()->call($owner, $repo, $state, $secretType, $resolution, $page, $perPage);
    }

    /** @return iterable<Schema\SecretScanningAlert>|array{code:int} */
    public function listAlertsForRepoListing(string $owner, string $repo, string $state, string $secretType, string $resolution, int $page, int $perPage): iterable
    {
        return $this->operators->secretScanning👷ListAlertsForRepoListing()->call($owner, $repo, $state, $secretType, $resolution, $page, $perPage);
    }

    /** @return Schema\SecretScanningAlert|array{code:int} */
    public function getAlert(string $owner, string $repo, int $alertNumber): SecretScanningAlert|array
    {
        return $this->operators->secretScanning👷GetAlert()->call($owner, $repo, $alertNumber);
    }

    /** @return Schema\SecretScanningAlert|array{code:int} */
    public function updateAlert(string $owner, string $repo, int $alertNumber, array $params): SecretScanningAlert|array
    {
        return $this->operators->secretScanning👷UpdateAlert()->call($owner, $repo, $alertNumber, $params);
    }
}
