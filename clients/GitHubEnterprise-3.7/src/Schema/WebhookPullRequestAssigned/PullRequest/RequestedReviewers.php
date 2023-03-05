<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookPullRequestAssigned\PullRequest;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class RequestedReviewers
{
    public const SCHEMA_JSON = '{"title":"Team","required":["name","id","node_id","slug","description","privacy","url","html_url","members_url","repositories_url","permission"],"type":"object","properties":{"deleted":{"type":"boolean"},"description":{"type":["string","null"],"description":"Description of the team"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the team"},"members_url":{"type":"string","format":"uri-template"},"name":{"type":"string","description":"Name of the team"},"node_id":{"type":"string"},"parent":{"required":["name","id","node_id","slug","description","privacy","url","html_url","members_url","repositories_url","permission"],"type":["object","null"],"properties":{"description":{"type":["string","null"],"description":"Description of the team"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the team"},"members_url":{"type":"string","format":"uri-template"},"name":{"type":"string","description":"Name of the team"},"node_id":{"type":"string"},"permission":{"type":"string","description":"Permission that the team will have for its repositories"},"privacy":{"enum":["open","closed","secret"],"type":"string"},"repositories_url":{"type":"string","format":"uri"},"slug":{"type":"string"},"url":{"type":"string","description":"URL for the team","format":"uri"}}},"permission":{"type":"string","description":"Permission that the team will have for its repositories"},"privacy":{"enum":["open","closed","secret"],"type":"string"},"repositories_url":{"type":"string","format":"uri"},"slug":{"type":"string"},"url":{"type":"string","description":"URL for the team","format":"uri"}},"description":"Groups of organization members that gives permissions on specified repositories."}';
    public const SCHEMA_TITLE = 'Team';
    public const SCHEMA_DESCRIPTION = 'Groups of organization members that gives permissions on specified repositories.';
    public const SCHEMA_EXAMPLE_DATA = '{"deleted":false,"description":"generated_description","html_url":"generated_html_url","id":13,"members_url":"generated_members_url","name":"generated_name","node_id":"generated_node_id","parent":{"description":"generated_description","html_url":"generated_html_url","id":13,"members_url":"generated_members_url","name":"generated_name","node_id":"generated_node_id","permission":"generated_permission","privacy":"generated_privacy","repositories_url":"generated_repositories_url","slug":"generated_slug","url":"generated_url"},"permission":"generated_permission","privacy":"generated_privacy","repositories_url":"generated_repositories_url","slug":"generated_slug","url":"generated_url"}';
    public bool $deleted;
    /**
     * Description of the team
     */
    public ?string $description;
    public ?string $html_url;
    /**
     * Unique identifier of the team
     */
    public ?int $id;
    public ?string $members_url;
    /**
     * Name of the team
     */
    public ?string $name;
    public ?string $node_id;
    public ?Schema\WebhookMembershipAdded\Team\Parent_ $parent;
    /**
     * Permission that the team will have for its repositories
     */
    public ?string $permission;
    public ?string $privacy;
    public ?string $repositories_url;
    public ?string $slug;
    /**
     * URL for the team
     */
    public ?string $url;
    public function __construct(bool $deleted, string $description, string $html_url, int $id, string $members_url, string $name, string $node_id, Schema\WebhookMembershipAdded\Team\Parent_ $parent, string $permission, string $privacy, string $repositories_url, string $slug, string $url)
    {
        $this->deleted = $deleted;
        $this->description = $description;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->members_url = $members_url;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->parent = $parent;
        $this->permission = $permission;
        $this->privacy = $privacy;
        $this->repositories_url = $repositories_url;
        $this->slug = $slug;
        $this->url = $url;
    }
}
