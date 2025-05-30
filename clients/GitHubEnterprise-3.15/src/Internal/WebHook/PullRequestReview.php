<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\WebHook;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\OpenAPI\WebHookInterface;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use RuntimeException;
use Throwable;

/** @internal */
final class PullRequestReview implements WebHookInterface
{
    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly Internal\Hydrator\WebHook\PullRequestReview $hydrator)
    {
    }

    public function resolve(array $headers, array $data): Schema\WebhookPullRequestReviewDismissed|Schema\WebhookPullRequestReviewEdited|Schema\WebhookPullRequestReviewSubmitted
    {
        $error = new RuntimeException('No action matching given headers and data');
        if ($headers['content-type'] === 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], Reader::readFromJson(Schema\WebHookHeader\UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], Reader::readFromJson(Schema\WebHookHeader\XGithubHookId::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], Reader::readFromJson(Schema\WebHookHeader\XGithubEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetId::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetType::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], Reader::readFromJson(Schema\WebHookHeader\XGitHubDelivery::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], Reader::readFromJson(Schema\WebHookHeader\XHubSignature::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-version'], Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseVersion::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-host'], Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseHost::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\WebhookPullRequestReviewDismissed::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                return $this->hydrator->hydrateObject(Schema\WebhookPullRequestReviewDismissed::class, $data);
            } catch (Throwable $error) {
                goto actions_aaaaa;
            }
        }

        actions_aaaaa:
        if ($headers['content-type'] === 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], Reader::readFromJson(Schema\WebHookHeader\UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], Reader::readFromJson(Schema\WebHookHeader\XGithubHookId::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], Reader::readFromJson(Schema\WebHookHeader\XGithubEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetId::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetType::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], Reader::readFromJson(Schema\WebHookHeader\XGitHubDelivery::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], Reader::readFromJson(Schema\WebHookHeader\XHubSignature::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-version'], Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseVersion::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-host'], Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseHost::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\WebhookPullRequestReviewEdited::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                return $this->hydrator->hydrateObject(Schema\WebhookPullRequestReviewEdited::class, $data);
            } catch (Throwable $error) {
                goto actions_aaaab;
            }
        }

        actions_aaaab:
        if ($headers['content-type'] === 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], Reader::readFromJson(Schema\WebHookHeader\UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], Reader::readFromJson(Schema\WebHookHeader\XGithubHookId::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], Reader::readFromJson(Schema\WebHookHeader\XGithubEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetId::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetType::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], Reader::readFromJson(Schema\WebHookHeader\XGitHubDelivery::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], Reader::readFromJson(Schema\WebHookHeader\XHubSignature::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-version'], Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseVersion::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-enterprise-host'], Reader::readFromJson(Schema\WebHookHeader\XGitHubEnterpriseHost::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\WebhookPullRequestReviewSubmitted::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                return $this->hydrator->hydrateObject(Schema\WebhookPullRequestReviewSubmitted::class, $data);
            } catch (Throwable $error) {
                goto actions_aaaac;
            }
        }

        actions_aaaac:
        throw $error;
    }
}
