<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Gists\Update\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"anyOf":[{"required":["description"]},{"required":["files"]}],"properties":{"description":{"type":"string","description":"Description of the gist","examples":["Example Ruby script"]},"files":{"type":"object","description":"Names of files to be updated","additionalProperties":{"type":["object","null"],"anyOf":[{"required":["content"]},{"required":["filename"]},{"maxProperties":0,"type":"object"}],"properties":{"content":{"type":"string","description":"The new content of the file"},"filename":{"type":["string","null"],"description":"The new filename for the file"}}},"examples":[{"hello.rb":{"content":"blah","filename":"goodbye.rb"}}]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"description":"Example Ruby script","files":{"hello.rb":{"content":"blah","filename":"goodbye.rb"}}}';

    /**
     * description: Description of the gist
     * files: Names of files to be updated
     */
    public function __construct(public ?string $description, public string $files)
    {
    }
}
