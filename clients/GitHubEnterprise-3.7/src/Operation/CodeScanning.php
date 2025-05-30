<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAlert;
use ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysis;
use ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysisDeletion;
use ApiClients\Client\GitHubEnterprise\Schema\CodeScanningSarifsReceipt;
use ApiClients\Client\GitHubEnterprise\Schema\CodeScanningSarifsStatus;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class CodeScanning
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\CodeScanningOrganizationAlertItems> */
    public function listAlertsForEnterprise(string $enterprise, string $toolName, string|null $toolGuid, string $before, string $after, string $state, int $page, int $perPage, string $direction, string $sort): iterable
    {
        return $this->operators->codeScanning👷ListAlertsForEnterprise()->call($enterprise, $toolName, $toolGuid, $before, $after, $state, $page, $perPage, $direction, $sort);
    }

    /** @return Observable<Schema\CodeScanningOrganizationAlertItems> */
    public function listAlertsForEnterpriseListing(string $enterprise, string $toolName, string|null $toolGuid, string $before, string $after, string $state, int $page, int $perPage, string $direction, string $sort): iterable
    {
        return $this->operators->codeScanning👷ListAlertsForEnterpriseListing()->call($enterprise, $toolName, $toolGuid, $before, $after, $state, $page, $perPage, $direction, $sort);
    }

    /** @return Observable<Schema\CodeScanningOrganizationAlertItems> */
    public function listAlertsForOrg(string $org, string $toolName, string|null $toolGuid, string $before, string $after, string $state, int $page, int $perPage, string $direction, string $sort): iterable
    {
        return $this->operators->codeScanning👷ListAlertsForOrg()->call($org, $toolName, $toolGuid, $before, $after, $state, $page, $perPage, $direction, $sort);
    }

    /** @return Observable<Schema\CodeScanningOrganizationAlertItems> */
    public function listAlertsForOrgListing(string $org, string $toolName, string|null $toolGuid, string $before, string $after, string $state, int $page, int $perPage, string $direction, string $sort): iterable
    {
        return $this->operators->codeScanning👷ListAlertsForOrgListing()->call($org, $toolName, $toolGuid, $before, $after, $state, $page, $perPage, $direction, $sort);
    }

    /** @return Observable<Schema\CodeScanningAlertItems>|WithoutBody */
    public function listAlertsForRepo(string $owner, string $repo, string $toolName, string|null $toolGuid, string $ref, string $state, int $page, int $perPage, string $direction, string $sort): iterable|WithoutBody
    {
        return $this->operators->codeScanning👷ListAlertsForRepo()->call($owner, $repo, $toolName, $toolGuid, $ref, $state, $page, $perPage, $direction, $sort);
    }

    /** @return Observable<Schema\CodeScanningAlertItems>|WithoutBody */
    public function listAlertsForRepoListing(string $owner, string $repo, string $toolName, string|null $toolGuid, string $ref, string $state, int $page, int $perPage, string $direction, string $sort): iterable|WithoutBody
    {
        return $this->operators->codeScanning👷ListAlertsForRepoListing()->call($owner, $repo, $toolName, $toolGuid, $ref, $state, $page, $perPage, $direction, $sort);
    }

    /** @return */
    public function getAlert(string $owner, string $repo, int $alertNumber): CodeScanningAlert|WithoutBody
    {
        return $this->operators->codeScanning👷GetAlert()->call($owner, $repo, $alertNumber);
    }

    /** @return */
    public function updateAlert(string $owner, string $repo, int $alertNumber, array $params): CodeScanningAlert
    {
        return $this->operators->codeScanning👷UpdateAlert()->call($owner, $repo, $alertNumber, $params);
    }

    /** @return Observable<Schema\CodeScanningAlertInstance> */
    public function listAlertInstances(string $owner, string $repo, int $alertNumber, string $ref, int $page, int $perPage): iterable
    {
        return $this->operators->codeScanning👷ListAlertInstances()->call($owner, $repo, $alertNumber, $ref, $page, $perPage);
    }

    /** @return Observable<Schema\CodeScanningAlertInstance> */
    public function listAlertInstancesListing(string $owner, string $repo, int $alertNumber, string $ref, int $page, int $perPage): iterable
    {
        return $this->operators->codeScanning👷ListAlertInstancesListing()->call($owner, $repo, $alertNumber, $ref, $page, $perPage);
    }

    /** @return Observable<Schema\CodeScanningAnalysis> */
    public function listRecentAnalyses(string $owner, string $repo, string $toolName, string|null $toolGuid, string $ref, string $sarifId, int $page, int $perPage, string $direction, string $sort): iterable
    {
        return $this->operators->codeScanning👷ListRecentAnalyses()->call($owner, $repo, $toolName, $toolGuid, $ref, $sarifId, $page, $perPage, $direction, $sort);
    }

    /** @return Observable<Schema\CodeScanningAnalysis> */
    public function listRecentAnalysesListing(string $owner, string $repo, string $toolName, string|null $toolGuid, string $ref, string $sarifId, int $page, int $perPage, string $direction, string $sort): iterable
    {
        return $this->operators->codeScanning👷ListRecentAnalysesListing()->call($owner, $repo, $toolName, $toolGuid, $ref, $sarifId, $page, $perPage, $direction, $sort);
    }

    /** @return */
    public function getAnalysis(string $owner, string $repo, int $analysisId): CodeScanningAnalysis
    {
        return $this->operators->codeScanning👷GetAnalysis()->call($owner, $repo, $analysisId);
    }

    /** @return */
    public function deleteAnalysis(string $owner, string $repo, int $analysisId, string|null $confirmDelete): CodeScanningAnalysisDeletion
    {
        return $this->operators->codeScanning👷DeleteAnalysis()->call($owner, $repo, $analysisId, $confirmDelete);
    }

    /** @return */
    public function uploadSarif(string $owner, string $repo, array $params): CodeScanningSarifsReceipt|WithoutBody
    {
        return $this->operators->codeScanning👷UploadSarif()->call($owner, $repo, $params);
    }

    /** @return */
    public function getSarif(string $owner, string $repo, string $sarifId): CodeScanningSarifsStatus|WithoutBody
    {
        return $this->operators->codeScanning👷GetSarif()->call($owner, $repo, $sarifId);
    }
}
