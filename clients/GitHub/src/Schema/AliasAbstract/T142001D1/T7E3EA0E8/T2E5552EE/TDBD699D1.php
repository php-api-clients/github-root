<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T142001D1\T7E3EA0E8\T2E5552EE;

abstract readonly class TDBD699D1 implements \ApiClients\Client\GitHub\Contract\Codespace\GitStatus
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "ahead": {
            "type": "integer",
            "description": "The number of commits the local repository is ahead of the remote.",
            "examples": [
                0
            ]
        },
        "behind": {
            "type": "integer",
            "description": "The number of commits the local repository is behind the remote.",
            "examples": [
                0
            ]
        },
        "has_unpushed_changes": {
            "type": "boolean",
            "description": "Whether the local repository has unpushed changes."
        },
        "has_uncommitted_changes": {
            "type": "boolean",
            "description": "Whether the local repository has uncommitted changes."
        },
        "ref": {
            "type": "string",
            "description": "The current branch (or SHA if in detached HEAD state) of the local repository.",
            "examples": [
                "main"
            ]
        }
    },
    "description": "Details about the codespace\'s git repository."
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Details about the codespace\'s git repository.';
    const SCHEMA_EXAMPLE_DATA = '{
    "ahead": 5,
    "behind": 6,
    "has_unpushed_changes": false,
    "has_uncommitted_changes": false,
    "ref": "generated"
}';
    /**
     * ahead: The number of commits the local repository is ahead of the remote.
     * behind: The number of commits the local repository is behind the remote.
     * hasUnpushedChanges: Whether the local repository has unpushed changes.
     * hasUncommittedChanges: Whether the local repository has uncommitted changes.
     * ref: The current branch (or SHA if in detached HEAD state) of the local repository.
     */
    public function __construct(public ?int $ahead, public ?int $behind, #[\EventSauce\ObjectHydrator\MapFrom('has_unpushed_changes')] public ?bool $hasUnpushedChanges, #[\EventSauce\ObjectHydrator\MapFrom('has_uncommitted_changes')] public ?bool $hasUncommittedChanges, public ?string $ref)
    {
    }
}
