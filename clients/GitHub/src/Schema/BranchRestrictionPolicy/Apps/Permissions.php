<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps;

final readonly class Permissions implements \ApiClients\Client\GitHub\Contract\BranchRestrictionPolicy\Apps\Permissions
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "metadata": {
            "type": "string"
        },
        "contents": {
            "type": "string"
        },
        "issues": {
            "type": "string"
        },
        "single_file": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "metadata": "generated",
    "contents": "generated",
    "issues": "generated",
    "single_file": "generated"
}';
    public function __construct(public ?string $metadata, public ?string $contents, public ?string $issues, #[\EventSauce\ObjectHydrator\MapFrom('single_file')] public ?string $singleFile)
    {
    }
}
