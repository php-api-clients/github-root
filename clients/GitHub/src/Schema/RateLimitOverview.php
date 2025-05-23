<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class RateLimitOverview
{
    public const SCHEMA_JSON         = '{
    "title": "Rate Limit Overview",
    "required": [
        "rate",
        "resources"
    ],
    "type": "object",
    "properties": {
        "resources": {
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
                },
                "code_scanning_autofix": {
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
        },
        "rate": {
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
    },
    "description": "Rate Limit Overview"
}';
    public const SCHEMA_TITLE        = 'Rate Limit Overview';
    public const SCHEMA_DESCRIPTION  = 'Rate Limit Overview';
    public const SCHEMA_EXAMPLE_DATA = '{
    "resources": {
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
        },
        "code_scanning_autofix": {
            "limit": 5,
            "remaining": 9,
            "reset": 5,
            "used": 4
        }
    },
    "rate": {
        "limit": 5,
        "remaining": 9,
        "reset": 5,
        "used": 4
    }
}';

    public function __construct(public Schema\RateLimitOverview\Resources $resources, public Schema\RateLimit $rate)
    {
    }
}
