<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\BranchRestrictionPolicy\Apps;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Permissions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"metadata":{"type":"string"},"contents":{"type":"string"},"issues":{"type":"string"},"single_file":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"metadata":"generated_metadata","contents":"generated_contents","issues":"generated_issues","single_file":"generated_single_file"}';
    public ?string $metadata;
    public ?string $contents;
    public ?string $issues;
    public ?string $single_file;
    public function __construct(string $metadata, string $contents, string $issues, string $single_file)
    {
        $this->metadata = $metadata;
        $this->contents = $contents;
        $this->issues = $issues;
        $this->single_file = $single_file;
    }
}
