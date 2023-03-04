<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Commit;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Stats
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"additions":{"type":"integer"},"deletions":{"type":"integer"},"total":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"additions":13,"deletions":13,"total":13}';
    public ?int $additions;
    public ?int $deletions;
    public ?int $total;
    public function __construct(int $additions, int $deletions, int $total)
    {
        $this->additions = $additions;
        $this->deletions = $deletions;
        $this->total = $total;
    }
}
