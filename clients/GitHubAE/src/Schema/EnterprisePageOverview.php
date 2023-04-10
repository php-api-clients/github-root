<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class EnterprisePageOverview
{
    public const SCHEMA_JSON = '{"title":"Enterprise Pages Stats","required":["total_pages"],"type":"object","properties":{"total_pages":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Enterprise Pages Stats';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_pages":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_pages')] public int $totalPages)
    {
    }
}
