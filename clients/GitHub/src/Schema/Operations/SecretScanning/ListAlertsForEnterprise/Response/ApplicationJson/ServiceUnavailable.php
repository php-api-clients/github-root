<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson;

final readonly class ServiceUnavailable implements \ApiClients\Client\GitHub\Contract\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "code": {
            "type": "string"
        },
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
    "code": "generated",
    "message": "generated",
    "documentation_url": "generated"
}';
    public function __construct(public ?string $code, public ?string $message, #[\EventSauce\ObjectHydrator\MapFrom('documentation_url')] public ?string $documentationUrl)
    {
    }
}
