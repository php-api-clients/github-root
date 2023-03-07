<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Gists\Update\Request\Applicationjson;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Files
{
    public const SCHEMA_JSON = '{"type":"object","description":"Names of files to be updated","additionalProperties":{"type":["object","null"],"anyOf":[{"required":["content"]},{"required":["filename"]},{"maxProperties":0,"type":"object"}],"properties":{"content":{"type":"string","description":"The new content of the file"},"filename":{"type":["string","null"],"description":"The new filename for the file"}}},"examples":[{"hello.rb":{"content":"blah","filename":"goodbye.rb"}}]}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Names of files to be updated';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
