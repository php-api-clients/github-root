<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class WebhookCheckRunCompletedFormEncoded
{
    public const SCHEMA_JSON = '{"title":"Check Run Completed Event","required":["payload"],"type":"object","properties":{"payload":{"type":"string","description":"A URL-encoded string of the check_run.completed JSON payload. The decoded payload is a JSON object."}},"description":"The check_run.completed webhook encoded with URL encoding"}';
    public const SCHEMA_TITLE = 'Check Run Completed Event';
    public const SCHEMA_DESCRIPTION = 'The check_run.completed webhook encoded with URL encoding';
    public const SCHEMA_EXAMPLE_DATA = '{"payload":"generated_payload_null"}';
    /**
     * payload: A URL-encoded string of the check_run.completed JSON payload. The decoded payload is a JSON object.
     */
    public function __construct(public string $payload)
    {
    }
}
