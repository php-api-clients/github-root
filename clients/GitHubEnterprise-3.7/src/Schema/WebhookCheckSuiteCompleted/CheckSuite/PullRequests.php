<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookCheckSuiteCompleted\CheckSuite;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class PullRequests
{
    public const SCHEMA_JSON = '{"title":"Check Run Pull Request","required":["url","id","number","head","base"],"type":"object","properties":{"base":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"head":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"id":{"type":"integer"},"number":{"type":"integer"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Check Run Pull Request';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"base":{"ref":"generated_ref","repo":{"id":13,"name":"generated_name","url":"generated_url"},"sha":"generated_sha"},"head":{"ref":"generated_ref","repo":{"id":13,"name":"generated_name","url":"generated_url"},"sha":"generated_sha"},"id":13,"number":13,"url":"generated_url"}';
    public function __construct(public Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base $base, public Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base $head, public int $id, public int $number, public string $url)
    {
    }
}
