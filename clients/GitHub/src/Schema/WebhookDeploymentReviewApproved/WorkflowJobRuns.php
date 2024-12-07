<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookDeploymentReviewApproved;

final readonly class WorkflowJobRuns implements \ApiClients\Client\GitHub\Contract\WebhookDeploymentReviewApproved\WorkflowJobRuns
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "conclusion": {
            "type": [
                "null"
            ]
        },
        "created_at": {
            "type": "string"
        },
        "environment": {
            "type": "string"
        },
        "html_url": {
            "type": "string"
        },
        "id": {
            "type": "integer"
        },
        "name": {
            "type": [
                "string",
                "null"
            ]
        },
        "status": {
            "type": "string"
        },
        "updated_at": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "conclusion": "generated",
    "created_at": "generated",
    "environment": "generated",
    "html_url": "generated",
    "id": 2,
    "name": "generated",
    "status": "generated",
    "updated_at": "generated"
}';
    public function __construct(public string $conclusion, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, public ?string $environment, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, public ?int $id, public ?string $name, public ?string $status, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public ?string $updatedAt)
    {
    }
}
