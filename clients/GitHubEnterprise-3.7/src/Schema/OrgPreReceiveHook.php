<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class OrgPreReceiveHook
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"enforcement":{"type":"string"},"configuration_url":{"type":"string"},"allow_downstream_configuration":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name","enforcement":"generated_enforcement","configuration_url":"generated_configuration_url","allow_downstream_configuration":false}';
    public ?int $id;
    public ?string $name;
    public ?string $enforcement;
    public ?string $configuration_url;
    public ?bool $allow_downstream_configuration;
    public function __construct(int $id, string $name, string $enforcement, string $configuration_url, bool $allow_downstream_configuration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->enforcement = $enforcement;
        $this->configuration_url = $configuration_url;
        $this->allow_downstream_configuration = $allow_downstream_configuration;
    }
}
