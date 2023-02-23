<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Activity\SetRepoSubscription\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"subscribed":{"type":"boolean","description":"Determines if notifications should be received from this repository."},"ignored":{"type":"boolean","description":"Determines if all notifications should be blocked from this repository."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"subscribed":false,"ignored":false}';
    /**
     * Determines if notifications should be received from this repository.
     */
    public ?bool $subscribed;
    /**
     * Determines if all notifications should be blocked from this repository.
     */
    public ?bool $ignored;
    public function __construct(bool $subscribed, bool $ignored)
    {
        $this->subscribed = $subscribed;
        $this->ignored = $ignored;
    }
}
