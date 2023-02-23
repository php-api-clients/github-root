<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookStatus;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Branches
{
    public const SCHEMA_JSON = '{"required":["name","commit","protected"],"type":"object","properties":{"commit":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":["string","null"]},"url":{"type":["string","null"],"format":"uri"}}},"name":{"type":"string"},"protected":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"commit":{"sha":"generated_sha","url":"generated_url"},"name":"generated_name","protected":false}';
    public ?Schema\WebhookStatus\Branches\Commit $commit;
    public ?string $name;
    public ?bool $protected;
    public function __construct(Schema\WebhookStatus\Branches\Commit $commit, string $name, bool $protected)
    {
        $this->commit = $commit;
        $this->name = $name;
        $this->protected = $protected;
    }
}
