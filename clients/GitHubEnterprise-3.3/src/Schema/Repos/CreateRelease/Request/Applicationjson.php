<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\CreateRelease\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["tag_name"],"type":"object","properties":{"tag_name":{"type":"string","description":"The name of the tag."},"target_commitish":{"type":"string","description":"Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository\'s default branch (usually `master`)."},"name":{"type":"string","description":"The name of the release."},"body":{"type":"string","description":"Text describing the contents of the tag."},"draft":{"type":"boolean","description":"`true` to create a draft (unpublished) release, `false` to create a published one.","default":false},"prerelease":{"type":"boolean","description":"`true` to identify the release as a prerelease. `false` to identify the release as a full release.","default":false},"generate_release_notes":{"type":"boolean","description":"Whether to automatically generate the name and body for this release. If `name` is specified, the specified name will be used; otherwise, a name will be automatically generated. If `body` is specified, the body will be pre-pended to the automatically generated notes.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"tag_name":"generated_tag_name","target_commitish":"generated_target_commitish","name":"generated_name","body":"generated_body","draft":false,"prerelease":false,"generate_release_notes":false}';
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
    /**
     * Whether to automatically generate the name and body for this release. If `name` is specified, the specified name will be used; otherwise, a name will be automatically generated. If `body` is specified, the body will be pre-pended to the automatically generated notes.
     */
    public bool $generate_release_notes;
    public function __construct(string $tag_name, string $target_commitish, string $name, string $body, bool $draft, bool $prerelease, bool $generate_release_notes)
    {
        $this->tag_name = $tag_name;
        $this->target_commitish = $target_commitish;
        $this->name = $name;
        $this->body = $body;
        $this->draft = $draft;
        $this->prerelease = $prerelease;
        $this->generate_release_notes = $generate_release_notes;
    }
}
