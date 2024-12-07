<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T4C203984\T86D11BF8\T9FC2225A;

use ApiClients\Client\GitHub\Contract\RepositoryAdvisoryCreate\Vulnerabilities;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisoryCreate\Vulnerabilities\Package;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class T026CAEC5 implements Vulnerabilities
{
    public const SCHEMA_JSON         = '{
    "required": [
        "package"
    ],
    "type": "object",
    "properties": {
        "package": {
            "required": [
                "ecosystem"
            ],
            "type": "object",
            "properties": {
                "ecosystem": {
                    "enum": [
                        "rubygems",
                        "npm",
                        "pip",
                        "maven",
                        "nuget",
                        "composer",
                        "go",
                        "rust",
                        "erlang",
                        "actions",
                        "pub",
                        "other",
                        "swift"
                    ],
                    "type": "string",
                    "description": "The package\'s language or package management ecosystem."
                },
                "name": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The unique package name within its ecosystem."
                }
            },
            "description": "The name of the package affected by the vulnerability."
        },
        "vulnerable_version_range": {
            "type": [
                "string",
                "null"
            ],
            "description": "The range of the package versions affected by the vulnerability."
        },
        "patched_versions": {
            "type": [
                "string",
                "null"
            ],
            "description": "The package version(s) that resolve the vulnerability."
        },
        "vulnerable_functions": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "type": "string"
            },
            "description": "The functions in the package that are affected."
        }
    },
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "package": {
        "ecosystem": "rubygems",
        "name": "generated"
    },
    "vulnerable_version_range": "generated",
    "patched_versions": "generated"
}';

    /**
     * package: The name of the package affected by the vulnerability.
     * vulnerableVersionRange: The range of the package versions affected by the vulnerability.
     * patchedVersions: The package version(s) that resolve the vulnerability.
     * vulnerableFunctions: The functions in the package that are affected.
     */
    public function __construct(public Package $package, #[MapFrom('vulnerable_version_range')]
    public string|null $vulnerableVersionRange, #[MapFrom('patched_versions')]
    public string|null $patchedVersions, #[MapFrom('vulnerable_functions')]
    public array|null $vulnerableFunctions,)
    {
    }
}
