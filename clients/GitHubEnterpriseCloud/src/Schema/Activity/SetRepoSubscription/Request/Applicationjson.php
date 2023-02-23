<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Activity\SetRepoSubscription\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
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
