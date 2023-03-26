<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\Applicationjson;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_count":{"type":"number"},"runners":{"type":"array","items":{"title":"Self hosted runners","required":["id","name","os","status","busy","labels"],"type":"object","properties":{"id":{"type":"integer","description":"The id of the runner.","examples":[5]},"name":{"type":"string","description":"The name of the runner.","examples":["iMac"]},"os":{"type":"string","description":"The Operating System of the runner.","examples":["macos"]},"status":{"type":"string","description":"The status of the runner.","examples":["online"]},"busy":{"type":"boolean"},"labels":{"type":"array","items":{"title":"Self hosted runner label","required":["name"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the label."},"name":{"type":"string","description":"Name of the label."},"type":{"enum":["read-only","custom"],"type":"string","description":"The type of label. Read-only labels are applied automatically when the runner is configured."}},"description":"A label for a self hosted runner"}}},"description":"A self hosted runner"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"runners":[{"id":5,"name":"iMac","os":"macos","status":"online","busy":false,"labels":[{"id":13,"name":"generated_name_null","type":"read-only"}]}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHubEnterpriseCloud\Schema\Runner> $runners
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_count')] public ?int $totalCount, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Runner::class)] public ?array $runners)
    {
    }
}
