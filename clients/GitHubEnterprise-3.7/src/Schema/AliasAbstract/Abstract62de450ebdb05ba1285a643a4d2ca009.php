<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
abstract readonly class Abstract62de450ebdb05ba1285a643a4d2ca009
{
    public const SCHEMA_JSON = '{"required":["url","id","number","head","base"],"type":"object","properties":{"base":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"head":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"id":{"type":"number"},"number":{"type":"number"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"base":{"ref":"generated_ref_null","repo":{"id":13,"name":"generated_name_null","url":"https:\\/\\/example.com\\/"},"sha":"generated_sha_null"},"head":{"ref":"generated_ref_null","repo":{"id":13,"name":"generated_name_null","url":"https:\\/\\/example.com\\/"},"sha":"generated_sha_null"},"id":13,"number":13,"url":"https:\\/\\/example.com\\/"}';
    public function __construct(public Schema\WebhookWorkflowRunCompleted\WorkflowRun\PullRequests\Base $base, public Schema\WebhookWorkflowRunCompleted\WorkflowRun\PullRequests\Head $head, public int $id, public int $number, public string $url)
    {
    }
}
