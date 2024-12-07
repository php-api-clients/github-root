<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class GitUser implements \ApiClients\Client\GitHub\Contract\GitUser
{
    public const SCHEMA_JSON         = '{
    "title": "Git User",
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "examples": [
                "\\"Chris Wanstrath\\""
            ]
        },
        "email": {
            "type": "string",
            "examples": [
                "\\"chris@ozmm.org\\""
            ]
        },
        "date": {
            "type": "string",
            "examples": [
                "\\"2007-10-29T02:42:39.000-07:00\\""
            ]
        }
    },
    "description": "Metaproperties for Git author\\/committer information."
}';
    public const SCHEMA_TITLE        = 'Git User';
    public const SCHEMA_DESCRIPTION  = 'Metaproperties for Git author/committer information.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "email": "generated",
    "date": "generated"
}';

    public function __construct(public string|null $name, public string|null $email, public string|null $date)
    {
    }
}
