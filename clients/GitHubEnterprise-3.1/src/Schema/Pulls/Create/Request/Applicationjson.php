<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Pulls\Create\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["head","base"],"type":"object","properties":{"title":{"type":"string","description":"The title of the new pull request."},"head":{"type":"string","description":"The name of the branch where your changes are implemented. For cross-repository pull requests in the same network, namespace `head` with a user like this: `username:branch`."},"base":{"type":"string","description":"The name of the branch you want the changes pulled into. This should be an existing branch on the current repository. You cannot submit a pull request to one repository that requests a merge to a base of another repository."},"body":{"type":"string","description":"The contents of the pull request."},"maintainer_can_modify":{"type":"boolean","description":"Indicates whether [maintainers can modify](https:\\/\\/docs.github.com\\/articles\\/allowing-changes-to-a-pull-request-branch-created-from-a-fork\\/) the pull request."},"draft":{"type":"boolean","description":"Indicates whether the pull request is a draft. See \\"[Draft Pull Requests](https:\\/\\/docs.github.com\\/en\\/articles\\/about-pull-requests#draft-pull-requests)\\" in the GitHub Help documentation to learn more."},"issue":{"type":"integer","examples":[1]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated_title","head":"generated_head","base":"generated_base","body":"generated_body","maintainer_can_modify":false,"draft":false,"issue":1}';
    /**
     * title: The title of the new pull request.
     * head: The name of the branch where your changes are implemented. For cross-repository pull requests in the same network, namespace `head` with a user like this: `username:branch`.
     * base: The name of the branch you want the changes pulled into. This should be an existing branch on the current repository. You cannot submit a pull request to one repository that requests a merge to a base of another repository.
     * body: The contents of the pull request.
     * maintainer_can_modify: Indicates whether [maintainers can modify](https://docs.github.com/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     * draft: Indicates whether the pull request is a draft. See "[Draft Pull Requests](https://docs.github.com/en/articles/about-pull-requests#draft-pull-requests)" in the GitHub Help documentation to learn more.
     */
    public function __construct(public ?string $title, public string $head, public string $base, public ?string $body, public ?bool $maintainer_can_modify, public ?bool $draft, public ?int $issue)
    {
    }
}
