<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Gists\Update\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "description": {
            "type": "string",
            "description": "The description of the gist.",
            "examples": [
                "Example Ruby script"
            ]
        },
        "files": {
            "type": "object",
            "description": "The gist files to be updated, renamed, or deleted. Each `key` must match the current filename\\n(including extension) of the targeted gist file. For example: `hello.py`.\\n\\nTo delete a file, set the whole file to null. For example: `hello.py : null`. The file will also be\\ndeleted if the specified object does not contain at least one of `content` or `filename`.",
            "additionalProperties": {
                "type": [
                    "object",
                    "null"
                ],
                "properties": {
                    "content": {
                        "type": "string",
                        "description": "The new content of the file."
                    },
                    "filename": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "The new filename for the file."
                    }
                }
            },
            "examples": [
                {
                    "hello.rb": {
                        "content": "blah",
                        "filename": "goodbye.rb"
                    }
                }
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "description": "Example Ruby script",
    "files": {
        "hello.rb": {
            "content": "blah",
            "filename": "goodbye.rb"
        }
    }
}';

    /**
     * description: The description of the gist.
     * files: The gist files to be updated, renamed, or deleted. Each `key` must match the current filename
    (including extension) of the targeted gist file. For example: `hello.py`.

    To delete a file, set the whole file to null. For example: `hello.py : null`. The file will also be
    deleted if the specified object does not contain at least one of `content` or `filename`.
     */
    public function __construct(public string|null $description, public Schema\Gists\Update\Request\ApplicationJson\Files|null $files)
    {
    }
}
