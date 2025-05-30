<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom\Sbom;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Packages
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "SPDXID": {
            "type": "string",
            "description": "A unique SPDX identifier for the package.",
            "examples": [
                "SPDXRef-Package"
            ]
        },
        "name": {
            "type": "string",
            "description": "The name of the package.",
            "examples": [
                "github\\/github"
            ]
        },
        "versionInfo": {
            "type": "string",
            "description": "The version of the package. If the package does not have an exact version specified,\\na version range is given.",
            "examples": [
                "1.0.0"
            ]
        },
        "downloadLocation": {
            "type": "string",
            "description": "The location where the package can be downloaded,\\nor NOASSERTION if this has not been determined.",
            "examples": [
                "NOASSERTION"
            ]
        },
        "filesAnalyzed": {
            "type": "boolean",
            "description": "Whether the package\'s file content has been subjected to\\nanalysis during the creation of the SPDX document.",
            "examples": [
                false
            ]
        },
        "licenseConcluded": {
            "type": "string",
            "description": "The license of the package as determined while creating the SPDX document.",
            "examples": [
                "MIT"
            ]
        },
        "licenseDeclared": {
            "type": "string",
            "description": "The license of the package as declared by its author, or NOASSERTION if this information\\nwas not available when the SPDX document was created.",
            "examples": [
                "NOASSERTION"
            ]
        },
        "supplier": {
            "type": "string",
            "description": "The distribution source of this package, or NOASSERTION if this was not determined.",
            "examples": [
                "NOASSERTION"
            ]
        },
        "copyrightText": {
            "type": "string",
            "description": "The copyright holders of the package, and any dates present with those notices, if available.",
            "examples": [
                "Copyright (c) 1985 GitHub.com"
            ]
        },
        "externalRefs": {
            "type": "array",
            "items": {
                "required": [
                    "referenceCategory",
                    "referenceLocator",
                    "referenceType"
                ],
                "type": "object",
                "properties": {
                    "referenceCategory": {
                        "type": "string",
                        "description": "The category of reference to an external resource this reference refers to.",
                        "examples": [
                            "PACKAGE-MANAGER"
                        ]
                    },
                    "referenceLocator": {
                        "type": "string",
                        "description": "A locator for the particular external resource this reference refers to.",
                        "examples": [
                            "pkg:gem\\/rails@6.0.1"
                        ]
                    },
                    "referenceType": {
                        "type": "string",
                        "description": "The category of reference to an external resource this reference refers to.",
                        "examples": [
                            "purl"
                        ]
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "SPDXID": "SPDXRef-Package",
    "name": "github\\/github",
    "versionInfo": "1.0.0",
    "downloadLocation": "NOASSERTION",
    "filesAnalyzed": false,
    "licenseConcluded": "MIT",
    "licenseDeclared": "NOASSERTION",
    "supplier": "NOASSERTION",
    "copyrightText": "Copyright (c) 1985 GitHub.com",
    "externalRefs": [
        {
            "referenceCategory": "PACKAGE-MANAGER",
            "referenceLocator": "pkg:gem\\/rails@6.0.1",
            "referenceType": "purl"
        },
        {
            "referenceCategory": "PACKAGE-MANAGER",
            "referenceLocator": "pkg:gem\\/rails@6.0.1",
            "referenceType": "purl"
        }
    ]
}';

    /**
     * spdxid: A unique SPDX identifier for the package.
     * name: The name of the package.
     * versionInfo: The version of the package. If the package does not have an exact version specified,
    a version range is given.
     * downloadLocation: The location where the package can be downloaded,
    or NOASSERTION if this has not been determined.
     * filesAnalyzed: Whether the package's file content has been subjected to
    analysis during the creation of the SPDX document.
     * licenseConcluded: The license of the package as determined while creating the SPDX document.
     * licenseDeclared: The license of the package as declared by its author, or NOASSERTION if this information
    was not available when the SPDX document was created.
     * supplier: The distribution source of this package, or NOASSERTION if this was not determined.
     * copyrightText: The copyright holders of the package, and any dates present with those notices, if available.
     */
    public function __construct(#[MapFrom('SPDXID')]
    public string|null $spdxid, public string|null $name, public string|null $versionInfo, public string|null $downloadLocation, public bool|null $filesAnalyzed, public string|null $licenseConcluded, public string|null $licenseDeclared, public string|null $supplier, public string|null $copyrightText, public array|null $externalRefs,)
    {
    }
}
