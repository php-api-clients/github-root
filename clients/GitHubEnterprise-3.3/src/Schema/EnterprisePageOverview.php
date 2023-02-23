<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class EnterprisePageOverview
{
    public const SCHEMA_JSON = '{"title":"Enterprise Pages Stats","required":["total_pages"],"type":"object","properties":{"total_pages":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Enterprise Pages Stats';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_pages":13}';
    public ?int $total_pages;
    public function __construct(int $total_pages)
    {
        $this->total_pages = $total_pages;
    }
}
