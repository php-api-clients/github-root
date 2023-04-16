<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract;

use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\Runner;
use EventSauce\ObjectHydrator\MapFrom;
use EventSauce\ObjectHydrator\PropertyCasters\CastListToType;

abstract readonly class Abstract64c370de030b21c90fe13f381e6a295d
{
    public const SCHEMA_JSON         = '{"required":["total_count","runners"],"type":"object","properties":{"total_count":{"type":"number"},"runners":{"type":"array","items":{"title":"Self hosted runners","required":["id","name","os","status","busy","labels"],"type":"object","properties":{"id":{"type":"integer","description":"The id of the runner.","examples":[5]},"runner_group_id":{"type":"integer","description":"The id of the runner group.","examples":[1]},"name":{"type":"string","description":"The name of the runner.","examples":["iMac"]},"os":{"type":"string","description":"The Operating System of the runner.","examples":["macos"]},"status":{"type":"string","description":"The status of the runner.","examples":["online"]},"busy":{"type":"boolean"},"labels":{"type":"array","items":{"title":"Self hosted runner label","required":["name"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the label."},"name":{"type":"string","description":"Name of the label."},"type":{"enum":["read-only","custom"],"type":"string","description":"The type of label. Read-only labels are applied automatically when the runner is configured."}},"description":"A label for a self hosted runner"}}},"description":"A self hosted runner"}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13.13,"runners":[{"id":5,"runner_group_id":1,"name":"iMac","os":"macos","status":"online","busy":false,"labels":[{"id":13,"name":"generated_name_null","type":"read-only"}]}]}';

    /**
     * @param array<Runner> $runners
     */
    public function __construct(#[MapFrom('total_count')] public int|float $totalCount, #[CastListToType(Schema\Runner::class)] public array $runners)
    {
    }
}
