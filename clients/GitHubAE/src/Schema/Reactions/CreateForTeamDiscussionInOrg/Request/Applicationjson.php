<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Reactions\CreateForTeamDiscussionInOrg\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","-1","laugh","confused","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/reactions#reaction-types) to add to the team discussion."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"content":"+1"}';
    /**
     * content: The [reaction type](https://docs.github.com/github-ae@latest/rest/reference/reactions#reaction-types) to add to the team discussion.
     */
    public function __construct(public string $content)
    {
    }
}
