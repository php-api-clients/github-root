<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class GithubOauth
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"client_id":{"type":"string"},"client_secret":{"type":"string"},"organization_name":{"type":"string"},"organization_team":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"client_id":"generated_client_id_null","client_secret":"generated_client_secret_null","organization_name":"generated_organization_name_null","organization_team":"generated_organization_team_null"}';

    public function __construct(#[MapFrom('client_id')] public ?string $clientId, #[MapFrom('client_secret')] public ?string $clientSecret, #[MapFrom('organization_name')] public ?string $organizationName, #[MapFrom('organization_team')] public ?string $organizationTeam)
    {
    }
}
