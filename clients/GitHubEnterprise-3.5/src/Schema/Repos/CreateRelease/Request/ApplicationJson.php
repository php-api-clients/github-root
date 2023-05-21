<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\CreateRelease\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["tag_name"],"type":"object","properties":{"tag_name":{"type":"string","description":"The name of the tag."},"target_commitish":{"type":"string","description":"Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository\'s default branch."},"name":{"type":"string","description":"The name of the release."},"body":{"type":"string","description":"Text describing the contents of the tag."},"draft":{"type":"boolean","description":"`true` to create a draft (unpublished) release, `false` to create a published one.","default":false},"prerelease":{"type":"boolean","description":"`true` to identify the release as a prerelease. `false` to identify the release as a full release.","default":false},"generate_release_notes":{"type":"boolean","description":"Whether to automatically generate the name and body for this release. If `name` is specified, the specified name will be used; otherwise, a name will be automatically generated. If `body` is specified, the body will be pre-pended to the automatically generated notes.","default":false}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"tag_name":"generated","target_commitish":"generated","name":"generated","body":"generated","draft":false,"prerelease":false,"generate_release_notes":false}';

    /**
     * tagName: The name of the tag.
     * targetCommitish: Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository's default branch.
     * name: The name of the release.
     * body: Text describing the contents of the tag.
     * draft: `true` to create a draft (unpublished) release, `false` to create a published one.
     * prerelease: `true` to identify the release as a prerelease. `false` to identify the release as a full release.
     * generateReleaseNotes: Whether to automatically generate the name and body for this release. If `name` is specified, the specified name will be used; otherwise, a name will be automatically generated. If `body` is specified, the body will be pre-pended to the automatically generated notes.
     */
    public function __construct(#[MapFrom('tag_name')] public string $tagName, #[MapFrom('target_commitish')] public ?string $targetCommitish, public ?string $name, public ?string $body, public ?bool $draft, public ?bool $prerelease, #[MapFrom('generate_release_notes')] public ?bool $generateReleaseNotes)
    {
    }
}
