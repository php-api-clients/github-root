<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok;

final readonly class Devcontainers implements \ApiClients\Client\GitHub\Contract\Operations\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok\Devcontainers
{
    const SCHEMA_JSON = '{
    "required": [
        "path"
    ],
    "type": "object",
    "properties": {
        "path": {
            "type": "string"
        },
        "name": {
            "type": "string"
        },
        "display_name": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "path": "generated",
    "name": "generated",
    "display_name": "generated"
}';
    public function __construct(public string $path, public ?string $name, #[\EventSauce\ObjectHydrator\MapFrom('display_name')] public ?string $displayName)
    {
    }
}
