<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookPush;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class HeadCommit
{
    public const SCHEMA_JSON = '{"title":"Commit","required":["id","tree_id","distinct","message","timestamp","url","author","committer"],"type":["object","null"],"properties":{"added":{"type":"array","items":{"type":"string"},"description":"An array of files added in the commit."},"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"distinct":{"type":"boolean","description":"Whether this commit is distinct from any that have been pushed before."},"id":{"type":"string"},"message":{"type":"string","description":"The commit message."},"modified":{"type":"array","items":{"type":"string"},"description":"An array of files modified by the commit."},"removed":{"type":"array","items":{"type":"string"},"description":"An array of files removed in the commit."},"timestamp":{"type":"string","description":"The ISO 8601 timestamp of the commit.","format":"date-time"},"tree_id":{"type":"string"},"url":{"type":"string","description":"URL that points to the commit API resource.","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Commit';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"added":[null],"author":{"date":"generated_date","email":"generated_email","name":"generated_name","username":"generated_username"},"committer":{"date":"generated_date","email":"generated_email","name":"generated_name","username":"generated_username"},"distinct":false,"id":"generated_id","message":"generated_message","modified":[null],"removed":[null],"timestamp":"generated_timestamp","tree_id":"generated_tree_id","url":"generated_url"}';
    /**
     * An array of files added in the commit.
     * @var array<string>
     */
    public array $added;
    /**
     * Metaproperties for Git author/committer information.
     */
    public ?Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author $author;
    /**
     * Metaproperties for Git author/committer information.
     */
    public ?Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author $committer;
    /**
     * Whether this commit is distinct from any that have been pushed before.
     */
    public ?bool $distinct;
    public ?string $id;
    /**
     * The commit message.
     */
    public ?string $message;
    /**
     * An array of files modified by the commit.
     * @var array<string>
     */
    public array $modified;
    /**
     * An array of files removed in the commit.
     * @var array<string>
     */
    public array $removed;
    /**
     * The ISO 8601 timestamp of the commit.
     */
    public ?string $timestamp;
    public ?string $tree_id;
    /**
     * URL that points to the commit API resource.
     */
    public ?string $url;
    public function __construct(array $added, Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author $author, Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author $committer, bool $distinct, string $id, string $message, array $modified, array $removed, string $timestamp, string $tree_id, string $url)
    {
        $this->added = $added;
        $this->author = $author;
        $this->committer = $committer;
        $this->distinct = $distinct;
        $this->id = $id;
        $this->message = $message;
        $this->modified = $modified;
        $this->removed = $removed;
        $this->timestamp = $timestamp;
        $this->tree_id = $tree_id;
        $this->url = $url;
    }
}
