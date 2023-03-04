<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class SelectedActions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"github_owned_allowed":{"type":"boolean","description":"Whether GitHub-owned actions are allowed. For example, this includes the actions in the `actions` organization."},"verified_allowed":{"type":"boolean","description":"Whether actions from GitHub Marketplace verified creators are allowed. Set to `true` to allow all actions by GitHub Marketplace verified creators."},"patterns_allowed":{"type":"array","items":{"type":"string"},"description":"Specifies a list of string-matching patterns to allow specific action(s). Wildcards, tags, and SHAs are allowed. For example, `monalisa\\/octocat@*`, `monalisa\\/octocat@v2`, `monalisa\\/*`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"github_owned_allowed":false,"verified_allowed":false,"patterns_allowed":[null]}';
    /**
     * Whether GitHub-owned actions are allowed. For example, this includes the actions in the `actions` organization.
     */
    public ?bool $github_owned_allowed;
    /**
     * Whether actions from GitHub Marketplace verified creators are allowed. Set to `true` to allow all actions by GitHub Marketplace verified creators.
     */
    public ?bool $verified_allowed;
    /**
     * Specifies a list of string-matching patterns to allow specific action(s). Wildcards, tags, and SHAs are allowed. For example, `monalisa/octocat@*`, `monalisa/octocat@v2`, `monalisa/*`.
     * @var array<string>
     */
    public ?array $patterns_allowed;
    public function __construct(bool $github_owned_allowed, bool $verified_allowed, array $patterns_allowed)
    {
        $this->github_owned_allowed = $github_owned_allowed;
        $this->verified_allowed = $verified_allowed;
        $this->patterns_allowed = $patterns_allowed;
    }
}
