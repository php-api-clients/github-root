<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WorkflowUsage;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Billable
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"UBUNTU":{"type":"object","properties":{"total_ms":{"type":"integer"}}},"MACOS":{"type":"object","properties":{"total_ms":{"type":"integer"}}},"WINDOWS":{"type":"object","properties":{"total_ms":{"type":"integer"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"UBUNTU":{"total_ms":13},"MACOS":{"total_ms":13},"WINDOWS":{"total_ms":13}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('UBUNTU')] public ?Schema\WorkflowUsage\Billable\Ubuntu $ubuntu, #[\EventSauce\ObjectHydrator\MapFrom('MACOS')] public ?Schema\WorkflowUsage\Billable\Macos $macos, #[\EventSauce\ObjectHydrator\MapFrom('WINDOWS')] public ?Schema\WorkflowUsage\Billable\Windows $windows)
    {
    }
}
