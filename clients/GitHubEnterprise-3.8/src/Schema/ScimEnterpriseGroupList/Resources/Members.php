<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList\Resources;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Members
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"value":{"type":"string"},"$ref":{"type":"string"},"display":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"value":"generated_value","ref":"generated_ref","display":"generated_display"}';
    public function __construct(public ?string $value, public ?string $ref, public ?string $display)
    {
    }
}
