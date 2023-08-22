<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class SecretScanning
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function listAlertsForRepo(string $owner, string $repo, string $state, string $secretType, string $resolution, int $page, int $perPage): Schema\SecretScanningAlert
    {
        if (array_key_exists(Operator\SecretScanning\ListAlertsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\SecretScanning\ListAlertsForRepo::class] = new Operator\SecretScanning\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts());
        }

        return $this->operator[Operator\SecretScanning\ListAlertsForRepo::class]->call($owner, $repo, $state, $secretType, $resolution, $page, $perPage);
    }

    public function listAlertsForRepoListing(string $owner, string $repo, string $state, string $secretType, string $resolution, int $page, int $perPage): Schema\SecretScanningAlert
    {
        if (array_key_exists(Operator\SecretScanning\ListAlertsForRepoListing::class, $this->operator) === false) {
            $this->operator[Operator\SecretScanning\ListAlertsForRepoListing::class] = new Operator\SecretScanning\ListAlertsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts());
        }

        return $this->operator[Operator\SecretScanning\ListAlertsForRepoListing::class]->call($owner, $repo, $state, $secretType, $resolution, $page, $perPage);
    }

    public function getAlert(string $owner, string $repo, int $alertNumber): Schema\SecretScanningAlert
    {
        if (array_key_exists(Operator\SecretScanning\GetAlert::class, $this->operator) === false) {
            $this->operator[Operator\SecretScanning\GetAlert::class] = new Operator\SecretScanning\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber());
        }

        return $this->operator[Operator\SecretScanning\GetAlert::class]->call($owner, $repo, $alertNumber);
    }

    public function updateAlert(string $owner, string $repo, int $alertNumber, array $params): Schema\SecretScanningAlert
    {
        if (array_key_exists(Operator\SecretScanning\UpdateAlert::class, $this->operator) === false) {
            $this->operator[Operator\SecretScanning\UpdateAlert::class] = new Operator\SecretScanning\UpdateAlert($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber());
        }

        return $this->operator[Operator\SecretScanning\UpdateAlert::class]->call($owner, $repo, $alertNumber, $params);
    }
}
