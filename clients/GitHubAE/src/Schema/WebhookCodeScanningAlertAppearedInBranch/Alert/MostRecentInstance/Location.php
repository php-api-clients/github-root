<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Location
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"end_column":13,"end_line":13,"path":"generated_path","start_column":13,"start_line":13}';
    public function __construct(public ?int $end_column, public ?int $end_line, public ?string $path, public ?int $start_column, public ?int $start_line)
    {
    }
}
