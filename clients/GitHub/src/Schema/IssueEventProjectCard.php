<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class IssueEventProjectCard implements \ApiClients\Client\GitHub\Contract\IssueEventProjectCard
{
    const SCHEMA_JSON = '{
    "title": "Issue Event Project Card",
    "required": [
        "url",
        "id",
        "project_url",
        "project_id",
        "column_name"
    ],
    "type": "object",
    "properties": {
        "url": {
            "type": "string",
            "format": "uri"
        },
        "id": {
            "type": "integer"
        },
        "project_url": {
            "type": "string",
            "format": "uri"
        },
        "project_id": {
            "type": "integer"
        },
        "column_name": {
            "type": "string"
        },
        "previous_column_name": {
            "type": "string"
        }
    },
    "description": "Issue Event Project Card"
}';
    public const SCHEMA_TITLE = 'Issue Event Project Card';
    public const SCHEMA_DESCRIPTION = 'Issue Event Project Card';
    const SCHEMA_EXAMPLE_DATA = '{
    "url": "https:\\/\\/example.com\\/",
    "id": 2,
    "project_url": "https:\\/\\/example.com\\/",
    "project_id": 10,
    "column_name": "generated",
    "previous_column_name": "generated"
}';
    public function __construct(public string $url, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('project_url')] public string $projectUrl, #[\EventSauce\ObjectHydrator\MapFrom('project_id')] public int $projectId, #[\EventSauce\ObjectHydrator\MapFrom('column_name')] public string $columnName, #[\EventSauce\ObjectHydrator\MapFrom('previous_column_name')] public ?string $previousColumnName)
    {
    }
}
