<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Message
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"text":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"text":"generated_text_null"}';
    public function __construct(public ?string $text)
    {
    }
}
