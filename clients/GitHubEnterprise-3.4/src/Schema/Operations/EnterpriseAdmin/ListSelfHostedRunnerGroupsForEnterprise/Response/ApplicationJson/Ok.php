<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{"required":["total_count","runner_groups"],"type":"object","properties":{"total_count":{"type":"number"},"runner_groups":{"type":"array","items":{"required":["id","name","visibility","allows_public_repositories","default","runners_url"],"type":"object","properties":{"id":{"type":"number"},"name":{"type":"string"},"visibility":{"type":"string"},"default":{"type":"boolean"},"selected_organizations_url":{"type":"string"},"runners_url":{"type":"string"},"allows_public_repositories":{"type":"boolean"}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":1.1,"runner_groups":[{"id":0.2,"name":"generated","visibility":"generated","default":false,"selected_organizations_url":"generated","runners_url":"generated","allows_public_repositories":false},{"id":0.2,"name":"generated","visibility":"generated","default":false,"selected_organizations_url":"generated","runners_url":"generated","allows_public_repositories":false}]}';

    public function __construct(#[MapFrom('total_count')]
    public int|float $totalCount, #[MapFrom('runner_groups')]
    public array $runnerGroups,)
    {
    }
}
