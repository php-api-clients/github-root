<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\CodeScanning\UpdateAlert\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["open","dismissed"],"type":"string","description":"Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`."},"dismissed_reason":{"enum":[null,"false positive","won\'t fix","used in tests"],"type":["string","null"],"description":"**Required when the state is dismissed.** The reason for dismissing or closing the alert."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"generated_state","dismissed_reason":"generated_dismissed_reason"}';
    /**
     * Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`.
     */
    public ?string $state;
    /**
     * **Required when the state is dismissed.** The reason for dismissing or closing the alert.
     */
    public ?string $dismissed_reason;
    public function __construct(string $state, string $dismissed_reason)
    {
        $this->state = $state;
        $this->dismissed_reason = $dismissed_reason;
    }
}
