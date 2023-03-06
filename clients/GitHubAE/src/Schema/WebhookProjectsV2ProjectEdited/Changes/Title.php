<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookProjectsV2ProjectEdited\Changes;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Title
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":"string"},"to":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated_from","to":"generated_to"}';
    public function __construct(public ?string $from, public ?string $to)
    {
    }
}
