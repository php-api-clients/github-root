<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class OrganizationSimpleWebhooks implements \ApiClients\Client\GitHub\Contract\OrganizationSimpleWebhooks
{
    const SCHEMA_JSON = '{
    "title": "Organization Simple",
    "required": [
        "login",
        "url",
        "id",
        "node_id",
        "repos_url",
        "events_url",
        "hooks_url",
        "issues_url",
        "members_url",
        "public_members_url",
        "avatar_url",
        "description"
    ],
    "type": "object",
    "properties": {
        "login": {
            "type": "string",
            "examples": [
                "github"
            ]
        },
        "id": {
            "type": "integer",
            "examples": [
                1
            ]
        },
        "node_id": {
            "type": "string",
            "examples": [
                "MDEyOk9yZ2FuaXphdGlvbjE="
            ]
        },
        "url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/orgs\\/github"
            ]
        },
        "repos_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/orgs\\/github\\/repos"
            ]
        },
        "events_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/orgs\\/github\\/events"
            ]
        },
        "hooks_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/api.github.com\\/orgs\\/github\\/hooks"
            ]
        },
        "issues_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/api.github.com\\/orgs\\/github\\/issues"
            ]
        },
        "members_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/api.github.com\\/orgs\\/github\\/members{\\/member}"
            ]
        },
        "public_members_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/api.github.com\\/orgs\\/github\\/public_members{\\/member}"
            ]
        },
        "avatar_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"
            ]
        },
        "description": {
            "type": [
                "string",
                "null"
            ],
            "examples": [
                "A great organization"
            ]
        }
    },
    "description": "A GitHub organization. Webhook payloads contain the `organization` property when the webhook is configured for an\\norganization, or when the event occurs from activity in a repository owned by an organization."
}';
    public const SCHEMA_TITLE = 'Organization Simple';
    public const SCHEMA_DESCRIPTION = 'A GitHub organization. Webhook payloads contain the `organization` property when the webhook is configured for an
organization, or when the event occurs from activity in a repository owned by an organization.';
    const SCHEMA_EXAMPLE_DATA = '{
    "login": "generated",
    "id": 2,
    "node_id": "generated",
    "url": "https:\\/\\/example.com\\/",
    "repos_url": "https:\\/\\/example.com\\/",
    "events_url": "https:\\/\\/example.com\\/",
    "hooks_url": "generated",
    "issues_url": "generated",
    "members_url": "generated",
    "public_members_url": "generated",
    "avatar_url": "generated",
    "description": "generated"
}';
    public function __construct(public string $login, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('repos_url')] public string $reposUrl, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public string $eventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('hooks_url')] public string $hooksUrl, #[\EventSauce\ObjectHydrator\MapFrom('issues_url')] public string $issuesUrl, #[\EventSauce\ObjectHydrator\MapFrom('members_url')] public string $membersUrl, #[\EventSauce\ObjectHydrator\MapFrom('public_members_url')] public string $publicMembersUrl, #[\EventSauce\ObjectHydrator\MapFrom('avatar_url')] public string $avatarUrl, public ?string $description)
    {
    }
}
