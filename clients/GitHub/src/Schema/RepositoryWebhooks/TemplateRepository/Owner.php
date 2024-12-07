<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository;

final readonly class Owner implements \ApiClients\Client\GitHub\Contract\RepositoryWebhooks\TemplateRepository\Owner
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "login": {
            "type": "string"
        },
        "id": {
            "type": "integer"
        },
        "node_id": {
            "type": "string"
        },
        "avatar_url": {
            "type": "string"
        },
        "gravatar_id": {
            "type": "string"
        },
        "url": {
            "type": "string"
        },
        "html_url": {
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
        "starred_url": {
            "type": "string"
        },
        "subscriptions_url": {
            "type": "string"
        },
        "organizations_url": {
            "type": "string"
        },
        "repos_url": {
            "type": "string"
        },
        "events_url": {
            "type": "string"
        },
        "received_events_url": {
            "type": "string"
        },
        "type": {
            "type": "string"
        },
        "site_admin": {
            "type": "boolean"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "login": "generated",
    "id": 2,
    "node_id": "generated",
    "avatar_url": "generated",
    "gravatar_id": "generated",
    "url": "generated",
    "html_url": "generated",
    "followers_url": "generated",
    "following_url": "generated",
    "gists_url": "generated",
    "starred_url": "generated",
    "subscriptions_url": "generated",
    "organizations_url": "generated",
    "repos_url": "generated",
    "events_url": "generated",
    "received_events_url": "generated",
    "type": "generated",
    "site_admin": false
}';
    public function __construct(public ?string $login, public ?int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('avatar_url')] public ?string $avatarUrl, #[\EventSauce\ObjectHydrator\MapFrom('gravatar_id')] public ?string $gravatarId, public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('followers_url')] public ?string $followersUrl, #[\EventSauce\ObjectHydrator\MapFrom('following_url')] public ?string $followingUrl, #[\EventSauce\ObjectHydrator\MapFrom('gists_url')] public ?string $gistsUrl, #[\EventSauce\ObjectHydrator\MapFrom('starred_url')] public ?string $starredUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscriptions_url')] public ?string $subscriptionsUrl, #[\EventSauce\ObjectHydrator\MapFrom('organizations_url')] public ?string $organizationsUrl, #[\EventSauce\ObjectHydrator\MapFrom('repos_url')] public ?string $reposUrl, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public ?string $eventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('received_events_url')] public ?string $receivedEventsUrl, public ?string $type, #[\EventSauce\ObjectHydrator\MapFrom('site_admin')] public ?bool $siteAdmin)
    {
    }
}
