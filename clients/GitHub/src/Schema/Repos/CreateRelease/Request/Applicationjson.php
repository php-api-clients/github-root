<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\CreateRelease\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["tag_name"],"type":"object","properties":{"tag_name":{"type":"string","description":"The name of the tag."},"target_commitish":{"type":"string","description":"Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository\'s default branch (usually `master`)."},"name":{"type":"string","description":"The name of the release."},"body":{"type":"string","description":"Text describing the contents of the tag."},"draft":{"type":"boolean","description":"`true` to create a draft (unpublished) release, `false` to create a published one.","default":false},"prerelease":{"type":"boolean","description":"`true` to identify the release as a prerelease. `false` to identify the release as a full release.","default":false},"discussion_category_name":{"type":"string","description":"If specified, a discussion of the specified category is created and linked to the release. The value must be a category that already exists in the repository. For more information, see \\"[Managing categories for discussions in your repository](https:\\/\\/docs.github.com\\/discussions\\/managing-discussions-for-your-community\\/managing-categories-for-discussions-in-your-repository).\\""},"generate_release_notes":{"type":"boolean","description":"Whether to automatically generate the name and body for this release. If `name` is specified, the specified name will be used; otherwise, a name will be automatically generated. If `body` is specified, the body will be pre-pended to the automatically generated notes.","default":false},"make_latest":{"enum":["true","false","legacy"],"type":"string","description":"Specifies whether this release should be set as the latest release for the repository. Drafts and prereleases cannot be set as latest. Defaults to `true` for newly published releases. `legacy` specifies that the latest release should be determined based on the release creation date and higher semantic version.","default":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"tag_name":"generated_tag_name","target_commitish":"generated_target_commitish","name":"generated_name","body":"generated_body","draft":false,"prerelease":false,"discussion_category_name":"generated_discussion_category_name","generate_release_notes":false,"make_latest":"generated_make_latest"}';
    /**
     * tag_name: The name of the tag.
     * target_commitish: Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository's default branch (usually `master`).
     * name: The name of the release.
     * body: Text describing the contents of the tag.
     * draft: `true` to create a draft (unpublished) release, `false` to create a published one.
     * prerelease: `true` to identify the release as a prerelease. `false` to identify the release as a full release.
     * discussion_category_name: If specified, a discussion of the specified category is created and linked to the release. The value must be a category that already exists in the repository. For more information, see "[Managing categories for discussions in your repository](https://docs.github.com/discussions/managing-discussions-for-your-community/managing-categories-for-discussions-in-your-repository)."
     * generate_release_notes: Whether to automatically generate the name and body for this release. If `name` is specified, the specified name will be used; otherwise, a name will be automatically generated. If `body` is specified, the body will be pre-pended to the automatically generated notes.
     * make_latest: Specifies whether this release should be set as the latest release for the repository. Drafts and prereleases cannot be set as latest. Defaults to `true` for newly published releases. `legacy` specifies that the latest release should be determined based on the release creation date and higher semantic version.
     */
    public function __construct(public string $tag_name, public ?string $target_commitish, public ?string $name, public ?string $body, public ?bool $draft, public ?bool $prerelease, public ?string $discussion_category_name, public ?bool $generate_release_notes, public ?string $make_latest)
    {
    }
}
