<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class SelectedActions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"github_owned_allowed":{"type":"boolean","description":"Whether GitHub-owned actions are allowed. For example, this includes the actions in the `actions` organization."},"verified_allowed":{"type":"boolean","description":"Whether actions from GitHub Marketplace verified creators are allowed. Set to `true` to allow all actions by GitHub Marketplace verified creators."},"patterns_allowed":{"type":"array","items":{"type":"string"},"description":"Specifies a list of string-matching patterns to allow specific action(s) and reusable workflow(s). Wildcards, tags, and SHAs are allowed. For example, `monalisa\\/octocat@*`, `monalisa\\/octocat@v2`, `monalisa\\/*`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"github_owned_allowed":false,"verified_allowed":false,"patterns_allowed":["generated_patterns_allowed"]}';
    /**
     * github_owned_allowed: Whether GitHub-owned actions are allowed. For example, this includes the actions in the `actions` organization.
     * verified_allowed: Whether actions from GitHub Marketplace verified creators are allowed. Set to `true` to allow all actions by GitHub Marketplace verified creators.
     * patterns_allowed: Specifies a list of string-matching patterns to allow specific action(s) and reusable workflow(s). Wildcards, tags, and SHAs are allowed. For example, `monalisa/octocat@*`, `monalisa/octocat@v2`, `monalisa/*`.
     * @param ?array<string> $patterns_allowed
     */
    public function __construct(public ?bool $github_owned_allowed, public ?bool $verified_allowed, public ?array $patterns_allowed)
    {
    }
}
