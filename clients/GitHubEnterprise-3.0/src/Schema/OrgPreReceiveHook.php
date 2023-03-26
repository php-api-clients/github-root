<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class OrgPreReceiveHook
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"enforcement":{"type":"string"},"configuration_url":{"type":"string"},"allow_downstream_configuration":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name_null","enforcement":"generated_enforcement_null","configuration_url":"generated_configuration_url_null","allow_downstream_configuration":false}';
    public function __construct(public ?int $id, public ?string $name, public ?string $enforcement, #[\EventSauce\ObjectHydrator\MapFrom('configuration_url')] public ?string $configurationUrl, #[\EventSauce\ObjectHydrator\MapFrom('allow_downstream_configuration')] public ?bool $allowDownstreamConfiguration)
    {
    }
}
