<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{"required":["total_count","runner_groups"],"type":"object","properties":{"total_count":{"type":"number"},"runner_groups":{"type":"array","items":{"required":["id","name","visibility","default","runners_url","inherited","allows_public_repositories"],"type":"object","properties":{"id":{"type":"number"},"name":{"type":"string"},"visibility":{"type":"string"},"default":{"type":"boolean"},"selected_repositories_url":{"type":"string","description":"Link to the selected repositories resource for this runner group. Not present unless visibility was set to `selected`"},"runners_url":{"type":"string"},"inherited":{"type":"boolean"},"inherited_allows_public_repositories":{"type":"boolean"},"allows_public_repositories":{"type":"boolean"}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":1.1,"runner_groups":[{"id":0.2,"name":"generated","visibility":"generated","default":false,"selected_repositories_url":"generated","runners_url":"generated","inherited":false,"inherited_allows_public_repositories":false,"allows_public_repositories":false},{"id":0.2,"name":"generated","visibility":"generated","default":false,"selected_repositories_url":"generated","runners_url":"generated","inherited":false,"inherited_allows_public_repositories":false,"allows_public_repositories":false}]}';

    public function __construct(#[MapFrom('total_count')] public int|float $totalCount, #[MapFrom('runner_groups')] public array $runnerGroups)
    {
    }
}
