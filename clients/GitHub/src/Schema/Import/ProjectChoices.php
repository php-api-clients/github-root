<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Import;

final readonly class ProjectChoices implements \ApiClients\Client\GitHub\Contract\Import\ProjectChoices
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "vcs": {
            "type": "string"
        },
        "tfvc_project": {
            "type": "string"
        },
        "human_name": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "vcs": "generated",
    "tfvc_project": "generated",
    "human_name": "generated"
}';
    public function __construct(public ?string $vcs, #[\EventSauce\ObjectHydrator\MapFrom('tfvc_project')] public ?string $tfvcProject, #[\EventSauce\ObjectHydrator\MapFrom('human_name')] public ?string $humanName)
    {
    }
}
