<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Teams\CreateOrUpdateIdpGroupConnectionsLegacy\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["groups"],"type":"object","properties":{"groups":{"type":"array","items":{"required":["group_id","group_name","group_description"],"type":"object","properties":{"group_id":{"type":"string","description":"ID of the IdP group."},"group_name":{"type":"string","description":"Name of the IdP group."},"group_description":{"type":"string","description":"Description of the IdP group."},"id":{"type":"string","examples":["\\"caceab43fc9ffa20081c\\""]},"name":{"type":"string","examples":["\\"external-team-6c13e7288ef7\\""]},"description":{"type":"string","examples":["\\"moar cheese pleese\\""]}}},"description":"The IdP groups you want to connect to a GitHub team. When updating, the new `groups` object will replace the original one. You must include any existing groups that you don\'t want to remove."},"synced_at":{"type":"string","examples":["\\"I am not a timestamp\\""]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"groups":[{"group_id":"generated","group_name":"generated","group_description":"generated","id":"\\"caceab43fc9ffa20081c\\"","name":"\\"external-team-6c13e7288ef7\\"","description":"\\"moar cheese pleese\\""},{"group_id":"generated","group_name":"generated","group_description":"generated","id":"\\"caceab43fc9ffa20081c\\"","name":"\\"external-team-6c13e7288ef7\\"","description":"\\"moar cheese pleese\\""}],"synced_at":"\\"I am not a timestamp\\""}';

    /**
     * groups: The IdP groups you want to connect to a GitHub team. When updating, the new `groups` object will replace the original one. You must include any existing groups that you don't want to remove.
     */
    public function __construct(public array $groups, #[MapFrom('synced_at')] public ?string $syncedAt)
    {
    }
}
