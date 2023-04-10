<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\ServerStatistics\GheStats;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Pages
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_pages":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_pages":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_pages')] public ?int $totalPages)
    {
    }
}
