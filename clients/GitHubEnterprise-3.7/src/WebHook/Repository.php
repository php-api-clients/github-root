<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\WebHook;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
/**
 * @internal
 */
final class Repository implements \ApiClients\Contracts\OpenAPI\WebHookInterface
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly Hydrator\WebHook\Repository $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, Hydrator\WebHook\Repository $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function resolve(array $headers, array $data) : Schema\WebhookRepositoryAnonymousAccessDisabled|Schema\WebhookRepositoryAnonymousAccessEnabled|Schema\WebhookRepositoryArchived|Schema\WebhookRepositoryCreated|Schema\WebhookRepositoryDeleted|Schema\WebhookRepositoryEdited|Schema\WebhookRepositoryPrivatized|Schema\WebhookRepositoryPublicized|Schema\WebhookRepositoryRenamed|Schema\WebhookRepositoryTransferred|Schema\WebhookRepositoryUnarchived
    {
        $error = new \RuntimeException('No action matching given headers and data');
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentFD::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdFD::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventFD::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdFD::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeFD::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryFD::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureFD::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-version'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseVersionFD::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-host'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseHostFD::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookRepositoryAnonymousAccessDisabled::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookRepositoryAnonymousAccessDisabled::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaaa;
            }
        }
        actions_aaaaa:
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentFE::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdFE::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventFE::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdFE::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeFE::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryFE::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureFE::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-version'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseVersionFE::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-host'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseHostFE::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookRepositoryAnonymousAccessEnabled::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookRepositoryAnonymousAccessEnabled::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaab;
            }
        }
        actions_aaaab:
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentFF::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdFF::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventFF::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdFF::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeFF::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryFF::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureFF::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-version'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseVersionFF::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-host'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseHostFF::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookRepositoryArchived::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookRepositoryArchived::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaac;
            }
        }
        actions_aaaac:
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentFG::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdFG::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventFG::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdFG::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeFG::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryFG::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureFG::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-version'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseVersionFG::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-host'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseHostFG::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookRepositoryCreated::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookRepositoryCreated::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaad;
            }
        }
        actions_aaaad:
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentFH::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdFH::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventFH::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdFH::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeFH::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryFH::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureFH::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-version'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseVersionFH::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-host'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseHostFH::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookRepositoryDeleted::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookRepositoryDeleted::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaae;
            }
        }
        actions_aaaae:
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentFJ::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdFJ::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventFJ::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdFJ::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeFJ::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryFJ::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureFJ::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-version'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseVersionFJ::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-host'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseHostFJ::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookRepositoryEdited::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookRepositoryEdited::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaaf;
            }
        }
        actions_aaaaf:
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentFK::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdFK::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventFK::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdFK::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeFK::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryFK::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureFK::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-version'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseVersionFK::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-host'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseHostFK::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookRepositoryPrivatized::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookRepositoryPrivatized::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaag;
            }
        }
        actions_aaaag:
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentFL::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdFL::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventFL::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdFL::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeFL::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryFL::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureFL::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-version'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseVersionFL::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-host'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseHostFL::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookRepositoryPublicized::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookRepositoryPublicized::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaah;
            }
        }
        actions_aaaah:
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentFM::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdFM::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventFM::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdFM::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeFM::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryFM::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureFM::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-version'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseVersionFM::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-host'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseHostFM::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookRepositoryRenamed::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookRepositoryRenamed::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaai;
            }
        }
        actions_aaaai:
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentFN::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdFN::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventFN::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdFN::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeFN::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryFN::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureFN::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-version'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseVersionFN::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-host'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseHostFN::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookRepositoryTransferred::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookRepositoryTransferred::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaaj;
            }
        }
        actions_aaaaj:
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentFO::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdFO::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventFO::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdFO::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeFO::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryFO::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureFO::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-version'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseVersionFO::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-host'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseHostFO::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookRepositoryUnarchived::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookRepositoryUnarchived::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaak;
            }
        }
        actions_aaaak:
        throw $error;
    }
}
