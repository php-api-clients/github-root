<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class EnterpriseRulesetConditions
{
    public const SCHEMA_JSON         = '{
    "title": "Enterprise ruleset conditions",
    "type": "object",
    "oneOf": [
        {
            "title": "organization_name_and_repository_name",
            "type": "object",
            "allOf": [
                {
                    "title": "Repository ruleset conditions for organization names",
                    "required": [
                        "organization_name"
                    ],
                    "type": "object",
                    "properties": {
                        "organization_name": {
                            "type": "object",
                            "properties": {
                                "include": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    },
                                    "description": "Array of organization names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~ALL` to include all organizations and ~EMUS to target all enterprise managed user accounts."
                                },
                                "exclude": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    },
                                    "description": "Array of organization names or patterns to exclude. The condition will not pass if any of these patterns match."
                                }
                            }
                        }
                    },
                    "description": "Parameters for an organization name condition"
                },
                {
                    "title": "Repository ruleset conditions for repository names",
                    "required": [
                        "repository_name"
                    ],
                    "type": "object",
                    "properties": {
                        "repository_name": {
                            "type": "object",
                            "properties": {
                                "include": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    },
                                    "description": "Array of repository names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~ALL` to include all repositories."
                                },
                                "exclude": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    },
                                    "description": "Array of repository names or patterns to exclude. The condition will not pass if any of these patterns match."
                                },
                                "protected": {
                                    "type": "boolean",
                                    "description": "Whether renaming of target repositories is prevented."
                                }
                            }
                        }
                    },
                    "description": "Parameters for a repository name condition"
                },
                {
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
            ],
            "description": "Conditions to target organizations by name and all repositories"
        },
        {
            "title": "organization_name_and_repository_property",
            "type": "object",
            "allOf": [
                {
                    "title": "Repository ruleset conditions for organization names",
                    "required": [
                        "organization_name"
                    ],
                    "type": "object",
                    "properties": {
                        "organization_name": {
                            "type": "object",
                            "properties": {
                                "include": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    },
                                    "description": "Array of organization names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~ALL` to include all organizations and ~EMUS to target all enterprise managed user accounts."
                                },
                                "exclude": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    },
                                    "description": "Array of organization names or patterns to exclude. The condition will not pass if any of these patterns match."
                                }
                            }
                        }
                    },
                    "description": "Parameters for an organization name condition"
                },
                {
                    "title": "Repository ruleset conditions for repository properties",
                    "required": [
                        "repository_property"
                    ],
                    "type": "object",
                    "properties": {
                        "repository_property": {
                            "type": "object",
                            "properties": {
                                "include": {
                                    "type": "array",
                                    "items": {
                                        "title": "Repository ruleset property targeting definition",
                                        "required": [
                                            "name",
                                            "property_values"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "name": {
                                                "type": "string",
                                                "description": "The name of the repository property to target"
                                            },
                                            "property_values": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                },
                                                "description": "The values to match for the repository property"
                                            },
                                            "source": {
                                                "enum": [
                                                    "custom",
                                                    "system"
                                                ],
                                                "type": "string",
                                                "description": "The source of the repository property. Defaults to \'custom\' if not specified."
                                            }
                                        },
                                        "description": "Parameters for a targeting a repository property"
                                    },
                                    "description": "The repository properties and values to include. All of these properties must match for the condition to pass."
                                },
                                "exclude": {
                                    "type": "array",
                                    "items": {
                                        "title": "Repository ruleset property targeting definition",
                                        "required": [
                                            "name",
                                            "property_values"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "name": {
                                                "type": "string",
                                                "description": "The name of the repository property to target"
                                            },
                                            "property_values": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                },
                                                "description": "The values to match for the repository property"
                                            },
                                            "source": {
                                                "enum": [
                                                    "custom",
                                                    "system"
                                                ],
                                                "type": "string",
                                                "description": "The source of the repository property. Defaults to \'custom\' if not specified."
                                            }
                                        },
                                        "description": "Parameters for a targeting a repository property"
                                    },
                                    "description": "The repository properties and values to exclude. The condition will not pass if any of these properties match."
                                }
                            }
                        }
                    },
                    "description": "Parameters for a repository property condition"
                },
                {
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
            ],
            "description": "Conditions to target organizations by name and repositories by property"
        },
        {
            "title": "organization_id_and_repository_name",
            "type": "object",
            "allOf": [
                {
                    "title": "Repository ruleset conditions for organization IDs",
                    "required": [
                        "organization_id"
                    ],
                    "type": "object",
                    "properties": {
                        "organization_id": {
                            "type": "object",
                            "properties": {
                                "organization_ids": {
                                    "type": "array",
                                    "items": {
                                        "type": "integer"
                                    },
                                    "description": "The organization IDs that the ruleset applies to. One of these IDs must match for the condition to pass."
                                }
                            }
                        }
                    },
                    "description": "Parameters for an organization ID condition"
                },
                {
                    "title": "Repository ruleset conditions for repository names",
                    "required": [
                        "repository_name"
                    ],
                    "type": "object",
                    "properties": {
                        "repository_name": {
                            "type": "object",
                            "properties": {
                                "include": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    },
                                    "description": "Array of repository names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~ALL` to include all repositories."
                                },
                                "exclude": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    },
                                    "description": "Array of repository names or patterns to exclude. The condition will not pass if any of these patterns match."
                                },
                                "protected": {
                                    "type": "boolean",
                                    "description": "Whether renaming of target repositories is prevented."
                                }
                            }
                        }
                    },
                    "description": "Parameters for a repository name condition"
                },
                {
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
            ],
            "description": "Conditions to target organizations by id and all repositories"
        },
        {
            "title": "organization_id_and_repository_property",
            "type": "object",
            "allOf": [
                {
                    "title": "Repository ruleset conditions for organization IDs",
                    "required": [
                        "organization_id"
                    ],
                    "type": "object",
                    "properties": {
                        "organization_id": {
                            "type": "object",
                            "properties": {
                                "organization_ids": {
                                    "type": "array",
                                    "items": {
                                        "type": "integer"
                                    },
                                    "description": "The organization IDs that the ruleset applies to. One of these IDs must match for the condition to pass."
                                }
                            }
                        }
                    },
                    "description": "Parameters for an organization ID condition"
                },
                {
                    "title": "Repository ruleset conditions for repository properties",
                    "required": [
                        "repository_property"
                    ],
                    "type": "object",
                    "properties": {
                        "repository_property": {
                            "type": "object",
                            "properties": {
                                "include": {
                                    "type": "array",
                                    "items": {
                                        "title": "Repository ruleset property targeting definition",
                                        "required": [
                                            "name",
                                            "property_values"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "name": {
                                                "type": "string",
                                                "description": "The name of the repository property to target"
                                            },
                                            "property_values": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                },
                                                "description": "The values to match for the repository property"
                                            },
                                            "source": {
                                                "enum": [
                                                    "custom",
                                                    "system"
                                                ],
                                                "type": "string",
                                                "description": "The source of the repository property. Defaults to \'custom\' if not specified."
                                            }
                                        },
                                        "description": "Parameters for a targeting a repository property"
                                    },
                                    "description": "The repository properties and values to include. All of these properties must match for the condition to pass."
                                },
                                "exclude": {
                                    "type": "array",
                                    "items": {
                                        "title": "Repository ruleset property targeting definition",
                                        "required": [
                                            "name",
                                            "property_values"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "name": {
                                                "type": "string",
                                                "description": "The name of the repository property to target"
                                            },
                                            "property_values": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                },
                                                "description": "The values to match for the repository property"
                                            },
                                            "source": {
                                                "enum": [
                                                    "custom",
                                                    "system"
                                                ],
                                                "type": "string",
                                                "description": "The source of the repository property. Defaults to \'custom\' if not specified."
                                            }
                                        },
                                        "description": "Parameters for a targeting a repository property"
                                    },
                                    "description": "The repository properties and values to exclude. The condition will not pass if any of these properties match."
                                }
                            }
                        }
                    },
                    "description": "Parameters for a repository property condition"
                },
                {
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
            ],
            "description": "Conditions to target organization by id and repositories by property"
        }
    ],
    "description": "Conditions for an enterprise ruleset. The conditions object should contain either the `organization_id` or `organization_name` property and the `repository_name` or `repository_property` property. For branch and tag rulesets, the conditions object should also contain the `ref_name` property."
}';
    public const SCHEMA_TITLE        = 'Enterprise ruleset conditions';
    public const SCHEMA_DESCRIPTION  = 'Conditions for an enterprise ruleset. The conditions object should contain either the `organization_id` or `organization_name` property and the `repository_name` or `repository_property` property. For branch and tag rulesets, the conditions object should also contain the `ref_name` property.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
