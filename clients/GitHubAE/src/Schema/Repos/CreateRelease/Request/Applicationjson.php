<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Repos\CreateRelease\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["tag_name"],"type":"object","properties":{"tag_name":{"type":"string","description":"The name of the tag."},"target_commitish":{"type":"string","description":"Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository\'s default branch (usually `master`)."},"name":{"type":"string","description":"The name of the release."},"body":{"type":"string","description":"Text describing the contents of the tag."},"draft":{"type":"boolean","description":"`true` to create a draft (unpublished) release, `false` to create a published one.","default":false},"prerelease":{"type":"boolean","description":"`true` to identify the release as a prerelease. `false` to identify the release as a full release.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"tag_name":"generated_tag_name","target_commitish":"generated_target_commitish","name":"generated_name","body":"generated_body","draft":false,"prerelease":false}';
    /**
     * The name of the tag.
     */
    public ?string $tag_name;
    /**
     * Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository's default branch (usually `master`).
     */
    public string $target_commitish;
    /**
     * The name of the release.
     */
    public string $name;
    /**
     * Text describing the contents of the tag.
     */
    public string $body;
    /**
     * `true` to create a draft (unpublished) release, `false` to create a published one.
     */
    public bool $draft;
    /**
     * `true` to identify the release as a prerelease. `false` to identify the release as a full release.
     */
    public bool $prerelease;
    public function __construct(string $tag_name, string $target_commitish, string $name, string $body, bool $draft, bool $prerelease)
    {
        $this->tag_name = $tag_name;
        $this->target_commitish = $target_commitish;
        $this->name = $name;
        $this->body = $body;
        $this->draft = $draft;
        $this->prerelease = $prerelease;
    }
}
