<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\DeleteFile\Request\ApplicationJson;

final readonly class Committer
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the author (or committer) of the commit"
        },
        "email": {
            "type": "string",
            "description": "The email of the author (or committer) of the commit"
        }
    },
    "description": "object containing information about the committer."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'object containing information about the committer.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "email": "generated"
}';

    /**
     * name: The name of the author (or committer) of the commit
     * email: The email of the author (or committer) of the commit
     */
    public function __construct(public string|null $name, public string|null $email)
    {
    }
}
