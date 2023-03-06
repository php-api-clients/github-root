<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookBranchProtectionRuleEdited\Changes;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class AuthorizedActorNames
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":["generated_from"]}';
    /**
     * @param ?array<string> $from
     */
    public function __construct(public ?array $from)
    {
    }
}
