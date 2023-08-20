<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Pages
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "total_pages": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_pages": 11
}';

    public function __construct(#[MapFrom('total_pages')]
    public int|null $totalPages,)
    {
    }
}
