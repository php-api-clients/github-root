<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookInstallationTargetRenamed;

final readonly class Account implements \ApiClients\Client\GitHub\Contract\WebhookInstallationTargetRenamed\Account
{
    const SCHEMA_JSON = '{
    "required": [
        "id",
        "node_id",
        "avatar_url",
        "html_url"
    ],
    "type": "object",
    "properties": {
        "archived_at": {
            "type": [
                "string",
                "null"
            ]
        },
        "avatar_url": {
            "type": "string"
        },
        "created_at": {
            "type": "string"
        },
        "description": {
            "type": [
                "null"
            ]
        },
        "events_url": {
            "type": "string"
        },
        "followers": {
            "type": "integer"
        },
        "followers_url": {
            "type": "string"
        },
        "following": {
            "type": "integer"
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
        "has_organization_projects": {
            "type": "boolean"
        },
        "has_repository_projects": {
            "type": "boolean"
        },
        "hooks_url": {
            "type": "string"
        },
        "html_url": {
            "type": "string"
        },
        "id": {
            "type": "integer"
        },
        "is_verified": {
            "type": "boolean"
        },
        "issues_url": {
            "type": "string"
        },
        "login": {
            "type": "string"
        },
        "members_url": {
            "type": "string"
        },
        "name": {
            "type": "string"
        },
        "node_id": {
            "type": "string"
        },
        "organizations_url": {
            "type": "string"
        },
        "public_gists": {
            "type": "integer"
        },
        "public_members_url": {
            "type": "string"
        },
        "public_repos": {
            "type": "integer"
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
        "slug": {
            "type": "string"
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
        "updated_at": {
            "type": "string"
        },
        "url": {
            "type": "string"
        },
        "website_url": {
            "type": [
                "null"
            ]
        },
        "user_view_type": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "archived_at": "generated",
    "avatar_url": "generated",
    "created_at": "generated",
    "description": "generated",
    "events_url": "generated",
    "followers": 9,
    "followers_url": "generated",
    "following": 9,
    "following_url": "generated",
    "gists_url": "generated",
    "gravatar_id": "generated",
    "has_organization_projects": false,
    "has_repository_projects": false,
    "hooks_url": "generated",
    "html_url": "generated",
    "id": 2,
    "is_verified": false,
    "issues_url": "generated",
    "login": "generated",
    "members_url": "generated",
    "name": "generated",
    "node_id": "generated",
    "organizations_url": "generated",
    "public_gists": 12,
    "public_members_url": "generated",
    "public_repos": 12,
    "received_events_url": "generated",
    "repos_url": "generated",
    "site_admin": false,
    "slug": "generated",
    "starred_url": "generated",
    "subscriptions_url": "generated",
    "type": "generated",
    "updated_at": "generated",
    "url": "generated",
    "website_url": "generated",
    "user_view_type": "generated"
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('archived_at')] public ?string $archivedAt, #[\EventSauce\ObjectHydrator\MapFrom('avatar_url')] public string $avatarUrl, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, public string $description, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public ?string $eventsUrl, public ?int $followers, #[\EventSauce\ObjectHydrator\MapFrom('followers_url')] public ?string $followersUrl, public ?int $following, #[\EventSauce\ObjectHydrator\MapFrom('following_url')] public ?string $followingUrl, #[\EventSauce\ObjectHydrator\MapFrom('gists_url')] public ?string $gistsUrl, #[\EventSauce\ObjectHydrator\MapFrom('gravatar_id')] public ?string $gravatarId, #[\EventSauce\ObjectHydrator\MapFrom('has_organization_projects')] public ?bool $hasOrganizationProjects, #[\EventSauce\ObjectHydrator\MapFrom('has_repository_projects')] public ?bool $hasRepositoryProjects, #[\EventSauce\ObjectHydrator\MapFrom('hooks_url')] public ?string $hooksUrl, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('is_verified')] public ?bool $isVerified, #[\EventSauce\ObjectHydrator\MapFrom('issues_url')] public ?string $issuesUrl, public ?string $login, #[\EventSauce\ObjectHydrator\MapFrom('members_url')] public ?string $membersUrl, public ?string $name, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('organizations_url')] public ?string $organizationsUrl, #[\EventSauce\ObjectHydrator\MapFrom('public_gists')] public ?int $publicGists, #[\EventSauce\ObjectHydrator\MapFrom('public_members_url')] public ?string $publicMembersUrl, #[\EventSauce\ObjectHydrator\MapFrom('public_repos')] public ?int $publicRepos, #[\EventSauce\ObjectHydrator\MapFrom('received_events_url')] public ?string $receivedEventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('repos_url')] public ?string $reposUrl, #[\EventSauce\ObjectHydrator\MapFrom('site_admin')] public ?bool $siteAdmin, public ?string $slug, #[\EventSauce\ObjectHydrator\MapFrom('starred_url')] public ?string $starredUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscriptions_url')] public ?string $subscriptionsUrl, public ?string $type, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public ?string $updatedAt, public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('website_url')] public string $websiteUrl, #[\EventSauce\ObjectHydrator\MapFrom('user_view_type')] public ?string $userViewType)
    {
    }
}
