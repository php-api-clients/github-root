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

final class CodeScanning
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function listAlertsForRepo(string $owner, string $repo, string $toolName, string|null $toolGuid, string $ref, string $state, int $page, int $perPage): Schema\CodeScanningAlertItems
    {
        if (array_key_exists(Operator\CodeScanning\ListAlertsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\CodeScanning\ListAlertsForRepo::class] = new Operator\CodeScanning\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts());
        }

        return $this->operator[Operator\CodeScanning\ListAlertsForRepo::class]->call($owner, $repo, $toolName, $toolGuid, $ref, $state, $page, $perPage);
    }

    public function listAlertsForRepoListing(string $owner, string $repo, string $toolName, string|null $toolGuid, string $ref, string $state, int $page, int $perPage): Schema\CodeScanningAlertItems
    {
        if (array_key_exists(Operator\CodeScanning\ListAlertsForRepoListing::class, $this->operator) === false) {
            $this->operator[Operator\CodeScanning\ListAlertsForRepoListing::class] = new Operator\CodeScanning\ListAlertsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts());
        }

        return $this->operator[Operator\CodeScanning\ListAlertsForRepoListing::class]->call($owner, $repo, $toolName, $toolGuid, $ref, $state, $page, $perPage);
    }

    public function getAlert(string $owner, string $repo, int $alertNumber): Schema\CodeScanningAlert
    {
        if (array_key_exists(Operator\CodeScanning\GetAlert::class, $this->operator) === false) {
            $this->operator[Operator\CodeScanning\GetAlert::class] = new Operator\CodeScanning\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber());
        }

        return $this->operator[Operator\CodeScanning\GetAlert::class]->call($owner, $repo, $alertNumber);
    }

    public function updateAlert(string $owner, string $repo, int $alertNumber, array $params): Schema\CodeScanningAlert
    {
        if (array_key_exists(Operator\CodeScanning\UpdateAlert::class, $this->operator) === false) {
            $this->operator[Operator\CodeScanning\UpdateAlert::class] = new Operator\CodeScanning\UpdateAlert($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber());
        }

        return $this->operator[Operator\CodeScanning\UpdateAlert::class]->call($owner, $repo, $alertNumber, $params);
    }

    public function listRecentAnalyses(string $owner, string $repo, string $toolName, string|null $toolGuid, string $ref, string $sarifId, int $page, int $perPage): Schema\CodeScanningAnalysis
    {
        if (array_key_exists(Operator\CodeScanning\ListRecentAnalyses::class, $this->operator) === false) {
            $this->operator[Operator\CodeScanning\ListRecentAnalyses::class] = new Operator\CodeScanning\ListRecentAnalyses($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses());
        }

        return $this->operator[Operator\CodeScanning\ListRecentAnalyses::class]->call($owner, $repo, $toolName, $toolGuid, $ref, $sarifId, $page, $perPage);
    }

    public function listRecentAnalysesListing(string $owner, string $repo, string $toolName, string|null $toolGuid, string $ref, string $sarifId, int $page, int $perPage): Schema\CodeScanningAnalysis
    {
        if (array_key_exists(Operator\CodeScanning\ListRecentAnalysesListing::class, $this->operator) === false) {
            $this->operator[Operator\CodeScanning\ListRecentAnalysesListing::class] = new Operator\CodeScanning\ListRecentAnalysesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses());
        }

        return $this->operator[Operator\CodeScanning\ListRecentAnalysesListing::class]->call($owner, $repo, $toolName, $toolGuid, $ref, $sarifId, $page, $perPage);
    }

    public function uploadSarif(string $owner, string $repo, array $params): Schema\CodeScanningSarifsReceipt
    {
        if (array_key_exists(Operator\CodeScanning\UploadSarif::class, $this->operator) === false) {
            $this->operator[Operator\CodeScanning\UploadSarif::class] = new Operator\CodeScanning\UploadSarif($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs());
        }

        return $this->operator[Operator\CodeScanning\UploadSarif::class]->call($owner, $repo, $params);
    }
}
