<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookProjectsV2ItemReordered;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"previous_projects_v2_item_node_id":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"previous_projects_v2_item_node_id":{"from":"generated_from","to":"generated_to"}}';
    public ?Schema\WebhookMemberEdited\Changes\Permission $previous_projects_v2_item_node_id;
    public function __construct(Schema\WebhookMemberEdited\Changes\Permission $previous_projects_v2_item_node_id)
    {
        $this->previous_projects_v2_item_node_id = $previous_projects_v2_item_node_id;
    }
}
