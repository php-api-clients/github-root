<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T2DBED615\T76F45C59\TF4188D6A;

use ApiClients\Client\GitHub\Contract\Teams\CreateDiscussionCommentInOrg\Request\ApplicationJson;

abstract readonly class T2D5A4ED4 implements ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "body"
    ],
    "type": "object",
    "properties": {
        "body": {
            "type": "string",
            "description": "The discussion comment\'s body text."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "body": "generated"
}';

    /**
     * body: The discussion comment's body text.
     */
    public function __construct(public string $body)
    {
    }
}
