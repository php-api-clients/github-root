<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class GithubOauth
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"client_id":{"type":"string"},"client_secret":{"type":"string"},"organization_name":{"type":"string"},"organization_team":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"client_id":"generated","client_secret":"generated","organization_name":"generated","organization_team":"generated"}';

    public function __construct(#[MapFrom('client_id')]
    public string|null $clientId, #[MapFrom('client_secret')]
    public string|null $clientSecret, #[MapFrom('organization_name')]
    public string|null $organizationName, #[MapFrom('organization_team')]
    public string|null $organizationTeam,)
    {
    }
}
