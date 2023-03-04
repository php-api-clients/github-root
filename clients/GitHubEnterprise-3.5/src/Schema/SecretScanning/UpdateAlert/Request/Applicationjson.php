<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\SecretScanning\UpdateAlert\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["open","resolved"],"type":"string","description":"Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`."},"resolution":{"enum":[null,"false_positive","wont_fix","revoked","used_in_tests"],"type":["string","null"],"description":"**Required when the `state` is `resolved`.** The reason for resolving the alert."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"generated_state","resolution":"generated_resolution"}';
    /**
     * Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`.
     */
    public ?string $state;
    /**
     * **Required when the `state` is `resolved`.** The reason for resolving the alert.
     */
    public ?string $resolution;
    public function __construct(string $state, string $resolution)
    {
        $this->state = $state;
        $this->resolution = $resolution;
    }
}
