<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningAlert;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningAnalysis;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningAnalysisDeletion;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningAutofix;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningAutofixCommitsResponse;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningCodeqlDatabase;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningDefaultSetup;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningDefaultSetupUpdateResponse;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningSarifsReceipt;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningSarifsStatus;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysis;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysisRepoTask;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\EmptyObject;
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
    public function listAlertsForOrg(string $org, string $toolName, string|null $toolGuid, string $before, string $after, string $state, string $severity, int $page, int $perPage, string $direction, string $sort): iterable
    {
        return $this->operators->codeScanning👷ListAlertsForOrg()->call($org, $toolName, $toolGuid, $before, $after, $state, $severity, $page, $perPage, $direction, $sort);
    }

    /** @return Observable<Schema\CodeScanningOrganizationAlertItems> */
    public function listAlertsForOrgListing(string $org, string $toolName, string|null $toolGuid, string $before, string $after, string $state, string $severity, int $page, int $perPage, string $direction, string $sort): iterable
    {
        return $this->operators->codeScanning👷ListAlertsForOrgListing()->call($org, $toolName, $toolGuid, $before, $after, $state, $severity, $page, $perPage, $direction, $sort);
    }

    /** @return Observable<Schema\CodeScanningAlertItems>|WithoutBody */
    public function listAlertsForRepo(string $owner, string $repo, string $toolName, string|null $toolGuid, string $ref, int $pr, string $before, string $after, string $state, string $severity, int $page, int $perPage, string $direction, string $sort): iterable|WithoutBody
    {
        return $this->operators->codeScanning👷ListAlertsForRepo()->call($owner, $repo, $toolName, $toolGuid, $ref, $pr, $before, $after, $state, $severity, $page, $perPage, $direction, $sort);
    }

    /** @return Observable<Schema\CodeScanningAlertItems>|WithoutBody */
    public function listAlertsForRepoListing(string $owner, string $repo, string $toolName, string|null $toolGuid, string $ref, int $pr, string $before, string $after, string $state, string $severity, int $page, int $perPage, string $direction, string $sort): iterable|WithoutBody
    {
        return $this->operators->codeScanning👷ListAlertsForRepoListing()->call($owner, $repo, $toolName, $toolGuid, $ref, $pr, $before, $after, $state, $severity, $page, $perPage, $direction, $sort);
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

    /** @return */
    public function getAutofix(string $owner, string $repo, int $alertNumber): CodeScanningAutofix
    {
        return $this->operators->codeScanning👷GetAutofix()->call($owner, $repo, $alertNumber);
    }

    /** @return */
    public function createAutofix(string $owner, string $repo, int $alertNumber): CodeScanningAutofix|WithoutBody
    {
        return $this->operators->codeScanning👷CreateAutofix()->call($owner, $repo, $alertNumber);
    }

    /** @return */
    public function commitAutofix(string $owner, string $repo, int $alertNumber, array $params): CodeScanningAutofixCommitsResponse|WithoutBody
    {
        return $this->operators->codeScanning👷CommitAutofix()->call($owner, $repo, $alertNumber, $params);
    }

    /** @return Observable<Schema\CodeScanningAlertInstance> */
    public function listAlertInstances(string $owner, string $repo, int $alertNumber, string $ref, int $pr, int $page, int $perPage): iterable
    {
        return $this->operators->codeScanning👷ListAlertInstances()->call($owner, $repo, $alertNumber, $ref, $pr, $page, $perPage);
    }

    /** @return Observable<Schema\CodeScanningAlertInstance> */
    public function listAlertInstancesListing(string $owner, string $repo, int $alertNumber, string $ref, int $pr, int $page, int $perPage): iterable
    {
        return $this->operators->codeScanning👷ListAlertInstancesListing()->call($owner, $repo, $alertNumber, $ref, $pr, $page, $perPage);
    }

    /** @return Observable<Schema\CodeScanningAnalysis> */
    public function listRecentAnalyses(string $owner, string $repo, string $toolName, string|null $toolGuid, int $pr, string $ref, string $sarifId, int $page, int $perPage, string $direction, string $sort): iterable
    {
        return $this->operators->codeScanning👷ListRecentAnalyses()->call($owner, $repo, $toolName, $toolGuid, $pr, $ref, $sarifId, $page, $perPage, $direction, $sort);
    }

    /** @return Observable<Schema\CodeScanningAnalysis> */
    public function listRecentAnalysesListing(string $owner, string $repo, string $toolName, string|null $toolGuid, int $pr, string $ref, string $sarifId, int $page, int $perPage, string $direction, string $sort): iterable
    {
        return $this->operators->codeScanning👷ListRecentAnalysesListing()->call($owner, $repo, $toolName, $toolGuid, $pr, $ref, $sarifId, $page, $perPage, $direction, $sort);
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

    /** @return Observable<Schema\CodeScanningCodeqlDatabase> */
    public function listCodeqlDatabases(string $owner, string $repo): iterable
    {
        return $this->operators->codeScanning👷ListCodeqlDatabases()->call($owner, $repo);
    }

    /** @return */
    public function getCodeqlDatabase(string $owner, string $repo, string $language): CodeScanningCodeqlDatabase|WithoutBody
    {
        return $this->operators->codeScanning👷GetCodeqlDatabase()->call($owner, $repo, $language);
    }

    /** @return */
    public function deleteCodeqlDatabase(string $owner, string $repo, string $language): WithoutBody
    {
        return $this->operators->codeScanning👷DeleteCodeqlDatabase()->call($owner, $repo, $language);
    }

    /** @return */
    public function createVariantAnalysis(string $owner, string $repo, array $params): CodeScanningVariantAnalysis
    {
        return $this->operators->codeScanning👷CreateVariantAnalysis()->call($owner, $repo, $params);
    }

    /** @return */
    public function getVariantAnalysis(string $owner, string $repo, int $codeqlVariantAnalysisId): CodeScanningVariantAnalysis
    {
        return $this->operators->codeScanning👷GetVariantAnalysis()->call($owner, $repo, $codeqlVariantAnalysisId);
    }

    /** @return */
    public function getVariantAnalysisRepoTask(string $owner, string $repo, int $codeqlVariantAnalysisId, string $repoOwner, string $repoName): CodeScanningVariantAnalysisRepoTask
    {
        return $this->operators->codeScanning👷GetVariantAnalysisRepoTask()->call($owner, $repo, $codeqlVariantAnalysisId, $repoOwner, $repoName);
    }

    /** @return */
    public function getDefaultSetup(string $owner, string $repo): CodeScanningDefaultSetup
    {
        return $this->operators->codeScanning👷GetDefaultSetup()->call($owner, $repo);
    }

    /** @return */
    public function updateDefaultSetup(string $owner, string $repo, array $params): EmptyObject|CodeScanningDefaultSetupUpdateResponse
    {
        return $this->operators->codeScanning👷UpdateDefaultSetup()->call($owner, $repo, $params);
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
