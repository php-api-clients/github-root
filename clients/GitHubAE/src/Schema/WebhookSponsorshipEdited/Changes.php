<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookSponsorshipEdited;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"privacy_level":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The `edited` event types include the details about the change when someone edits a sponsorship to change the privacy."}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"privacy_level":{"from":"generated_from_null"}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('privacy_level')] public ?Schema\WebhookSponsorshipEdited\Changes\PrivacyLevel $privacyLevel)
    {
    }
}
