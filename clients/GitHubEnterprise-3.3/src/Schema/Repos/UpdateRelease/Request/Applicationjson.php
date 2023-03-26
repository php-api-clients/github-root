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
    public const SCHEMA_EXAMPLE_DATA = '{"tag_name":"generated_tag_name_null","target_commitish":"generated_target_commitish_null","name":"generated_name_null","body":"generated_body_null","draft":false,"prerelease":false}';
    /**
     * tagName: The name of the tag.
     * targetCommitish: Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository's default branch (usually `master`).
     * name: The name of the release.
     * body: Text describing the contents of the tag.
     * draft: `true` makes the release a draft, and `false` publishes the release.
     * prerelease: `true` to identify the release as a prerelease, `false` to identify the release as a full release.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('tag_name')] public ?string $tagName, #[\EventSauce\ObjectHydrator\MapFrom('target_commitish')] public ?string $targetCommitish, public ?string $name, public ?string $body, public ?bool $draft, public ?bool $prerelease)
    {
    }
}
