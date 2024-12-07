<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\RateLimitOverview;

final readonly class Resources implements \ApiClients\Client\GitHub\Contract\RateLimitOverview\Resources
{
    const SCHEMA_JSON = '{
    "required": [
        "core",
        "search"
    ],
    "type": "object",
    "properties": {
        "core": {
            "title": "Rate Limit",
            "required": [
                "limit",
                "remaining",
                "reset",
                "used"
            ],
            "type": "object",
            "properties": {
                "limit": {
                    "type": "integer"
                },
                "remaining": {
                    "type": "integer"
                },
                "reset": {
                    "type": "integer"
                },
                "used": {
                    "type": "integer"
                }
            }
        },
        "graphql": {
            "title": "Rate Limit",
            "required": [
                "limit",
                "remaining",
                "reset",
                "used"
            ],
            "type": "object",
            "properties": {
                "limit": {
                    "type": "integer"
                },
                "remaining": {
                    "type": "integer"
                },
                "reset": {
                    "type": "integer"
                },
                "used": {
                    "type": "integer"
                }
            }
        },
        "search": {
            "title": "Rate Limit",
            "required": [
                "limit",
                "remaining",
                "reset",
                "used"
            ],
            "type": "object",
            "properties": {
                "limit": {
                    "type": "integer"
                },
                "remaining": {
                    "type": "integer"
                },
                "reset": {
                    "type": "integer"
                },
                "used": {
                    "type": "integer"
                }
            }
        },
        "code_search": {
            "title": "Rate Limit",
            "required": [
                "limit",
                "remaining",
                "reset",
                "used"
            ],
            "type": "object",
            "properties": {
                "limit": {
                    "type": "integer"
                },
                "remaining": {
                    "type": "integer"
                },
                "reset": {
                    "type": "integer"
                },
                "used": {
                    "type": "integer"
                }
            }
        },
        "source_import": {
            "title": "Rate Limit",
            "required": [
                "limit",
                "remaining",
                "reset",
                "used"
            ],
            "type": "object",
            "properties": {
                "limit": {
                    "type": "integer"
                },
                "remaining": {
                    "type": "integer"
                },
                "reset": {
                    "type": "integer"
                },
                "used": {
                    "type": "integer"
                }
            }
        },
        "integration_manifest": {
            "title": "Rate Limit",
            "required": [
                "limit",
                "remaining",
                "reset",
                "used"
            ],
            "type": "object",
            "properties": {
                "limit": {
                    "type": "integer"
                },
                "remaining": {
                    "type": "integer"
                },
                "reset": {
                    "type": "integer"
                },
                "used": {
                    "type": "integer"
                }
            }
        },
        "code_scanning_upload": {
            "title": "Rate Limit",
            "required": [
                "limit",
                "remaining",
                "reset",
                "used"
            ],
            "type": "object",
            "properties": {
                "limit": {
                    "type": "integer"
                },
                "remaining": {
                    "type": "integer"
                },
                "reset": {
                    "type": "integer"
                },
                "used": {
                    "type": "integer"
                }
            }
        },
        "actions_runner_registration": {
            "title": "Rate Limit",
            "required": [
                "limit",
                "remaining",
                "reset",
                "used"
            ],
            "type": "object",
            "properties": {
                "limit": {
                    "type": "integer"
                },
                "remaining": {
                    "type": "integer"
                },
                "reset": {
                    "type": "integer"
                },
                "used": {
                    "type": "integer"
                }
            }
        },
        "scim": {
            "title": "Rate Limit",
            "required": [
                "limit",
                "remaining",
                "reset",
                "used"
            ],
            "type": "object",
            "properties": {
                "limit": {
                    "type": "integer"
                },
                "remaining": {
                    "type": "integer"
                },
                "reset": {
                    "type": "integer"
                },
                "used": {
                    "type": "integer"
                }
            }
        },
        "dependency_snapshots": {
            "title": "Rate Limit",
            "required": [
                "limit",
                "remaining",
                "reset",
                "used"
            ],
            "type": "object",
            "properties": {
                "limit": {
                    "type": "integer"
                },
                "remaining": {
                    "type": "integer"
                },
                "reset": {
                    "type": "integer"
                },
                "used": {
                    "type": "integer"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "core": {
        "limit": 5,
        "remaining": 9,
        "reset": 5,
        "used": 4
    },
    "graphql": {
        "limit": 5,
        "remaining": 9,
        "reset": 5,
        "used": 4
    },
    "search": {
        "limit": 5,
        "remaining": 9,
        "reset": 5,
        "used": 4
    },
    "code_search": {
        "limit": 5,
        "remaining": 9,
        "reset": 5,
        "used": 4
    },
    "source_import": {
        "limit": 5,
        "remaining": 9,
        "reset": 5,
        "used": 4
    },
    "integration_manifest": {
        "limit": 5,
        "remaining": 9,
        "reset": 5,
        "used": 4
    },
    "code_scanning_upload": {
        "limit": 5,
        "remaining": 9,
        "reset": 5,
        "used": 4
    },
    "actions_runner_registration": {
        "limit": 5,
        "remaining": 9,
        "reset": 5,
        "used": 4
    },
    "scim": {
        "limit": 5,
        "remaining": 9,
        "reset": 5,
        "used": 4
    },
    "dependency_snapshots": {
        "limit": 5,
        "remaining": 9,
        "reset": 5,
        "used": 4
    }
}';
    public function __construct(public \ApiClients\Client\GitHub\Schema\RateLimit $core, public ?\ApiClients\Client\GitHub\Schema\RateLimit $graphql, public \ApiClients\Client\GitHub\Schema\RateLimit $search, #[\EventSauce\ObjectHydrator\MapFrom('code_search')] public ?\ApiClients\Client\GitHub\Schema\RateLimit $codeSearch, #[\EventSauce\ObjectHydrator\MapFrom('source_import')] public ?\ApiClients\Client\GitHub\Schema\RateLimit $sourceImport, #[\EventSauce\ObjectHydrator\MapFrom('integration_manifest')] public ?\ApiClients\Client\GitHub\Schema\RateLimit $integrationManifest, #[\EventSauce\ObjectHydrator\MapFrom('code_scanning_upload')] public ?\ApiClients\Client\GitHub\Schema\RateLimit $codeScanningUpload, #[\EventSauce\ObjectHydrator\MapFrom('actions_runner_registration')] public ?\ApiClients\Client\GitHub\Schema\RateLimit $actionsRunnerRegistration, public ?\ApiClients\Client\GitHub\Schema\RateLimit $scim, #[\EventSauce\ObjectHydrator\MapFrom('dependency_snapshots')] public ?\ApiClients\Client\GitHub\Schema\RateLimit $dependencySnapshots)
    {
    }
}
