<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookCommitCommentCreated;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Comment
{
    public const SCHEMA_JSON = '{"required":["url","html_url","id","node_id","user","position","line","path","commit_id","created_at","updated_at","author_association","body"],"type":"object","properties":{"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":"string","description":"The text of the comment."},"commit_id":{"type":"string","description":"The SHA of the commit to which the comment applies."},"created_at":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"The ID of the commit comment."},"line":{"type":["integer","null"],"description":"The line of the blob to which the comment applies. The last line of the range for a multi-line comment"},"node_id":{"type":"string","description":"The node ID of the commit comment."},"path":{"type":["string","null"],"description":"The relative path of the file to which the comment applies."},"position":{"type":["integer","null"],"description":"The line index in the diff to which the comment applies."},"reactions":{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"updated_at":{"type":"string"},"url":{"type":"string","format":"uri"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"The [commit comment](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/repos#get-a-commit-comment) resource."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The [commit comment](https://docs.github.com/github-ae@latest/rest/reference/repos#get-a-commit-comment) resource.';
    public const SCHEMA_EXAMPLE_DATA = '{"author_association":"generated_author_association","body":"generated_body","commit_id":"generated_commit_id","created_at":"generated_created_at","html_url":"generated_html_url","id":13,"line":13,"node_id":"generated_node_id","path":"generated_path","position":13,"reactions":{"_PLUSES_1":13,"_MINUS_1":13,"confused":13,"eyes":13,"heart":13,"hooray":13,"laugh":13,"rocket":13,"total_count":13,"url":"generated_url"},"updated_at":"generated_updated_at","url":"generated_url","user":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"}}';
    /**
     * How the author is associated with the repository.
     */
    public ?string $author_association;
    /**
     * The text of the comment.
     */
    public ?string $body;
    /**
     * The SHA of the commit to which the comment applies.
     */
    public ?string $commit_id;
    public ?string $created_at;
    public ?string $html_url;
    /**
     * The ID of the commit comment.
     */
    public ?int $id;
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    public ?int $line;
    /**
     * The node ID of the commit comment.
     */
    public ?string $node_id;
    /**
     * The relative path of the file to which the comment applies.
     */
    public ?string $path;
    /**
     * The line index in the diff to which the comment applies.
     */
    public ?int $position;
    public Schema\Discussion\Reactions $reactions;
    public ?string $updated_at;
    public ?string $url;
    public ?Schema\Discussion\AnswerChosenBy $user;
    public function __construct(string $author_association, string $body, string $commit_id, string $created_at, string $html_url, int $id, int $line, string $node_id, string $path, int $position, Schema\Discussion\Reactions $reactions, string $updated_at, string $url, Schema\Discussion\AnswerChosenBy $user)
    {
        $this->author_association = $author_association;
        $this->body = $body;
        $this->commit_id = $commit_id;
        $this->created_at = $created_at;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->line = $line;
        $this->node_id = $node_id;
        $this->path = $path;
        $this->position = $position;
        $this->reactions = $reactions;
        $this->updated_at = $updated_at;
        $this->url = $url;
        $this->user = $user;
    }
}
