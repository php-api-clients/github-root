<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["runners"],"type":"object","properties":{"runners":{"type":"array","items":{"type":"integer","description":"Unique identifier of the runner."},"description":"List of runner IDs to add to the runner group."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"runners":[13]}';
    /**
     * List of runner IDs to add to the runner group.
     * @var array<int>
     */
    public ?array $runners;
    public function __construct(array $runners)
    {
        $this->runners = $runners;
    }
}
