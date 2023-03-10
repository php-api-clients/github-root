<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class WebhookSecretScanningAlertLocationCreatedFormEncoded
{
    public const SCHEMA_JSON = '{"title":"Secret Scanning Alert Location Created Event","required":["payload"],"type":"object","properties":{"payload":{"type":"string","description":"A URL-encoded string of the secret_scanning_alert_location.created JSON payload. The decoded payload is a JSON object."}}}';
    public const SCHEMA_TITLE = 'Secret Scanning Alert Location Created Event';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"payload":"generated_payload"}';
    /**
     * payload: A URL-encoded string of the secret_scanning_alert_location.created JSON payload. The decoded payload is a JSON object.
     */
    public function __construct(public string $payload)
    {
    }
}
