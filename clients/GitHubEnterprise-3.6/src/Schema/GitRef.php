<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class GitRef
{
    public const SCHEMA_JSON = '{"title":"Git Reference","required":["ref","node_id","url","object"],"type":"object","properties":{"ref":{"type":"string"},"node_id":{"type":"string"},"url":{"type":"string","format":"uri"},"object":{"required":["type","sha","url"],"type":"object","properties":{"type":{"type":"string"},"sha":{"maxLength":40,"minLength":40,"type":"string","description":"SHA for the reference","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"}}}},"description":"Git references within a repository"}';
    public const SCHEMA_TITLE = 'Git Reference';
    public const SCHEMA_DESCRIPTION = 'Git references within a repository';
    public const SCHEMA_EXAMPLE_DATA = '{"ref":"generated_ref","node_id":"generated_node_id","url":"generated_url","object":{"type":"generated_type","sha":"7638417db6d59f3c431d3e1f261cc637155684cd","url":"generated_url"}}';
    public ?string $ref;
    public ?string $node_id;
    public ?string $url;
    public ?Schema\GitRef\Object_ $object;
    public function __construct(string $ref, string $node_id, string $url, Schema\GitRef\Object_ $object)
    {
        $this->ref = $ref;
        $this->node_id = $node_id;
        $this->url = $url;
        $this->object = $object;
    }
}
