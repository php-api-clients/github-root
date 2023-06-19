<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookOrganizationRenamed;

use ApiClients\Client\GitHubEnterprise\Schema;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"login":{"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"login":{"from":"generated"}}';

    public function __construct(public Schema\WebhookOrganizationRenamed\Changes\Login|null $login)
    {
    }
}
