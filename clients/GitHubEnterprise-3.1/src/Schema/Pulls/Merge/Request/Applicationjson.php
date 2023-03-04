<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Pulls\Merge\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"commit_title":{"type":"string","description":"Title for the automatic commit message."},"commit_message":{"type":"string","description":"Extra detail to append to automatic commit message."},"sha":{"type":"string","description":"SHA that pull request head must match to allow merge."},"merge_method":{"enum":["merge","squash","rebase"],"type":"string","description":"Merge method to use. Possible values are `merge`, `squash` or `rebase`. Default is `merge`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"commit_title":"generated_commit_title","commit_message":"generated_commit_message","sha":"generated_sha","merge_method":"generated_merge_method"}';
    /**
     * Title for the automatic commit message.
     */
    public ?string $commit_title;
    /**
     * Extra detail to append to automatic commit message.
     */
    public ?string $commit_message;
    /**
     * SHA that pull request head must match to allow merge.
     */
    public ?string $sha;
    /**
     * Merge method to use. Possible values are `merge`, `squash` or `rebase`. Default is `merge`.
     */
    public ?string $merge_method;
    public function __construct(string $commit_title, string $commit_message, string $sha, string $merge_method)
    {
        $this->commit_title = $commit_title;
        $this->commit_message = $commit_message;
        $this->sha = $sha;
        $this->merge_method = $merge_method;
    }
}
