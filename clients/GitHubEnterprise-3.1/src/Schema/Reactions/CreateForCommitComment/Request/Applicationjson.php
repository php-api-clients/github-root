<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Reactions\CreateForCommitComment\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","-1","laugh","confused","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/reactions#reaction-types) to add to the commit comment."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"content":"+1"}';
    /**
     * content: The [reaction type](https://docs.github.com/enterprise-server@3.1/rest/reference/reactions#reaction-types) to add to the commit comment.
     */
    public function __construct(public string $content)
    {
    }
}
