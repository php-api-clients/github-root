<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T97BBA23D\TACCE0A37\T771D92AD;

abstract readonly class TB50B3D33 implements \ApiClients\Client\GitHub\Contract\WebhookStatus\Commit\Author
{
    const SCHEMA_JSON = '{
    "title": "User",
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "avatar_url": {
            "type": "string",
            "format": "uri"
        },
        "deleted": {
            "type": "boolean"
        },
        "email": {
            "type": [
                "string",
                "null"
            ]
        },
        "events_url": {
            "type": "string",
            "format": "uri-template"
        },
        "followers_url": {
            "type": "string",
            "format": "uri"
        },
        "following_url": {
            "type": "string",
            "format": "uri-template"
        },
        "gists_url": {
            "type": "string",
            "format": "uri-template"
        },
        "gravatar_id": {
            "type": "string"
        },
        "html_url": {
            "type": "string",
            "format": "uri"
        },
        "id": {
            "type": "integer"
        },
        "login": {
            "type": "string"
        },
        "name": {
            "type": "string"
        },
        "node_id": {
            "type": "string"
        },
        "organizations_url": {
            "type": "string",
            "format": "uri"
        },
        "received_events_url": {
            "type": "string",
            "format": "uri"
        },
        "repos_url": {
            "type": "string",
            "format": "uri"
        },
        "site_admin": {
            "type": "boolean"
        },
        "starred_url": {
            "type": "string",
            "format": "uri-template"
        },
        "subscriptions_url": {
            "type": "string",
            "format": "uri"
        },
        "type": {
            "enum": [
                "Bot",
                "User",
                "Organization"
            ],
            "type": "string"
        },
        "url": {
            "type": "string",
            "format": "uri"
        }
    }
}';
    public const SCHEMA_TITLE = 'User';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "avatar_url": "https:\\/\\/example.com\\/",
    "deleted": false,
    "email": "generated",
    "events_url": "generated",
    "followers_url": "https:\\/\\/example.com\\/",
    "following_url": "generated",
    "gists_url": "generated",
    "gravatar_id": "generated",
    "html_url": "https:\\/\\/example.com\\/",
    "id": 2,
    "login": "generated",
    "name": "generated",
    "node_id": "generated",
    "organizations_url": "https:\\/\\/example.com\\/",
    "received_events_url": "https:\\/\\/example.com\\/",
    "repos_url": "https:\\/\\/example.com\\/",
    "site_admin": false,
    "starred_url": "generated",
    "subscriptions_url": "https:\\/\\/example.com\\/",
    "type": "Bot",
    "url": "https:\\/\\/example.com\\/"
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('avatar_url')] public ?string $avatarUrl, public ?bool $deleted, public ?string $email, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public ?string $eventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('followers_url')] public ?string $followersUrl, #[\EventSauce\ObjectHydrator\MapFrom('following_url')] public ?string $followingUrl, #[\EventSauce\ObjectHydrator\MapFrom('gists_url')] public ?string $gistsUrl, #[\EventSauce\ObjectHydrator\MapFrom('gravatar_id')] public ?string $gravatarId, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, public ?int $id, public ?string $login, public ?string $name, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('organizations_url')] public ?string $organizationsUrl, #[\EventSauce\ObjectHydrator\MapFrom('received_events_url')] public ?string $receivedEventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('repos_url')] public ?string $reposUrl, #[\EventSauce\ObjectHydrator\MapFrom('site_admin')] public ?bool $siteAdmin, #[\EventSauce\ObjectHydrator\MapFrom('starred_url')] public ?string $starredUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscriptions_url')] public ?string $subscriptionsUrl, public ?string $type, public ?string $url)
    {
    }
}
