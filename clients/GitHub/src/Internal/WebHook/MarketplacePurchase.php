<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\WebHook;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\OpenAPI\WebHookInterface;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use RuntimeException;
use Throwable;

/** @internal */
final class MarketplacePurchase implements WebHookInterface
{
    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly Internal\Hydrator\WebHook\MarketplacePurchase $hydrator)
    {
    }

    public function resolve(array $headers, array $data): Schema\WebhookMarketplacePurchaseCancelled|Schema\WebhookMarketplacePurchaseChanged|Schema\WebhookMarketplacePurchasePendingChange|Schema\WebhookMarketplacePurchasePendingChangeCancelled|Schema\WebhookMarketplacePurchasePurchased
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
                $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\WebhookMarketplacePurchaseCancelled::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                return $this->hydrator->hydrateObject(Schema\WebhookMarketplacePurchaseCancelled::class, $data);
            } catch (Throwable) {
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
                $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\WebhookMarketplacePurchaseChanged::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                return $this->hydrator->hydrateObject(Schema\WebhookMarketplacePurchaseChanged::class, $data);
            } catch (Throwable) {
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
                $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\WebhookMarketplacePurchasePendingChange::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                return $this->hydrator->hydrateObject(Schema\WebhookMarketplacePurchasePendingChange::class, $data);
            } catch (Throwable) {
                goto actions_aaaac;
            }
        }

        actions_aaaac:
        if ($headers['content-type'] === 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], Reader::readFromJson(Schema\WebHookHeader\UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], Reader::readFromJson(Schema\WebHookHeader\XGithubHookId::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], Reader::readFromJson(Schema\WebHookHeader\XGithubEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetId::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetType::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], Reader::readFromJson(Schema\WebHookHeader\XGitHubDelivery::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], Reader::readFromJson(Schema\WebHookHeader\XHubSignature::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\WebhookMarketplacePurchasePendingChangeCancelled::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                return $this->hydrator->hydrateObject(Schema\WebhookMarketplacePurchasePendingChangeCancelled::class, $data);
            } catch (Throwable) {
                goto actions_aaaad;
            }
        }

        actions_aaaad:
        if ($headers['content-type'] === 'application/json') {
            try {
                $this->requestSchemaValidator->validate($headers['user-agent'], Reader::readFromJson(Schema\WebHookHeader\UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-id'], Reader::readFromJson(Schema\WebHookHeader\XGithubHookId::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-event'], Reader::readFromJson(Schema\WebHookHeader\XGithubEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-id'], Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetId::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-hook-installation-target-type'], Reader::readFromJson(Schema\WebHookHeader\XGithubHookInstallationTargetType::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-github-delivery'], Reader::readFromJson(Schema\WebHookHeader\XGitHubDelivery::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($headers['x-hub-signature-256'], Reader::readFromJson(Schema\WebHookHeader\XHubSignature::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\WebhookMarketplacePurchasePurchased::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                return $this->hydrator->hydrateObject(Schema\WebhookMarketplacePurchasePurchased::class, $data);
            } catch (Throwable) {
                goto actions_aaaae;
            }
        }

        actions_aaaae:
        throw $error;
    }
}
