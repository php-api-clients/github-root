<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class CommitActivity
{
    public const SCHEMA_JSON = '{"title":"Commit Activity","required":["days","total","week"],"type":"object","properties":{"days":{"type":"array","items":{"type":"integer"},"examples":[0,3,26,20,39,1,0]},"total":{"type":"integer","examples":[89]},"week":{"type":"integer","examples":[1336280400]}},"description":"Commit Activity"}';
    public const SCHEMA_TITLE = 'Commit Activity';
    public const SCHEMA_DESCRIPTION = 'Commit Activity';
    public const SCHEMA_EXAMPLE_DATA = '{"days":[3],"total":89,"week":1336280400}';
    /**
     * @var array<int>
     */
    public ?array $days;
    public ?int $total;
    public ?int $week;
    public function __construct(array $days, int $total, int $week)
    {
        $this->days = $days;
        $this->total = $total;
        $this->week = $week;
    }
}
