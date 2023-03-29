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
final class CheckSuite implements \ApiClients\Contracts\OpenAPI\WebHookInterface
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly Hydrator\WebHook\CheckSuite $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, Hydrator\WebHook\CheckSuite $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function resolve(array $headers, array $data) : Schema\WebhookCheckSuiteCompleted|Schema\WebhookCheckSuiteRequested|Schema\WebhookCheckSuiteRerequested
    {
        $error = new \RuntimeException('No action matching given headers and data');
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentH::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdH::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventH::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdH::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeH::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryH::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureH::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-version'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseVersionH::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-host'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseHostH::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookCheckSuiteCompleted::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookCheckSuiteCompleted::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaaa;
            }
        }
        actions_aaaaa:
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentI::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdI::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventI::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdI::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeI::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryI::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureI::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-version'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseVersionI::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-host'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseHostI::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookCheckSuiteRequested::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookCheckSuiteRequested::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaab;
            }
        }
        actions_aaaab:
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentJ::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdJ::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventJ::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdJ::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeJ::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryJ::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureJ::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-version'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseVersionJ::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-host'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseHostJ::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookCheckSuiteRerequested::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookCheckSuiteRerequested::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaac;
            }
        }
        actions_aaaac:
        throw $error;
    }
}
