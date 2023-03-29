<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookCodeScanningAlertReopenedByUser\Alert\MostRecentInstance;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Location
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"end_column":13,"end_line":13,"path":"generated_path_null","start_column":13,"start_line":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('end_column')] public ?int $endColumn, #[\EventSauce\ObjectHydrator\MapFrom('end_line')] public ?int $endLine, public ?string $path, #[\EventSauce\ObjectHydrator\MapFrom('start_column')] public ?int $startColumn, #[\EventSauce\ObjectHydrator\MapFrom('start_line')] public ?int $startLine)
    {
    }
}
