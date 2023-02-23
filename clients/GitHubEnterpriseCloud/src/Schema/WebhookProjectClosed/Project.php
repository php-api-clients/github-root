<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookProjectClosed;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Project
{
    public const SCHEMA_JSON = '{"title":"Project","required":["owner_url","url","html_url","columns_url","id","node_id","name","body","number","state","creator","created_at","updated_at"],"type":"object","properties":{"body":{"type":["string","null"],"description":"Body of the project"},"columns_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"name":{"type":"string","description":"Name of the project"},"node_id":{"type":"string"},"number":{"type":"integer"},"owner_url":{"type":"string","format":"uri"},"state":{"enum":["open","closed"],"type":"string","description":"State of the project; either \'open\' or \'closed\'"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Project';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":"generated_body","columns_url":"generated_columns_url","created_at":"generated_created_at","creator":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"html_url":"generated_html_url","id":13,"name":"generated_name","node_id":"generated_node_id","number":13,"owner_url":"generated_owner_url","state":"generated_state","updated_at":"generated_updated_at","url":"generated_url"}';
    /**
     * Body of the project
     */
    public ?string $body;
    public ?string $columns_url;
    public ?string $created_at;
    public ?Schema\Discussion\AnswerChosenBy $creator;
    public ?string $html_url;
    public ?int $id;
    /**
     * Name of the project
     */
    public ?string $name;
    public ?string $node_id;
    public ?int $number;
    public ?string $owner_url;
    /**
     * State of the project; either 'open' or 'closed'
     */
    public ?string $state;
    public ?string $updated_at;
    public ?string $url;
    public function __construct(string $body, string $columns_url, string $created_at, Schema\Discussion\AnswerChosenBy $creator, string $html_url, int $id, string $name, string $node_id, int $number, string $owner_url, string $state, string $updated_at, string $url)
    {
        $this->body = $body;
        $this->columns_url = $columns_url;
        $this->created_at = $created_at;
        $this->creator = $creator;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->number = $number;
        $this->owner_url = $owner_url;
        $this->state = $state;
        $this->updated_at = $updated_at;
        $this->url = $url;
    }
}
