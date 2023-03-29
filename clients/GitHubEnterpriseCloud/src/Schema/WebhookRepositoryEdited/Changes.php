<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookRepositoryEdited;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"default_branch":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"description":{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}},"homepage":{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}},"topics":{"type":"object","properties":{"from":{"type":["array","null"],"items":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"default_branch":{"from":"generated_from_null"},"description":{"from":"generated_from_null"},"homepage":{"from":"generated_from_null"},"topics":{"from":["generated_from_null"]}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('default_branch')] public ?Schema\WebhookRepositoryEdited\Changes\DefaultBranch $defaultBranch, public ?Schema\WebhookRepositoryEdited\Changes\Description $description, public ?Schema\WebhookRepositoryEdited\Changes\Homepage $homepage, public ?Schema\WebhookRepositoryEdited\Changes\Topics $topics)
    {
    }
}
