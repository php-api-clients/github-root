<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\CreatePagesSite\Request;

use ApiClients\Client\GitHubEnterprise\Schema;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "source"
    ],
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "source": {
            "required": [
                "branch"
            ],
            "type": "object",
            "properties": {
                "branch": {
                    "type": "string",
                    "description": "The repository branch used to publish your site\'s source files."
                },
                "path": {
                    "enum": [
                        "\\/",
                        "\\/docs"
                    ],
                    "type": "string",
                    "description": "The repository directory that includes the source files for the Pages site. Allowed paths are `\\/` or `\\/docs`. Default: `\\/`",
                    "default": "\\/"
                }
            },
            "description": "The source branch and directory used to publish your Pages site."
        }
    },
    "description": "The source branch and directory used to publish your Pages site."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The source branch and directory used to publish your Pages site.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "source": {
        "branch": "generated",
        "path": "\\/docs"
    }
}';

    /**
     * source: The source branch and directory used to publish your Pages site.
     */
    public function __construct(public Schema\Repos\CreatePagesSite\Request\ApplicationJson\Source $source)
    {
    }
}
