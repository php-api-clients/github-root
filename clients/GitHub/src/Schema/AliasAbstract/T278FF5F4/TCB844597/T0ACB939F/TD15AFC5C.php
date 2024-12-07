<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T278FF5F4\TCB844597\T0ACB939F;

abstract readonly class TD15AFC5C implements \ApiClients\Client\GitHub\Contract\WebhooksSecurityAdvisory\Vulnerabilities
{
    const SCHEMA_JSON = '{
    "required": [
        "package",
        "severity",
        "vulnerable_version_range",
        "first_patched_version"
    ],
    "type": "object",
    "properties": {
        "first_patched_version": {
            "required": [
                "identifier"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "identifier": {
                    "type": "string"
                }
            }
        },
        "package": {
            "required": [
                "ecosystem",
                "name"
            ],
            "type": "object",
            "properties": {
                "ecosystem": {
                    "type": "string"
                },
                "name": {
                    "type": "string"
                }
            }
        },
        "severity": {
            "type": "string"
        },
        "vulnerable_version_range": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "first_patched_version": {
        "identifier": "generated"
    },
    "package": {
        "ecosystem": "generated",
        "name": "generated"
    },
    "severity": "generated",
    "vulnerable_version_range": "generated"
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('first_patched_version')] public ?\ApiClients\Client\GitHub\Schema\WebhooksSecurityAdvisory\Vulnerabilities\FirstPatchedVersion $firstPatchedVersion, public \ApiClients\Client\GitHub\Schema\WebhooksSecurityAdvisory\Vulnerabilities\Package $package, public string $severity, #[\EventSauce\ObjectHydrator\MapFrom('vulnerable_version_range')] public string $vulnerableVersionRange)
    {
    }
}
