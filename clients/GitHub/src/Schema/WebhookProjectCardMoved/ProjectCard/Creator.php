<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookProjectCardMoved\ProjectCard;

final readonly class Creator implements \ApiClients\Client\GitHub\Contract\WebhookProjectCardMoved\ProjectCard\CreatorA
{
    const SCHEMA_JSON = '{
    "type": [
        "object",
        "null"
    ],
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
    "url": "generated"
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('avatar_url')] public ?string $avatarUrl, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public ?string $eventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('followers_url')] public ?string $followersUrl, #[\EventSauce\ObjectHydrator\MapFrom('following_url')] public ?string $followingUrl, #[\EventSauce\ObjectHydrator\MapFrom('gists_url')] public ?string $gistsUrl, #[\EventSauce\ObjectHydrator\MapFrom('gravatar_id')] public ?string $gravatarId, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, public ?int $id, public ?string $login, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('organizations_url')] public ?string $organizationsUrl, #[\EventSauce\ObjectHydrator\MapFrom('received_events_url')] public ?string $receivedEventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('repos_url')] public ?string $reposUrl, #[\EventSauce\ObjectHydrator\MapFrom('site_admin')] public ?bool $siteAdmin, #[\EventSauce\ObjectHydrator\MapFrom('starred_url')] public ?string $starredUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscriptions_url')] public ?string $subscriptionsUrl, public ?string $type, public ?string $url)
    {
    }
}
