<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy;

final readonly class Teams implements \ApiClients\Client\GitHub\Contract\BranchRestrictionPolicy\Teams
{
    const SCHEMA_JSON = '{
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
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
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
    public function __construct(public ?int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId, public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, public ?string $name, public ?string $slug, public ?string $description, public ?string $privacy, #[\EventSauce\ObjectHydrator\MapFrom('notification_setting')] public ?string $notificationSetting, public ?string $permission, #[\EventSauce\ObjectHydrator\MapFrom('members_url')] public ?string $membersUrl, #[\EventSauce\ObjectHydrator\MapFrom('repositories_url')] public ?string $repositoriesUrl, public ?string $parent)
    {
    }
}
