<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class DependabotAlert
{
    public const SCHEMA_JSON         = '{
    "required": [
        "number",
        "state",
        "dependency",
        "security_advisory",
        "security_vulnerability",
        "url",
        "html_url",
        "created_at",
        "updated_at",
        "dismissed_at",
        "dismissed_by",
        "dismissed_reason",
        "dismissed_comment",
        "fixed_at"
    ],
    "type": "object",
    "properties": {
        "number": {
            "type": "integer",
            "description": "The security alert number.",
            "readOnly": true
        },
        "state": {
            "enum": [
                "auto_dismissed",
                "dismissed",
                "fixed",
                "open"
            ],
            "type": "string",
            "description": "The state of the Dependabot alert.",
            "readOnly": true
        },
        "dependency": {
            "type": "object",
            "properties": {
                "package": {
                    "required": [
                        "ecosystem",
                        "name"
                    ],
                    "type": "object",
                    "properties": {
                        "ecosystem": {
                            "type": "string",
                            "description": "The package\'s language or package management ecosystem.",
                            "readOnly": true
                        },
                        "name": {
                            "type": "string",
                            "description": "The unique package name within its ecosystem.",
                            "readOnly": true
                        }
                    },
                    "description": "Details for the vulnerable package.",
                    "readOnly": true,
                    "additionalProperties": false
                },
                "manifest_path": {
                    "type": "string",
                    "description": "The full path to the dependency manifest file, relative to the root of the repository.",
                    "readOnly": true
                },
                "scope": {
                    "enum": [
                        "development",
                        "runtime",
                        null
                    ],
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The execution scope of the vulnerable dependency.",
                    "readOnly": true
                },
                "relationship": {
                    "enum": [
                        "unknown",
                        "direct",
                        "transitive",
                        null
                    ],
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The vulnerable dependency\'s relationship to your project.\\n\\n> [!NOTE]\\n> We are rolling out support for dependency relationship across ecosystems. This value will be \\"unknown\\" for all dependencies in unsupported ecosystems.\\n",
                    "readOnly": true
                }
            },
            "description": "Details for the vulnerable dependency.",
            "readOnly": true
        },
        "security_advisory": {
            "required": [
                "ghsa_id",
                "cve_id",
                "summary",
                "description",
                "vulnerabilities",
                "severity",
                "cvss",
                "cwes",
                "identifiers",
                "references",
                "published_at",
                "updated_at",
                "withdrawn_at"
            ],
            "type": "object",
            "properties": {
                "ghsa_id": {
                    "type": "string",
                    "description": "The unique GitHub Security Advisory ID assigned to the advisory.",
                    "readOnly": true
                },
                "cve_id": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The unique CVE ID assigned to the advisory.",
                    "readOnly": true
                },
                "summary": {
                    "maxLength": 1024,
                    "type": "string",
                    "description": "A short, plain text summary of the advisory.",
                    "readOnly": true
                },
                "description": {
                    "type": "string",
                    "description": "A long-form Markdown-supported description of the advisory.",
                    "readOnly": true
                },
                "vulnerabilities": {
                    "type": "array",
                    "items": {
                        "required": [
                            "package",
                            "severity",
                            "vulnerable_version_range",
                            "first_patched_version"
                        ],
                        "type": "object",
                        "properties": {
                            "package": {
                                "required": [
                                    "ecosystem",
                                    "name"
                                ],
                                "type": "object",
                                "properties": {
                                    "ecosystem": {
                                        "type": "string",
                                        "description": "The package\'s language or package management ecosystem.",
                                        "readOnly": true
                                    },
                                    "name": {
                                        "type": "string",
                                        "description": "The unique package name within its ecosystem.",
                                        "readOnly": true
                                    }
                                },
                                "description": "Details for the vulnerable package.",
                                "readOnly": true,
                                "additionalProperties": false
                            },
                            "severity": {
                                "enum": [
                                    "low",
                                    "medium",
                                    "high",
                                    "critical"
                                ],
                                "type": "string",
                                "description": "The severity of the vulnerability.",
                                "readOnly": true
                            },
                            "vulnerable_version_range": {
                                "type": "string",
                                "description": "Conditions that identify vulnerable versions of this vulnerability\'s package.",
                                "readOnly": true
                            },
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
                                        "type": "string",
                                        "description": "The package version that patches this vulnerability.",
                                        "readOnly": true
                                    }
                                },
                                "description": "Details pertaining to the package version that patches this vulnerability.",
                                "readOnly": true,
                                "additionalProperties": false
                            }
                        },
                        "description": "Details pertaining to one vulnerable version range for the advisory.",
                        "readOnly": true,
                        "additionalProperties": false
                    },
                    "description": "Vulnerable version range information for the advisory.",
                    "readOnly": true
                },
                "severity": {
                    "enum": [
                        "low",
                        "medium",
                        "high",
                        "critical"
                    ],
                    "type": "string",
                    "description": "The severity of the advisory.",
                    "readOnly": true
                },
                "cvss": {
                    "required": [
                        "score",
                        "vector_string"
                    ],
                    "type": "object",
                    "properties": {
                        "score": {
                            "maximum": 10,
                            "minimum": 0,
                            "type": "number",
                            "description": "The overall CVSS score of the advisory.",
                            "readOnly": true
                        },
                        "vector_string": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "description": "The full CVSS vector string for the advisory.",
                            "readOnly": true
                        }
                    },
                    "description": "Details for the advisory pertaining to the Common Vulnerability Scoring System.",
                    "readOnly": true,
                    "additionalProperties": false
                },
                "cvss_severities": {
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "cvss_v3": {
                            "required": [
                                "vector_string",
                                "score"
                            ],
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
                                "vector_string": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "description": "The CVSS 3 vector string."
                                },
                                "score": {
                                    "maximum": 10,
                                    "minimum": 0,
                                    "type": [
                                        "number",
                                        "null"
                                    ],
                                    "description": "The CVSS 3 score.",
                                    "readOnly": true
                                }
                            }
                        },
                        "cvss_v4": {
                            "required": [
                                "vector_string",
                                "score"
                            ],
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
                                "vector_string": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "description": "The CVSS 4 vector string."
                                },
                                "score": {
                                    "maximum": 10,
                                    "minimum": 0,
                                    "type": [
                                        "number",
                                        "null"
                                    ],
                                    "description": "The CVSS 4 score.",
                                    "readOnly": true
                                }
                            }
                        }
                    }
                },
                "epss": {
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "percentage": {
                            "maximum": 100,
                            "minimum": 0,
                            "type": "number"
                        },
                        "percentile": {
                            "maximum": 100,
                            "minimum": 0,
                            "type": "number"
                        }
                    },
                    "description": "The EPSS scores as calculated by the [Exploit Prediction Scoring System](https:\\/\\/www.first.org\\/epss).",
                    "readOnly": true
                },
                "cwes": {
                    "type": "array",
                    "items": {
                        "required": [
                            "cwe_id",
                            "name"
                        ],
                        "type": "object",
                        "properties": {
                            "cwe_id": {
                                "type": "string",
                                "description": "The unique CWE ID.",
                                "readOnly": true
                            },
                            "name": {
                                "type": "string",
                                "description": "The short, plain text name of the CWE.",
                                "readOnly": true
                            }
                        },
                        "description": "A CWE weakness assigned to the advisory.",
                        "readOnly": true,
                        "additionalProperties": false
                    },
                    "description": "Details for the advisory pertaining to Common Weakness Enumeration.",
                    "readOnly": true
                },
                "identifiers": {
                    "type": "array",
                    "items": {
                        "required": [
                            "value",
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "type": {
                                "enum": [
                                    "CVE",
                                    "GHSA"
                                ],
                                "type": "string",
                                "description": "The type of advisory identifier.",
                                "readOnly": true
                            },
                            "value": {
                                "type": "string",
                                "description": "The value of the advisory identifer.",
                                "readOnly": true
                            }
                        },
                        "description": "An advisory identifier.",
                        "readOnly": true,
                        "additionalProperties": false
                    },
                    "description": "Values that identify this advisory among security information sources.",
                    "readOnly": true
                },
                "references": {
                    "type": "array",
                    "items": {
                        "required": [
                            "url"
                        ],
                        "type": "object",
                        "properties": {
                            "url": {
                                "type": "string",
                                "description": "The URL of the reference.",
                                "format": "uri",
                                "readOnly": true
                            }
                        },
                        "description": "A link to additional advisory information.",
                        "readOnly": true,
                        "additionalProperties": false
                    },
                    "description": "Links to additional advisory information.",
                    "readOnly": true
                },
                "published_at": {
                    "type": "string",
                    "description": "The time that the advisory was published in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
                    "format": "date-time",
                    "readOnly": true
                },
                "updated_at": {
                    "type": "string",
                    "description": "The time that the advisory was last modified in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
                    "format": "date-time",
                    "readOnly": true
                },
                "withdrawn_at": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The time that the advisory was withdrawn in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
                    "format": "date-time",
                    "readOnly": true
                }
            },
            "description": "Details for the GitHub Security Advisory.",
            "readOnly": true,
            "additionalProperties": false
        },
        "security_vulnerability": {
            "required": [
                "package",
                "severity",
                "vulnerable_version_range",
                "first_patched_version"
            ],
            "type": "object",
            "properties": {
                "package": {
                    "required": [
                        "ecosystem",
                        "name"
                    ],
                    "type": "object",
                    "properties": {
                        "ecosystem": {
                            "type": "string",
                            "description": "The package\'s language or package management ecosystem.",
                            "readOnly": true
                        },
                        "name": {
                            "type": "string",
                            "description": "The unique package name within its ecosystem.",
                            "readOnly": true
                        }
                    },
                    "description": "Details for the vulnerable package.",
                    "readOnly": true,
                    "additionalProperties": false
                },
                "severity": {
                    "enum": [
                        "low",
                        "medium",
                        "high",
                        "critical"
                    ],
                    "type": "string",
                    "description": "The severity of the vulnerability.",
                    "readOnly": true
                },
                "vulnerable_version_range": {
                    "type": "string",
                    "description": "Conditions that identify vulnerable versions of this vulnerability\'s package.",
                    "readOnly": true
                },
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
                            "type": "string",
                            "description": "The package version that patches this vulnerability.",
                            "readOnly": true
                        }
                    },
                    "description": "Details pertaining to the package version that patches this vulnerability.",
                    "readOnly": true,
                    "additionalProperties": false
                }
            },
            "description": "Details pertaining to one vulnerable version range for the advisory.",
            "readOnly": true,
            "additionalProperties": false
        },
        "url": {
            "type": "string",
            "description": "The REST API URL of the alert resource.",
            "format": "uri",
            "readOnly": true
        },
        "html_url": {
            "type": "string",
            "description": "The GitHub URL of the alert resource.",
            "format": "uri",
            "readOnly": true
        },
        "created_at": {
            "type": "string",
            "description": "The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time",
            "readOnly": true
        },
        "updated_at": {
            "type": "string",
            "description": "The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time",
            "readOnly": true
        },
        "dismissed_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time",
            "readOnly": true
        },
        "dismissed_by": {
            "anyOf": [
                {
                    "type": "null"
                },
                {
                    "title": "Simple User",
                    "required": [
                        "avatar_url",
                        "events_url",
                        "followers_url",
                        "following_url",
                        "gists_url",
                        "gravatar_id",
                        "html_url",
                        "id",
                        "node_id",
                        "login",
                        "organizations_url",
                        "received_events_url",
                        "repos_url",
                        "site_admin",
                        "starred_url",
                        "subscriptions_url",
                        "type",
                        "url"
                    ],
                    "type": "object",
                    "properties": {
                        "name": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "email": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "login": {
                            "type": "string",
                            "examples": [
                                "octocat"
                            ]
                        },
                        "id": {
                            "type": "integer",
                            "format": "int64",
                            "examples": [
                                1
                            ]
                        },
                        "node_id": {
                            "type": "string",
                            "examples": [
                                "MDQ6VXNlcjE="
                            ]
                        },
                        "avatar_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"
                            ]
                        },
                        "gravatar_id": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "examples": [
                                "41d064eb2195891e12d0413f63227ea7"
                            ]
                        },
                        "url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat"
                            ]
                        },
                        "html_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/github.com\\/octocat"
                            ]
                        },
                        "followers_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/followers"
                            ]
                        },
                        "following_url": {
                            "type": "string",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"
                            ]
                        },
                        "gists_url": {
                            "type": "string",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"
                            ]
                        },
                        "starred_url": {
                            "type": "string",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"
                            ]
                        },
                        "subscriptions_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"
                            ]
                        },
                        "organizations_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"
                            ]
                        },
                        "repos_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/repos"
                            ]
                        },
                        "events_url": {
                            "type": "string",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"
                            ]
                        },
                        "received_events_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"
                            ]
                        },
                        "type": {
                            "type": "string",
                            "examples": [
                                "User"
                            ]
                        },
                        "site_admin": {
                            "type": "boolean"
                        },
                        "starred_at": {
                            "type": "string",
                            "examples": [
                                "\\"2020-07-09T00:17:55Z\\""
                            ]
                        },
                        "user_view_type": {
                            "type": "string",
                            "examples": [
                                "public"
                            ]
                        }
                    },
                    "description": "A GitHub user."
                }
            ]
        },
        "dismissed_reason": {
            "enum": [
                "fix_started",
                "inaccurate",
                "no_bandwidth",
                "not_used",
                "tolerable_risk",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "The reason that the alert was dismissed."
        },
        "dismissed_comment": {
            "maxLength": 280,
            "type": [
                "string",
                "null"
            ],
            "description": "An optional comment associated with the alert\'s dismissal."
        },
        "fixed_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The time that the alert was no longer detected and was considered fixed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time",
            "readOnly": true
        },
        "auto_dismissed_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The time that the alert was auto-dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time",
            "readOnly": true
        }
    },
    "description": "A Dependabot alert.",
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'A Dependabot alert.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "number": 6,
    "state": "auto_dismissed",
    "dependency": {
        "package": {
            "ecosystem": "generated",
            "name": "generated"
        },
        "manifest_path": "generated",
        "scope": "development",
        "relationship": "transitive"
    },
    "security_advisory": {
        "ghsa_id": "generated",
        "cve_id": "generated",
        "summary": "generated",
        "description": "generated",
        "vulnerabilities": [
            {
                "package": {
                    "ecosystem": "generated",
                    "name": "generated"
                },
                "severity": "critical",
                "vulnerable_version_range": "generated",
                "first_patched_version": {
                    "identifier": "generated"
                }
            },
            {
                "package": {
                    "ecosystem": "generated",
                    "name": "generated"
                },
                "severity": "critical",
                "vulnerable_version_range": "generated",
                "first_patched_version": {
                    "identifier": "generated"
                }
            }
        ],
        "severity": "critical",
        "cvss": {
            "score": 0.5,
            "vector_string": "generated"
        },
        "cvss_severities": {
            "cvss_v3": {
                "vector_string": "generated",
                "score": 0.5
            },
            "cvss_v4": {
                "vector_string": "generated",
                "score": 0.5
            }
        },
        "epss": {
            "percentage": 1,
            "percentile": 1
        },
        "cwes": [
            {
                "cwe_id": "generated",
                "name": "generated"
            },
            {
                "cwe_id": "generated",
                "name": "generated"
            }
        ],
        "identifiers": [
            {
                "type": "GHSA",
                "value": "generated"
            },
            {
                "type": "GHSA",
                "value": "generated"
            }
        ],
        "references": [
            {
                "url": "https:\\/\\/example.com\\/"
            },
            {
                "url": "https:\\/\\/example.com\\/"
            }
        ],
        "published_at": "1970-01-01T00:00:00+00:00",
        "updated_at": "1970-01-01T00:00:00+00:00",
        "withdrawn_at": "1970-01-01T00:00:00+00:00"
    },
    "security_vulnerability": {
        "package": {
            "ecosystem": "generated",
            "name": "generated"
        },
        "severity": "critical",
        "vulnerable_version_range": "generated",
        "first_patched_version": {
            "identifier": "generated"
        }
    },
    "url": "https:\\/\\/example.com\\/",
    "html_url": "https:\\/\\/example.com\\/",
    "created_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "dismissed_at": "1970-01-01T00:00:00+00:00",
    "dismissed_by": {
        "name": "generated",
        "email": "generated",
        "login": "octocat",
        "id": 1,
        "node_id": "MDQ6VXNlcjE=",
        "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
        "gravatar_id": "41d064eb2195891e12d0413f63227ea7",
        "url": "https:\\/\\/api.github.com\\/users\\/octocat",
        "html_url": "https:\\/\\/github.com\\/octocat",
        "followers_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/followers",
        "following_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}",
        "gists_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}",
        "starred_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}",
        "subscriptions_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions",
        "organizations_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs",
        "repos_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/repos",
        "events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}",
        "received_events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events",
        "type": "User",
        "site_admin": false,
        "starred_at": "\\"2020-07-09T00:17:55Z\\"",
        "user_view_type": "public"
    },
    "dismissed_reason": "tolerable_risk",
    "dismissed_comment": "generated",
    "fixed_at": "1970-01-01T00:00:00+00:00",
    "auto_dismissed_at": "1970-01-01T00:00:00+00:00"
}';

    /**
     * number: The security alert number.
     * state: The state of the Dependabot alert.
     * dependency: Details for the vulnerable dependency.
     * securityAdvisory: Details for the GitHub Security Advisory.
     * securityVulnerability: Details pertaining to one vulnerable version range for the advisory.
     * url: The REST API URL of the alert resource.
     * htmlUrl: The GitHub URL of the alert resource.
     * createdAt: The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * updatedAt: The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * dismissedAt: The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * dismissedReason: The reason that the alert was dismissed.
     * dismissedComment: An optional comment associated with the alert's dismissal.
     * fixedAt: The time that the alert was no longer detected and was considered fixed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * autoDismissedAt: The time that the alert was auto-dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function __construct(public int $number, public string $state, public Schema\DependabotAlert\Dependency $dependency, #[MapFrom('security_advisory')]
    public Schema\DependabotAlertSecurityAdvisory $securityAdvisory, #[MapFrom('security_vulnerability')]
    public Schema\DependabotAlertSecurityVulnerability $securityVulnerability, public string $url, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string $updatedAt, #[MapFrom('dismissed_at')]
    public string|null $dismissedAt, #[MapFrom('dismissed_by')]
    public Schema\SimpleUser|null $dismissedBy, #[MapFrom('dismissed_reason')]
    public string|null $dismissedReason, #[MapFrom('dismissed_comment')]
    public string|null $dismissedComment, #[MapFrom('fixed_at')]
    public string|null $fixedAt, #[MapFrom('auto_dismissed_at')]
    public string|null $autoDismissedAt,)
    {
    }
}
