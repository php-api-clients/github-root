<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T378515F7\T728150FE\T48B2FA76;

abstract readonly class T970A57B1 implements \ApiClients\Client\GitHub\Contract\Operations\Orgs\RemoveOutsideCollaborator\Response\ApplicationJson\UnprocessableEntity
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "message": {
            "type": "string"
        },
        "documentation_url": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "message": "generated",
    "documentation_url": "generated"
}';
    public function __construct(public ?string $message, #[\EventSauce\ObjectHydrator\MapFrom('documentation_url')] public ?string $documentationUrl)
    {
    }
}
