<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\ProtectedBranchRequiredStatusCheck;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Checks
{
    public const SCHEMA_JSON = '{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string"},"app_id":{"type":["integer","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"context":"generated_context","app_id":13}';
    public ?string $context;
    public ?int $app_id;
    public function __construct(string $context, int $app_id)
    {
        $this->context = $context;
        $this->app_id = $app_id;
    }
}
