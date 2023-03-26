<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class SelectedActions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"github_owned_allowed":{"type":"boolean","description":"Whether GitHub-owned actions are allowed. For example, this includes the actions in the `actions` organization."},"verified_allowed":{"type":"boolean","description":"Whether actions from GitHub Marketplace verified creators are allowed. Set to `true` to allow all actions by GitHub Marketplace verified creators."},"patterns_allowed":{"type":"array","items":{"type":"string"},"description":"Specifies a list of string-matching patterns to allow specific action(s). Wildcards, tags, and SHAs are allowed. For example, `monalisa\\/octocat@*`, `monalisa\\/octocat@v2`, `monalisa\\/*`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"github_owned_allowed":false,"verified_allowed":false,"patterns_allowed":["generated_patterns_allowed_null"]}';
    /**
     * githubOwnedAllowed: Whether GitHub-owned actions are allowed. For example, this includes the actions in the `actions` organization.
     * verifiedAllowed: Whether actions from GitHub Marketplace verified creators are allowed. Set to `true` to allow all actions by GitHub Marketplace verified creators.
     * patternsAllowed: Specifies a list of string-matching patterns to allow specific action(s). Wildcards, tags, and SHAs are allowed. For example, `monalisa/octocat@*`, `monalisa/octocat@v2`, `monalisa/*`.
     * @param ?array<string> $patternsAllowed
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('github_owned_allowed')] public ?bool $githubOwnedAllowed, #[\EventSauce\ObjectHydrator\MapFrom('verified_allowed')] public ?bool $verifiedAllowed, #[\EventSauce\ObjectHydrator\MapFrom('patterns_allowed')] public ?array $patternsAllowed)
    {
    }
}
