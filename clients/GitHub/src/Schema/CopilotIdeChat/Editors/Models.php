<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\CopilotIdeChat\Editors;

final readonly class Models implements \ApiClients\Client\GitHub\Contract\CopilotIdeChat\Editors\Models
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
        "total_engaged_users": {
            "type": "integer",
            "description": "The number of users who prompted Copilot Chat in the given editor and model."
        },
        "total_chats": {
            "type": "integer",
            "description": "The total number of chats initiated by users in the given editor and model."
        },
        "total_chat_insertion_events": {
            "type": "integer",
            "description": "The number of times users accepted a code suggestion from Copilot Chat using the \'Insert Code\' UI element, for the given editor."
        },
        "total_chat_copy_events": {
            "type": "integer",
            "description": "The number of times users copied a code suggestion from Copilot Chat using the keyboard, or the \'Copy\' UI element, for the given editor."
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "is_custom_model": false,
    "custom_model_training_date": "generated",
    "total_engaged_users": 19,
    "total_chats": 11,
    "total_chat_insertion_events": 27,
    "total_chat_copy_events": 22
}';
    /**
     * name: Name of the model used for Copilot code completion suggestions. If the default model is used will appear as 'default'.
     * isCustomModel: Indicates whether a model is custom or default.
     * customModelTrainingDate: The training date for the custom model.
     * totalEngagedUsers: The number of users who prompted Copilot Chat in the given editor and model.
     * totalChats: The total number of chats initiated by users in the given editor and model.
     * totalChatInsertionEvents: The number of times users accepted a code suggestion from Copilot Chat using the 'Insert Code' UI element, for the given editor.
     * totalChatCopyEvents: The number of times users copied a code suggestion from Copilot Chat using the keyboard, or the 'Copy' UI element, for the given editor.
     */
    public function __construct(public ?string $name, #[\EventSauce\ObjectHydrator\MapFrom('is_custom_model')] public ?bool $isCustomModel, #[\EventSauce\ObjectHydrator\MapFrom('custom_model_training_date')] public ?string $customModelTrainingDate, #[\EventSauce\ObjectHydrator\MapFrom('total_engaged_users')] public ?int $totalEngagedUsers, #[\EventSauce\ObjectHydrator\MapFrom('total_chats')] public ?int $totalChats, #[\EventSauce\ObjectHydrator\MapFrom('total_chat_insertion_events')] public ?int $totalChatInsertionEvents, #[\EventSauce\ObjectHydrator\MapFrom('total_chat_copy_events')] public ?int $totalChatCopyEvents)
    {
    }
}
