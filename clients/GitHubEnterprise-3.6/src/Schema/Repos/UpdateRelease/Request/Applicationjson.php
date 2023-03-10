<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\UpdateRelease\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"tag_name":{"type":"string","description":"The name of the tag."},"target_commitish":{"type":"string","description":"Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository\'s default branch (usually `master`)."},"name":{"type":"string","description":"The name of the release."},"body":{"type":"string","description":"Text describing the contents of the tag."},"draft":{"type":"boolean","description":"`true` makes the release a draft, and `false` publishes the release."},"prerelease":{"type":"boolean","description":"`true` to identify the release as a prerelease, `false` to identify the release as a full release."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"tag_name":"generated_tag_name","target_commitish":"generated_target_commitish","name":"generated_name","body":"generated_body","draft":false,"prerelease":false}';
    /**
     * tag_name: The name of the tag.
     * target_commitish: Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository's default branch (usually `master`).
     * name: The name of the release.
     * body: Text describing the contents of the tag.
     * draft: `true` makes the release a draft, and `false` publishes the release.
     * prerelease: `true` to identify the release as a prerelease, `false` to identify the release as a full release.
     */
    public function __construct(public ?string $tag_name, public ?string $target_commitish, public ?string $name, public ?string $body, public ?bool $draft, public ?bool $prerelease)
    {
    }
}
