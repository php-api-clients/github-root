<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\RenameBranch\Request;

final readonly class ApplicationJson implements \ApiClients\Client\GitHub\Contract\Repos\RenameBranch\Request\ApplicationJson
{
    const SCHEMA_JSON = '{
    "required": [
        "new_name"
    ],
    "type": "object",
    "properties": {
        "new_name": {
            "type": "string",
            "description": "The new name of the branch."
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "new_name": "generated"
}';
    /**
     * newName: The new name of the branch.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('new_name')] public string $newName)
    {
    }
}
