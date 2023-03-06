<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookBranchProtectionRuleEdited\Changes;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class AuthorizedActorNames
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":["generated_from"]}';
    /**
     * @var array<string>
     */
    public ?array $from;
    public function __construct(array $from)
    {
        $this->from = $from;
    }
}
