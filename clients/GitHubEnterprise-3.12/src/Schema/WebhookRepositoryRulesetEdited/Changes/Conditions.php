<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookRepositoryRulesetEdited\Changes;

final readonly class Conditions
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "added": {
            "type": "array",
            "items": {
                "title": "Repository ruleset conditions for ref names",
                "type": "object",
                "properties": {
                    "ref_name": {
                        "type": "object",
                        "properties": {
                            "include": {
                                "type": "array",
                                "items": {
                                    "type": "string"
                                },
                                "description": "Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."
                            },
                            "exclude": {
                                "type": "array",
                                "items": {
                                    "type": "string"
                                },
                                "description": "Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."
                            }
                        }
                    }
                },
                "description": "Parameters for a repository ruleset ref name condition"
            }
        },
        "deleted": {
            "type": "array",
            "items": {
                "title": "Repository ruleset conditions for ref names",
                "type": "object",
                "properties": {
                    "ref_name": {
                        "type": "object",
                        "properties": {
                            "include": {
                                "type": "array",
                                "items": {
                                    "type": "string"
                                },
                                "description": "Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."
                            },
                            "exclude": {
                                "type": "array",
                                "items": {
                                    "type": "string"
                                },
                                "description": "Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."
                            }
                        }
                    }
                },
                "description": "Parameters for a repository ruleset ref name condition"
            }
        },
        "updated": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "condition": {
                        "title": "Repository ruleset conditions for ref names",
                        "type": "object",
                        "properties": {
                            "ref_name": {
                                "type": "object",
                                "properties": {
                                    "include": {
                                        "type": "array",
                                        "items": {
                                            "type": "string"
                                        },
                                        "description": "Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."
                                    },
                                    "exclude": {
                                        "type": "array",
                                        "items": {
                                            "type": "string"
                                        },
                                        "description": "Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."
                                    }
                                }
                            }
                        },
                        "description": "Parameters for a repository ruleset ref name condition"
                    },
                    "changes": {
                        "type": "object",
                        "properties": {
                            "condition_type": {
                                "type": "object",
                                "properties": {
                                    "from": {
                                        "type": "string"
                                    }
                                }
                            },
                            "target": {
                                "type": "object",
                                "properties": {
                                    "from": {
                                        "type": "string"
                                    }
                                }
                            },
                            "include": {
                                "type": "object",
                                "properties": {
                                    "from": {
                                        "type": "array",
                                        "items": {
                                            "type": "string"
                                        }
                                    }
                                }
                            },
                            "exclude": {
                                "type": "object",
                                "properties": {
                                    "from": {
                                        "type": "array",
                                        "items": {
                                            "type": "string"
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "added": [
        {
            "ref_name": {
                "include": [
                    "generated",
                    "generated"
                ],
                "exclude": [
                    "generated",
                    "generated"
                ]
            }
        },
        {
            "ref_name": {
                "include": [
                    "generated",
                    "generated"
                ],
                "exclude": [
                    "generated",
                    "generated"
                ]
            }
        }
    ],
    "deleted": [
        {
            "ref_name": {
                "include": [
                    "generated",
                    "generated"
                ],
                "exclude": [
                    "generated",
                    "generated"
                ]
            }
        },
        {
            "ref_name": {
                "include": [
                    "generated",
                    "generated"
                ],
                "exclude": [
                    "generated",
                    "generated"
                ]
            }
        }
    ],
    "updated": [
        {
            "condition": {
                "ref_name": {
                    "include": [
                        "generated",
                        "generated"
                    ],
                    "exclude": [
                        "generated",
                        "generated"
                    ]
                }
            },
            "changes": {
                "condition_type": {
                    "from": "generated"
                },
                "target": {
                    "from": "generated"
                },
                "include": {
                    "from": [
                        "generated",
                        "generated"
                    ]
                },
                "exclude": {
                    "from": [
                        "generated",
                        "generated"
                    ]
                }
            }
        },
        {
            "condition": {
                "ref_name": {
                    "include": [
                        "generated",
                        "generated"
                    ],
                    "exclude": [
                        "generated",
                        "generated"
                    ]
                }
            },
            "changes": {
                "condition_type": {
                    "from": "generated"
                },
                "target": {
                    "from": "generated"
                },
                "include": {
                    "from": [
                        "generated",
                        "generated"
                    ]
                },
                "exclude": {
                    "from": [
                        "generated",
                        "generated"
                    ]
                }
            }
        }
    ]
}';

    public function __construct(public array|null $added, public array|null $deleted, public array|null $updated)
    {
    }
}
