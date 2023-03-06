<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Pulls\Merge\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"commit_title":{"type":"string","description":"Title for the automatic commit message."},"commit_message":{"type":"string","description":"Extra detail to append to automatic commit message."},"sha":{"type":"string","description":"SHA that pull request head must match to allow merge."},"merge_method":{"enum":["merge","squash","rebase"],"type":"string","description":"The merge method to use."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"commit_title":"generated_commit_title","commit_message":"generated_commit_message","sha":"generated_sha","merge_method":"generated_merge_method"}';
    /**
     * commit_title: Title for the automatic commit message.
     * commit_message: Extra detail to append to automatic commit message.
     * sha: SHA that pull request head must match to allow merge.
     * merge_method: The merge method to use.
     */
    public function __construct(public ?string $commit_title, public ?string $commit_message, public ?string $sha, public ?string $merge_method)
    {
    }
}
