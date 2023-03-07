<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Pulls\Merge\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
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
     * commit_title: Title for the automatic commit message.
     * commit_message: Extra detail to append to automatic commit message.
     * sha: SHA that pull request head must match to allow merge.
     * merge_method: Merge method to use. Possible values are `merge`, `squash` or `rebase`. Default is `merge`.
     */
    public function __construct(public ?string $commit_title, public ?string $commit_message, public ?string $sha, public ?string $merge_method)
    {
    }
}
