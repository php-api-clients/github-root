<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookReleasePrereleased;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Release
{
    public const SCHEMA_JSON = '{"required":["prerelease"],"type":"object","properties":{"assets":{"type":"array","items":{"type":["object","null"]}},"assets_url":{"type":"string"},"author":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"body":{"type":["string","null"]},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"name":{"type":["string","null"]},"node_id":{"type":"string"},"prerelease":{"enum":[true],"type":"boolean","description":"Whether the release is identified as a prerelease or a full release."},"published_at":{"type":["string","null"]},"tag_name":{"type":"string"},"tarball_url":{"type":["string","null"]},"target_commitish":{"type":"string"},"upload_url":{"type":"string"},"url":{"type":"string"},"zipball_url":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"assets":[null],"assets_url":"generated_assets_url","author":{"avatar_url":"generated_avatar_url","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"body":"generated_body","created_at":"generated_created_at","draft":false,"html_url":"generated_html_url","id":13,"name":"generated_name","node_id":"generated_node_id","prerelease":false,"published_at":"generated_published_at","tag_name":"generated_tag_name","tarball_url":"generated_tarball_url","target_commitish":"generated_target_commitish","upload_url":"generated_upload_url","url":"generated_url","zipball_url":"generated_zipball_url"}';
    /**
     * @var array<Schema\WebhookCheckSuiteCompleted\ActionsMeta>
     */
    public array $assets;
    public string $assets_url;
    public Schema\WebhookDeploymentCreated\WorkflowRun\HeadRepository\Owner $author;
    public ?string $body;
    public string $created_at;
    public bool $draft;
    public string $html_url;
    public int $id;
    public ?string $name;
    public string $node_id;
    /**
     * Whether the release is identified as a prerelease or a full release.
     */
    public ?bool $prerelease;
    public ?string $published_at;
    public string $tag_name;
    public ?string $tarball_url;
    public string $target_commitish;
    public string $upload_url;
    public string $url;
    public ?string $zipball_url;
    public function __construct(array $assets, string $assets_url, Schema\WebhookDeploymentCreated\WorkflowRun\HeadRepository\Owner $author, string $body, string $created_at, bool $draft, string $html_url, int $id, string $name, string $node_id, bool $prerelease, string $published_at, string $tag_name, string $tarball_url, string $target_commitish, string $upload_url, string $url, string $zipball_url)
    {
        $this->assets = $assets;
        $this->assets_url = $assets_url;
        $this->author = $author;
        $this->body = $body;
        $this->created_at = $created_at;
        $this->draft = $draft;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->prerelease = $prerelease;
        $this->published_at = $published_at;
        $this->tag_name = $tag_name;
        $this->tarball_url = $tarball_url;
        $this->target_commitish = $target_commitish;
        $this->upload_url = $upload_url;
        $this->url = $url;
        $this->zipball_url = $zipball_url;
    }
}
