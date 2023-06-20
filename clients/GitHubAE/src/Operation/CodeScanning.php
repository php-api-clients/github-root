<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;
use React\Promise\PromiseInterface;

use function array_key_exists;

final class CodeScanning
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function listAlertsForOrg(string $org, string $toolName, string|null $toolGuid, string $before, string $after, string $state, string $severity, int $page, int $perPage, string $direction, string $sort): PromiseInterface
    {
        if (array_key_exists(Operator\CodeScanning\ListAlertsForOrg::class, $this->operator) === false) {
            $this->operator[Operator\CodeScanning\ListAlertsForOrg::class] = new Operator\CodeScanning\ListAlertsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeScanning🌀Alerts());
        }

        return $this->operator[Operator\CodeScanning\ListAlertsForOrg::class]->call($org, $toolName, $toolGuid, $before, $after, $state, $severity, $page, $perPage, $direction, $sort);
    }

    public function listAlertsForRepo(string $owner, string $repo, string $toolName, string|null $toolGuid, string $ref, string $state, string $severity, int $page, int $perPage, string $direction, string $sort): PromiseInterface
    {
        if (array_key_exists(Operator\CodeScanning\ListAlertsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\CodeScanning\ListAlertsForRepo::class] = new Operator\CodeScanning\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts());
        }

        return $this->operator[Operator\CodeScanning\ListAlertsForRepo::class]->call($owner, $repo, $toolName, $toolGuid, $ref, $state, $severity, $page, $perPage, $direction, $sort);
    }

    public function getAlert(string $owner, string $repo, int $alertNumber): PromiseInterface
    {
        if (array_key_exists(Operator\CodeScanning\GetAlert::class, $this->operator) === false) {
            $this->operator[Operator\CodeScanning\GetAlert::class] = new Operator\CodeScanning\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber());
        }

        return $this->operator[Operator\CodeScanning\GetAlert::class]->call($owner, $repo, $alertNumber);
    }

    public function updateAlert(string $owner, string $repo, int $alertNumber, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\CodeScanning\UpdateAlert::class, $this->operator) === false) {
            $this->operator[Operator\CodeScanning\UpdateAlert::class] = new Operator\CodeScanning\UpdateAlert($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber());
        }

        return $this->operator[Operator\CodeScanning\UpdateAlert::class]->call($owner, $repo, $alertNumber, $params);
    }

    public function listAlertInstances(string $owner, string $repo, int $alertNumber, string $ref, int $page, int $perPage): PromiseInterface
    {
        if (array_key_exists(Operator\CodeScanning\ListAlertInstances::class, $this->operator) === false) {
            $this->operator[Operator\CodeScanning\ListAlertInstances::class] = new Operator\CodeScanning\ListAlertInstances($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances());
        }

        return $this->operator[Operator\CodeScanning\ListAlertInstances::class]->call($owner, $repo, $alertNumber, $ref, $page, $perPage);
    }

    public function listRecentAnalyses(string $owner, string $repo, string $toolName, string|null $toolGuid, string $ref, string $sarifId, int $page, int $perPage, string $direction, string $sort): PromiseInterface
    {
        if (array_key_exists(Operator\CodeScanning\ListRecentAnalyses::class, $this->operator) === false) {
            $this->operator[Operator\CodeScanning\ListRecentAnalyses::class] = new Operator\CodeScanning\ListRecentAnalyses($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses());
        }

        return $this->operator[Operator\CodeScanning\ListRecentAnalyses::class]->call($owner, $repo, $toolName, $toolGuid, $ref, $sarifId, $page, $perPage, $direction, $sort);
    }

    public function getAnalysis(string $owner, string $repo, int $analysisId): PromiseInterface
    {
        if (array_key_exists(Operator\CodeScanning\GetAnalysis::class, $this->operator) === false) {
            $this->operator[Operator\CodeScanning\GetAnalysis::class] = new Operator\CodeScanning\GetAnalysis($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId());
        }

        return $this->operator[Operator\CodeScanning\GetAnalysis::class]->call($owner, $repo, $analysisId);
    }

    public function deleteAnalysis(string $owner, string $repo, int $analysisId, string|null $confirmDelete): PromiseInterface
    {
        if (array_key_exists(Operator\CodeScanning\DeleteAnalysis::class, $this->operator) === false) {
            $this->operator[Operator\CodeScanning\DeleteAnalysis::class] = new Operator\CodeScanning\DeleteAnalysis($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId());
        }

        return $this->operator[Operator\CodeScanning\DeleteAnalysis::class]->call($owner, $repo, $analysisId, $confirmDelete);
    }

    public function uploadSarif(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\CodeScanning\UploadSarif::class, $this->operator) === false) {
            $this->operator[Operator\CodeScanning\UploadSarif::class] = new Operator\CodeScanning\UploadSarif($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs());
        }

        return $this->operator[Operator\CodeScanning\UploadSarif::class]->call($owner, $repo, $params);
    }

    public function getSarif(string $owner, string $repo, string $sarifId): PromiseInterface
    {
        if (array_key_exists(Operator\CodeScanning\GetSarif::class, $this->operator) === false) {
            $this->operator[Operator\CodeScanning\GetSarif::class] = new Operator\CodeScanning\GetSarif($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId());
        }

        return $this->operator[Operator\CodeScanning\GetSarif::class]->call($owner, $repo, $sarifId);
    }
}
