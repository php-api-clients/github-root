<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\BranchRestrictionPolicy;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Teams
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "id": {
            "type": "integer"
        },
        "node_id": {
            "type": "string"
        },
        "url": {
            "type": "string"
        },
        "html_url": {
            "type": "string"
        },
        "name": {
            "type": "string"
        },
        "slug": {
            "type": "string"
        },
        "description": {
            "type": [
                "string",
                "null"
            ]
        },
        "privacy": {
            "type": "string"
        },
        "notification_setting": {
            "type": "string"
        },
        "permission": {
            "type": "string"
        },
        "members_url": {
            "type": "string"
        },
        "repositories_url": {
            "type": "string"
        },
        "parent": {
            "type": [
                "string",
                "null"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "node_id": "generated",
    "url": "generated",
    "html_url": "generated",
    "name": "generated",
    "slug": "generated",
    "description": "generated",
    "privacy": "generated",
    "notification_setting": "generated",
    "permission": "generated",
    "members_url": "generated",
    "repositories_url": "generated",
    "parent": "generated"
}';

    public function __construct(public int|null $id, #[MapFrom('node_id')]
    public string|null $nodeId, public string|null $url, #[MapFrom('html_url')]
    public string|null $htmlUrl, public string|null $name, public string|null $slug, public string|null $description, public string|null $privacy, #[MapFrom('notification_setting')]
    public string|null $notificationSetting, public string|null $permission, #[MapFrom('members_url')]
    public string|null $membersUrl, #[MapFrom('repositories_url')]
    public string|null $repositoriesUrl, public string|null $parent,)
    {
    }
}
