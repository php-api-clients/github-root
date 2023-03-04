<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookSponsorshipEdited\Changes;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class PrivacyLevel
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The `edited` event types include the details about the change when someone edits a sponsorship to change the privacy."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated_from"}';
    /**
     * The `edited` event types include the details about the change when someone edits a sponsorship to change the privacy.
     */
    public ?string $from;
    public function __construct(string $from)
    {
        $this->from = $from;
    }
}
