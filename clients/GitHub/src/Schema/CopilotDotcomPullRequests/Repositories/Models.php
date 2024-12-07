<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\CopilotDotcomPullRequests\Repositories;

final readonly class Models implements \ApiClients\Client\GitHub\Contract\CopilotDotcomPullRequests\Repositories\Models
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "Name of the model used for Copilot code completion suggestions. If the default model is used will appear as \'default\'."
        },
        "is_custom_model": {
            "type": "boolean",
            "description": "Indicates whether a model is custom or default."
        },
        "custom_model_training_date": {
            "type": [
                "string",
                "null"
            ],
            "description": "The training date for the custom model."
        },
        "total_pr_summaries_created": {
            "type": "integer",
            "description": "The number of pull request summaries generated using Copilot for Pull Requests in the given repository."
        },
        "total_engaged_users": {
            "type": "integer",
            "description": "The number of users who generated pull request summaries using Copilot for Pull Requests in the given repository and model."
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "is_custom_model": false,
    "custom_model_training_date": "generated",
    "total_pr_summaries_created": 26,
    "total_engaged_users": 19
}';
    /**
     * name: Name of the model used for Copilot code completion suggestions. If the default model is used will appear as 'default'.
     * isCustomModel: Indicates whether a model is custom or default.
     * customModelTrainingDate: The training date for the custom model.
     * totalPrSummariesCreated: The number of pull request summaries generated using Copilot for Pull Requests in the given repository.
     * totalEngagedUsers: The number of users who generated pull request summaries using Copilot for Pull Requests in the given repository and model.
     */
    public function __construct(public ?string $name, #[\EventSauce\ObjectHydrator\MapFrom('is_custom_model')] public ?bool $isCustomModel, #[\EventSauce\ObjectHydrator\MapFrom('custom_model_training_date')] public ?string $customModelTrainingDate, #[\EventSauce\ObjectHydrator\MapFrom('total_pr_summaries_created')] public ?int $totalPrSummariesCreated, #[\EventSauce\ObjectHydrator\MapFrom('total_engaged_users')] public ?int $totalEngagedUsers)
    {
    }
}
