<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookProjectsV2ProjectEdited\Changes;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Public_
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":"boolean"},"to":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":false,"to":false}';
    public function __construct(public ?bool $from, public ?bool $to)
    {
    }
}
