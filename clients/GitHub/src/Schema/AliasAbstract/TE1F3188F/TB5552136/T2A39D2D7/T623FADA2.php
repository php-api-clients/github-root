<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TE1F3188F\TB5552136\T2A39D2D7;

abstract readonly class T623FADA2 implements \ApiClients\Client\GitHub\Contract\WebhookRegistryPackagePublished\RegistryPackage\Owner
{
    const SCHEMA_JSON = '{
    "required": [
        "login",
        "id",
        "node_id",
        "avatar_url",
        "gravatar_id",
        "url",
        "html_url",
        "followers_url",
        "following_url",
        "gists_url",
        "starred_url",
        "subscriptions_url",
        "organizations_url",
        "repos_url",
        "events_url",
        "received_events_url",
        "type",
        "site_admin"
    ],
    "type": "object",
    "properties": {
        "avatar_url": {
            "type": "string"
        },
        "events_url": {
            "type": "string"
        },
        "followers_url": {
            "type": "string"
        },
        "following_url": {
            "type": "string"
        },
        "gists_url": {
            "type": "string"
        },
        "gravatar_id": {
            "type": "string"
        },
        "html_url": {
            "type": "string"
        },
        "id": {
            "type": "integer"
        },
        "login": {
            "type": "string"
        },
        "node_id": {
            "type": "string"
        },
        "organizations_url": {
            "type": "string"
        },
        "received_events_url": {
            "type": "string"
        },
        "repos_url": {
            "type": "string"
        },
        "site_admin": {
            "type": "boolean"
        },
        "starred_url": {
            "type": "string"
        },
        "subscriptions_url": {
            "type": "string"
        },
        "type": {
            "type": "string"
        },
        "url": {
            "type": "string"
        },
        "user_view_type": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "avatar_url": "generated",
    "events_url": "generated",
    "followers_url": "generated",
    "following_url": "generated",
    "gists_url": "generated",
    "gravatar_id": "generated",
    "html_url": "generated",
    "id": 2,
    "login": "generated",
    "node_id": "generated",
    "organizations_url": "generated",
    "received_events_url": "generated",
    "repos_url": "generated",
    "site_admin": false,
    "starred_url": "generated",
    "subscriptions_url": "generated",
    "type": "generated",
    "url": "generated",
    "user_view_type": "generated"
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('avatar_url')] public string $avatarUrl, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public string $eventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('followers_url')] public string $followersUrl, #[\EventSauce\ObjectHydrator\MapFrom('following_url')] public string $followingUrl, #[\EventSauce\ObjectHydrator\MapFrom('gists_url')] public string $gistsUrl, #[\EventSauce\ObjectHydrator\MapFrom('gravatar_id')] public string $gravatarId, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, public string $login, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('organizations_url')] public string $organizationsUrl, #[\EventSauce\ObjectHydrator\MapFrom('received_events_url')] public string $receivedEventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('repos_url')] public string $reposUrl, #[\EventSauce\ObjectHydrator\MapFrom('site_admin')] public bool $siteAdmin, #[\EventSauce\ObjectHydrator\MapFrom('starred_url')] public string $starredUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscriptions_url')] public string $subscriptionsUrl, public string $type, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('user_view_type')] public ?string $userViewType)
    {
    }
}
