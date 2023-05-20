<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Teams\CreateOrUpdateIdpGroupConnectionsInOrg\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"groups":{"type":"array","items":{"required":["group_id","group_name","group_description"],"type":"object","properties":{"group_id":{"type":"string","description":"ID of the IdP group."},"group_name":{"type":"string","description":"Name of the IdP group."},"group_description":{"type":"string","description":"Description of the IdP group."}}},"description":"The IdP groups you want to connect to a GitHub team. When updating, the new `groups` object will replace the original one. You must include any existing groups that you don\'t want to remove."}},"additionalProperties":false}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"groups":[{"group_id":"generated","group_name":"generated","group_description":"generated"},{"group_id":"generated","group_name":"generated","group_description":"generated"}]}';

    /**
     * groups: The IdP groups you want to connect to a GitHub team. When updating, the new `groups` object will replace the original one. You must include any existing groups that you don't want to remove.
     */
    public function __construct(public ?array $groups)
    {
    }
}
