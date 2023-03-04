<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookPullRequestAssigned\PullRequest;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class AutoMerge
{
    public const SCHEMA_JSON = '{"title":"PullRequestAutoMerge","required":["enabled_by","merge_method","commit_title","commit_message"],"type":["object","null"],"properties":{"commit_message":{"type":["string","null"],"description":"Commit message for the merge commit."},"commit_title":{"type":["string","null"],"description":"Title for the merge commit message."},"enabled_by":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"merge_method":{"enum":["merge","squash","rebase"],"type":"string","description":"The merge method to use."}},"description":"The status of auto merging a pull request."}';
    public const SCHEMA_TITLE = 'PullRequestAutoMerge';
    public const SCHEMA_DESCRIPTION = 'The status of auto merging a pull request.';
    public const SCHEMA_EXAMPLE_DATA = '{"commit_message":"generated_commit_message","commit_title":"generated_commit_title","enabled_by":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"merge_method":"generated_merge_method"}';
    /**
     * Commit message for the merge commit.
     */
    public ?string $commit_message;
    /**
     * Title for the merge commit message.
     */
    public ?string $commit_title;
    public ?Schema\Discussion\AnswerChosenBy $enabled_by;
    /**
     * The merge method to use.
     */
    public ?string $merge_method;
    public function __construct(string $commit_message, string $commit_title, Schema\Discussion\AnswerChosenBy $enabled_by, string $merge_method)
    {
        $this->commit_message = $commit_message;
        $this->commit_title = $commit_title;
        $this->enabled_by = $enabled_by;
        $this->merge_method = $merge_method;
    }
}
