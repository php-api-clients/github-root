<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\UpdateRelease\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "tag_name": {
            "type": "string",
            "description": "The name of the tag."
        },
        "target_commitish": {
            "type": "string",
            "description": "Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository\'s default branch."
        },
        "name": {
            "type": "string",
            "description": "The name of the release."
        },
        "body": {
            "type": "string",
            "description": "Text describing the contents of the tag."
        },
        "draft": {
            "type": "boolean",
            "description": "`true` makes the release a draft, and `false` publishes the release."
        },
        "prerelease": {
            "type": "boolean",
            "description": "`true` to identify the release as a prerelease, `false` to identify the release as a full release."
        },
        "make_latest": {
            "enum": [
                "true",
                "false",
                "legacy"
            ],
            "type": "string",
            "description": "Specifies whether this release should be set as the latest release for the repository. Drafts and prereleases cannot be set as latest. Defaults to `true` for newly published releases. `legacy` specifies that the latest release should be determined based on the release creation date and higher semantic version.",
            "default": true
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "tag_name": "generated",
    "target_commitish": "generated",
    "name": "generated",
    "body": "generated",
    "draft": false,
    "prerelease": false,
    "make_latest": "true"
}';

    /**
     * tagName: The name of the tag.
     * targetCommitish: Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository's default branch.
     * name: The name of the release.
     * body: Text describing the contents of the tag.
     * draft: `true` makes the release a draft, and `false` publishes the release.
     * prerelease: `true` to identify the release as a prerelease, `false` to identify the release as a full release.
     * makeLatest: Specifies whether this release should be set as the latest release for the repository. Drafts and prereleases cannot be set as latest. Defaults to `true` for newly published releases. `legacy` specifies that the latest release should be determined based on the release creation date and higher semantic version.
     */
    public function __construct(#[MapFrom('tag_name')]
    public string|null $tagName, #[MapFrom('target_commitish')]
    public string|null $targetCommitish, public string|null $name, public string|null $body, public bool|null $draft, public bool|null $prerelease, #[MapFrom('make_latest')]
    public string|null $makeLatest,)
    {
    }
}
