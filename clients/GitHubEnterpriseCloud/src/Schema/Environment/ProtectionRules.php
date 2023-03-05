<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Environment;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class ProtectionRules
{
    public const SCHEMA_JSON = '{"required":["id","node_id","type"],"type":"object","properties":{"id":{"type":"integer","examples":[3515]},"node_id":{"type":"string","examples":["MDQ6R2F0ZTM1MTU="]},"type":{"type":"string","examples":["branch_policy"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":3515,"node_id":"MDQ6R2F0ZTM1MTU=","type":"branch_policy"}';
    public ?int $id;
    public ?string $node_id;
    public ?string $type;
    public function __construct(int $id, string $node_id, string $type)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->type = $type;
    }
}
