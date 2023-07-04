<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class DormantUsers
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"total_dormant_users":{"type":"integer"},"dormancy_threshold":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_dormant_users":19,"dormancy_threshold":"generated"}';

    public function __construct(#[MapFrom('total_dormant_users')]
    public int|null $totalDormantUsers, #[MapFrom('dormancy_threshold')]
    public string|null $dormancyThreshold,)
    {
    }
}
