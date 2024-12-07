<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\ApiOverview\Domains;

final readonly class ArtifactAttestations implements \ApiClients\Client\GitHub\Contract\ApiOverview\Domains\ArtifactAttestations
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "trust_domain": {
            "type": "string",
            "examples": [
                "example"
            ]
        },
        "services": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "example.com"
                ]
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "trust_domain": "generated",
    "services": [
        "generated",
        "generated"
    ]
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('trust_domain')] public ?string $trustDomain, public ?array $services)
    {
    }
}
