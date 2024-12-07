<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookInstallationRepositoriesAdded;

final readonly class RepositoriesRemoved implements \ApiClients\Client\GitHub\Contract\WebhookInstallationRepositoriesAdded\RepositoriesRemoved
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "full_name": {
            "type": "string"
        },
        "id": {
            "type": "integer",
            "description": "Unique identifier of the repository"
        },
        "name": {
            "type": "string",
            "description": "The name of the repository."
        },
        "node_id": {
            "type": "string"
        },
        "private": {
            "type": "boolean",
            "description": "Whether the repository is private or public."
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "full_name": "generated",
    "id": 2,
    "name": "generated",
    "node_id": "generated",
    "private": false
}';
    /**
     * id: Unique identifier of the repository
     * name: The name of the repository.
     * private: Whether the repository is private or public.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('full_name')] public ?string $fullName, public ?int $id, public ?string $name, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId, public ?bool $private)
    {
    }
}
