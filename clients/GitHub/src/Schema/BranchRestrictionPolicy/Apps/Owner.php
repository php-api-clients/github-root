<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps;

final readonly class Owner implements \ApiClients\Client\GitHub\Contract\BranchRestrictionPolicy\Apps\Owner
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
        "url": {
            "type": "string"
        },
        "repos_url": {
            "type": "string"
        },
        "events_url": {
            "type": "string"
        },
        "hooks_url": {
            "type": "string"
        },
        "issues_url": {
            "type": "string"
        },
        "members_url": {
            "type": "string"
        },
        "public_members_url": {
            "type": "string"
        },
        "avatar_url": {
            "type": "string"
        },
        "description": {
            "type": "string"
        },
        "gravatar_id": {
            "type": "string",
            "examples": [
                "\\"\\""
            ]
        },
        "html_url": {
            "type": "string",
            "examples": [
                "\\"https:\\/\\/github.com\\/testorg-ea8ec76d71c3af4b\\""
            ]
        },
        "followers_url": {
            "type": "string",
            "examples": [
                "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/followers\\""
            ]
        },
        "following_url": {
            "type": "string",
            "examples": [
                "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/following{\\/other_user}\\""
            ]
        },
        "gists_url": {
            "type": "string",
            "examples": [
                "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/gists{\\/gist_id}\\""
            ]
        },
        "starred_url": {
            "type": "string",
            "examples": [
                "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/starred{\\/owner}{\\/repo}\\""
            ]
        },
        "subscriptions_url": {
            "type": "string",
            "examples": [
                "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/subscriptions\\""
            ]
        },
        "organizations_url": {
            "type": "string",
            "examples": [
                "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/orgs\\""
            ]
        },
        "received_events_url": {
            "type": "string",
            "examples": [
                "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/received_events\\""
            ]
        },
        "type": {
            "type": "string",
            "examples": [
                "\\"Organization\\""
            ]
        },
        "site_admin": {
            "type": "boolean",
            "examples": [
                false
            ]
        },
        "user_view_type": {
            "type": "string",
            "examples": [
                "public"
            ]
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "login": "generated",
    "id": 2,
    "node_id": "generated",
    "url": "generated",
    "repos_url": "generated",
    "events_url": "generated",
    "hooks_url": "generated",
    "issues_url": "generated",
    "members_url": "generated",
    "public_members_url": "generated",
    "avatar_url": "generated",
    "description": "generated",
    "gravatar_id": "generated",
    "html_url": "generated",
    "followers_url": "generated",
    "following_url": "generated",
    "gists_url": "generated",
    "starred_url": "generated",
    "subscriptions_url": "generated",
    "organizations_url": "generated",
    "received_events_url": "generated",
    "type": "generated",
    "site_admin": false,
    "user_view_type": "generated"
}';
    public function __construct(public ?string $login, public ?int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId, public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('repos_url')] public ?string $reposUrl, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public ?string $eventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('hooks_url')] public ?string $hooksUrl, #[\EventSauce\ObjectHydrator\MapFrom('issues_url')] public ?string $issuesUrl, #[\EventSauce\ObjectHydrator\MapFrom('members_url')] public ?string $membersUrl, #[\EventSauce\ObjectHydrator\MapFrom('public_members_url')] public ?string $publicMembersUrl, #[\EventSauce\ObjectHydrator\MapFrom('avatar_url')] public ?string $avatarUrl, public ?string $description, #[\EventSauce\ObjectHydrator\MapFrom('gravatar_id')] public ?string $gravatarId, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('followers_url')] public ?string $followersUrl, #[\EventSauce\ObjectHydrator\MapFrom('following_url')] public ?string $followingUrl, #[\EventSauce\ObjectHydrator\MapFrom('gists_url')] public ?string $gistsUrl, #[\EventSauce\ObjectHydrator\MapFrom('starred_url')] public ?string $starredUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscriptions_url')] public ?string $subscriptionsUrl, #[\EventSauce\ObjectHydrator\MapFrom('organizations_url')] public ?string $organizationsUrl, #[\EventSauce\ObjectHydrator\MapFrom('received_events_url')] public ?string $receivedEventsUrl, public ?string $type, #[\EventSauce\ObjectHydrator\MapFrom('site_admin')] public ?bool $siteAdmin, #[\EventSauce\ObjectHydrator\MapFrom('user_view_type')] public ?string $userViewType)
    {
    }
}
