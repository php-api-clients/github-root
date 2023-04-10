<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\ServerStatistics;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class DormantUsers
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_dormant_users":{"type":"integer"},"dormancy_threshold":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_dormant_users":13,"dormancy_threshold":"generated_dormancy_threshold_null"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_dormant_users')] public ?int $totalDormantUsers, #[\EventSauce\ObjectHydrator\MapFrom('dormancy_threshold')] public ?string $dormancyThreshold)
    {
    }
}
