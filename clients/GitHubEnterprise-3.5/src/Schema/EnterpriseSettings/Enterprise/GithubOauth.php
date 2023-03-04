<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class GithubOauth
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"client_id":{"type":"string"},"client_secret":{"type":"string"},"organization_name":{"type":"string"},"organization_team":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"client_id":"generated_client_id","client_secret":"generated_client_secret","organization_name":"generated_organization_name","organization_team":"generated_organization_team"}';
    public ?string $client_id;
    public ?string $client_secret;
    public ?string $organization_name;
    public ?string $organization_team;
    public function __construct(string $client_id, string $client_secret, string $organization_name, string $organization_team)
    {
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
        $this->organization_name = $organization_name;
        $this->organization_team = $organization_team;
    }
}
