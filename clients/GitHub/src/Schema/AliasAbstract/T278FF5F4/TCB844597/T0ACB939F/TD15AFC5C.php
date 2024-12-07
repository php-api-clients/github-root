<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T278FF5F4\TCB844597\T0ACB939F;

use ApiClients\Client\GitHub\Contract\WebhooksSecurityAdvisory\Vulnerabilities;
use ApiClients\Client\GitHub\Schema\WebhooksSecurityAdvisory\Vulnerabilities\FirstPatchedVersion;
use ApiClients\Client\GitHub\Schema\WebhooksSecurityAdvisory\Vulnerabilities\Package;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TD15AFC5C implements Vulnerabilities
{
    public const SCHEMA_JSON         = '{
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
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
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

    public function __construct(#[MapFrom('first_patched_version')]
    public FirstPatchedVersion|null $firstPatchedVersion, public Package $package, public string $severity, #[MapFrom('vulnerable_version_range')]
    public string $vulnerableVersionRange,)
    {
    }
}
