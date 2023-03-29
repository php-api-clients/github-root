<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookPullRequestEdited\Changes;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Base
{
    public const SCHEMA_JSON = '{"required":["ref","sha"],"type":"object","properties":{"ref":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"sha":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ref":{"from":"generated_from_null"},"sha":{"from":"generated_from_null"}}';
    public function __construct(public Schema\WebhookPullRequestEdited\Changes\Base\Ref $ref, public Schema\WebhookPullRequestEdited\Changes\Base\Sha $sha)
    {
    }
}
