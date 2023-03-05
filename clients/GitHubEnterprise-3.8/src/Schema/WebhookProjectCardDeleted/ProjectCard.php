<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookProjectCardDeleted;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ProjectCard
{
    public const SCHEMA_JSON = '{"title":"Project Card","required":["url","project_url","column_url","column_id","id","node_id","note","archived","creator","created_at","updated_at"],"type":"object","properties":{"after_id":{"type":["integer","null"]},"archived":{"type":"boolean","description":"Whether or not the card is archived"},"column_id":{"type":["integer","null"]},"column_url":{"type":"string","format":"uri"},"content_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}},"id":{"type":"integer","description":"The project card\'s ID"},"node_id":{"type":"string"},"note":{"type":["string","null"]},"project_url":{"type":"string","format":"uri"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Project Card';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"after_id":13,"archived":false,"column_id":13,"column_url":"generated_column_url","content_url":"generated_content_url","created_at":"generated_created_at","creator":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"id":13,"node_id":"generated_node_id","note":"generated_note","project_url":"generated_project_url","updated_at":"generated_updated_at","url":"generated_url"}';
    public ?int $after_id;
    /**
     * Whether or not the card is archived
     */
    public ?bool $archived;
    public ?int $column_id;
    public ?string $column_url;
    public string $content_url;
    public ?string $created_at;
    public ?Schema\WebhookIssueCommentCreated\Issue\Assignee $creator;
    /**
     * The project card's ID
     */
    public ?int $id;
    public ?string $node_id;
    public ?string $note;
    public ?string $project_url;
    public ?string $updated_at;
    public ?string $url;
    public function __construct(int $after_id, bool $archived, int $column_id, string $column_url, string $content_url, string $created_at, Schema\WebhookIssueCommentCreated\Issue\Assignee $creator, int $id, string $node_id, string $note, string $project_url, string $updated_at, string $url)
    {
        $this->after_id = $after_id;
        $this->archived = $archived;
        $this->column_id = $column_id;
        $this->column_url = $column_url;
        $this->content_url = $content_url;
        $this->created_at = $created_at;
        $this->creator = $creator;
        $this->id = $id;
        $this->node_id = $node_id;
        $this->note = $note;
        $this->project_url = $project_url;
        $this->updated_at = $updated_at;
        $this->url = $url;
    }
}
