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
final class Gollum implements \ApiClients\Contracts\OpenAPI\WebHookInterface
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly Hydrator\WebHook\Gollum $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, Hydrator\WebHook\Gollum $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function resolve(array $headers, array $data) : Schema\WebhookGollum
    {
        $error = new \RuntimeException('No action matching given headers and data');
        if ($headers['content-type'] == 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\UserAgentAW::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookIdAW::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubEventAW::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetIdAW::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetTypeAW::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubDeliveryAW::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XHubSignatureAW::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-version'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseVersionAW::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-host'], \cebe\openapi\Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseHostAW::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\WebhookGollum::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                return $this->hydrator->hydrateObject(Schema\WebhookGollum::class, $data);
            } catch (\Throwable $error) {
                goto actions_aaaaa;
            }
        }
        actions_aaaaa:
        throw $error;
    }
}
