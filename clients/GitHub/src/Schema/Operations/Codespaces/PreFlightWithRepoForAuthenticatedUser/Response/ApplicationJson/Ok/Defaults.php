<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operations\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\ApplicationJson\Ok;

final readonly class Defaults implements \ApiClients\Client\GitHub\Contract\Operations\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\ApplicationJson\Ok\Defaults
{
    const SCHEMA_JSON = '{
    "required": [
        "location",
        "devcontainer_path"
    ],
    "type": "object",
    "properties": {
        "location": {
            "type": "string"
        },
        "devcontainer_path": {
            "type": [
                "string",
                "null"
            ]
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "location": "generated",
    "devcontainer_path": "generated"
}';
    public function __construct(public string $location, #[\EventSauce\ObjectHydrator\MapFrom('devcontainer_path')] public ?string $devcontainerPath)
    {
    }
}
