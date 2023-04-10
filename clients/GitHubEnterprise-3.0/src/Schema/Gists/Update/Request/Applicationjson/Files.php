<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Gists\Update\Request\Applicationjson;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
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
