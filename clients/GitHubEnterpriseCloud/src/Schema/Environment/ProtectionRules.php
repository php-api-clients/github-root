<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Environment;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class ProtectionRules
{
    public const SCHEMA_JSON = '{"required":["id","node_id","type"],"type":"object","properties":{"id":{"type":"integer","examples":[3515]},"node_id":{"type":"string","examples":["MDQ6R2F0ZTM1MTU="]},"type":{"type":"string","examples":["wait_timer"]},"wait_timer":{"type":"integer","description":"The amount of time to delay a job after the job is initially triggered. The time (in minutes) must be an integer between 0 and 43,200 (30 days).","examples":[30]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":3515,"node_id":"MDQ6R2F0ZTM1MTU=","type":"wait_timer","wait_timer":30}';
    /**
     * waitTimer: The amount of time to delay a job after the job is initially triggered. The time (in minutes) must be an integer between 0 and 43,200 (30 days).
     */
    public function __construct(public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $type, #[\EventSauce\ObjectHydrator\MapFrom('wait_timer')] public ?int $waitTimer)
    {
    }
}
