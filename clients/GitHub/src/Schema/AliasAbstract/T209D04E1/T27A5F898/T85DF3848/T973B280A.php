<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T209D04E1\T27A5F898\T85DF3848;

abstract readonly class T973B280A implements \ApiClients\Client\GitHub\Contract\AddedToProjectIssueEvent\ProjectCard
{
    const SCHEMA_JSON = '{
    "required": [
        "id",
        "url",
        "project_id",
        "project_url",
        "column_name"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer"
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "project_id": {
            "type": "integer"
        },
        "project_url": {
            "type": "string",
            "format": "uri"
        },
        "column_name": {
            "type": "string"
        },
        "previous_column_name": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "url": "https:\\/\\/example.com\\/",
    "project_id": 10,
    "project_url": "https:\\/\\/example.com\\/",
    "column_name": "generated",
    "previous_column_name": "generated"
}';
    public function __construct(public int $id, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('project_id')] public int $projectId, #[\EventSauce\ObjectHydrator\MapFrom('project_url')] public string $projectUrl, #[\EventSauce\ObjectHydrator\MapFrom('column_name')] public string $columnName, #[\EventSauce\ObjectHydrator\MapFrom('previous_column_name')] public ?string $previousColumnName)
    {
    }
}
