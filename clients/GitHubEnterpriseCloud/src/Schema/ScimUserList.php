<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ScimUserList
{
    public const SCHEMA_JSON         = '{
    "title": "SCIM User List",
    "required": [
        "schemas",
        "totalResults",
        "itemsPerPage",
        "startIndex",
        "Resources"
    ],
    "type": "object",
    "properties": {
        "schemas": {
            "minItems": 1,
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "urn:ietf:params:scim:api:messages:2.0:ListResponse"
                ]
            },
            "description": "SCIM schema used."
        },
        "totalResults": {
            "type": "integer",
            "examples": [
                3
            ]
        },
        "itemsPerPage": {
            "type": "integer",
            "examples": [
                10
            ]
        },
        "startIndex": {
            "type": "integer",
            "examples": [
                1
            ]
        },
        "Resources": {
            "type": "array",
            "items": {
                "title": "SCIM \\/Users",
                "required": [
                    "id",
                    "schemas",
                    "emails",
                    "active",
                    "meta"
                ],
                "type": "object",
                "properties": {
                    "schemas": {
                        "minItems": 1,
                        "type": "array",
                        "items": {
                            "type": "string",
                            "examples": [
                                "urn:ietf:params:scim:schemas:core:2.0:User"
                            ]
                        },
                        "description": "SCIM schema used."
                    },
                    "id": {
                        "type": "string",
                        "description": "Unique identifier of an external identity",
                        "examples": [
                            "1b78eada-9baa-11e6-9eb6-a431576d590e"
                        ]
                    },
                    "externalId": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "The ID of the User.",
                        "examples": [
                            "a7b0f98395"
                        ]
                    },
                    "userName": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "Configured by the admin. Could be an email, login, or username",
                        "examples": [
                            "someone@example.com"
                        ]
                    },
                    "displayName": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "The name of the user, suitable for display to end-users",
                        "examples": [
                            "Jon Doe"
                        ]
                    },
                    "name": {
                        "type": "object",
                        "properties": {
                            "givenName": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "familyName": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "formatted": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            }
                        },
                        "example": {
                            "givenName": "Jane",
                            "familyName": "User"
                        }
                    },
                    "emails": {
                        "type": "array",
                        "items": {
                            "required": [
                                "value"
                            ],
                            "type": "object",
                            "properties": {
                                "value": {
                                    "type": "string"
                                },
                                "primary": {
                                    "type": "boolean"
                                },
                                "type": {
                                    "type": "string"
                                }
                            }
                        },
                        "description": "user emails",
                        "examples": [
                            {
                                "value": "someone@example.com",
                                "primary": true
                            },
                            {
                                "value": "another@example.com",
                                "primary": false
                            }
                        ]
                    },
                    "active": {
                        "type": "boolean",
                        "description": "The active status of the User.",
                        "examples": [
                            true
                        ]
                    },
                    "meta": {
                        "type": "object",
                        "properties": {
                            "resourceType": {
                                "type": "string",
                                "examples": [
                                    "User"
                                ]
                            },
                            "created": {
                                "type": "string",
                                "format": "date-time",
                                "examples": [
                                    "2019-01-24T22:45:36.000Z"
                                ]
                            },
                            "lastModified": {
                                "type": "string",
                                "format": "date-time",
                                "examples": [
                                    "2019-01-24T22:45:36.000Z"
                                ]
                            },
                            "location": {
                                "type": "string",
                                "format": "uri",
                                "examples": [
                                    "https:\\/\\/api.github.com\\/scim\\/v2\\/organizations\\/myorg-123abc55141bfd8f\\/Users\\/c42772b5-2029-11e9-8543-9264a97dec8d"
                                ]
                            }
                        }
                    },
                    "organization_id": {
                        "type": "integer",
                        "description": "The ID of the organization."
                    },
                    "operations": {
                        "minItems": 1,
                        "type": "array",
                        "items": {
                            "required": [
                                "op"
                            ],
                            "type": "object",
                            "properties": {
                                "op": {
                                    "enum": [
                                        "add",
                                        "remove",
                                        "replace"
                                    ],
                                    "type": "string"
                                },
                                "path": {
                                    "type": "string"
                                },
                                "value": {
                                    "oneOf": [
                                        {
                                            "type": "string"
                                        },
                                        {
                                            "type": "object"
                                        },
                                        {
                                            "type": "array",
                                            "items": {}
                                        }
                                    ]
                                }
                            }
                        },
                        "description": "Set of operations to be performed",
                        "examples": [
                            {
                                "op": "replace",
                                "value": {
                                    "active": false
                                }
                            }
                        ]
                    },
                    "groups": {
                        "type": "array",
                        "items": {
                            "type": "object",
                            "properties": {
                                "value": {
                                    "type": "string"
                                },
                                "display": {
                                    "type": "string"
                                }
                            }
                        },
                        "description": "associated groups"
                    },
                    "roles": {
                        "type": "array",
                        "items": {
                            "type": "object",
                            "properties": {
                                "value": {
                                    "type": "string"
                                },
                                "primary": {
                                    "type": "boolean"
                                },
                                "type": {
                                    "type": "string"
                                },
                                "display": {
                                    "type": "string"
                                }
                            }
                        }
                    }
                },
                "description": "SCIM \\/Users provisioning endpoints"
            }
        }
    },
    "description": "SCIM User List"
}';
    public const SCHEMA_TITLE        = 'SCIM User List';
    public const SCHEMA_DESCRIPTION  = 'SCIM User List';
    public const SCHEMA_EXAMPLE_DATA = '{
    "schemas": [
        "generated"
    ],
    "totalResults": 3,
    "itemsPerPage": 10,
    "startIndex": 1,
    "Resources": [
        {
            "schemas": [
                "generated"
            ],
            "id": "1b78eada-9baa-11e6-9eb6-a431576d590e",
            "externalId": "a7b0f98395",
            "userName": "someone@example.com",
            "displayName": "Jon Doe",
            "name": {
                "givenName": "Jane",
                "familyName": "User",
                "formatted": "generated"
            },
            "emails": [
                {
                    "value": "another@example.com",
                    "primary": false,
                    "type": "generated"
                },
                {
                    "value": "another@example.com",
                    "primary": false,
                    "type": "generated"
                }
            ],
            "active": true,
            "meta": {
                "resourceType": "User",
                "created": "2019-01-24T22:45:36.000Z",
                "lastModified": "2019-01-24T22:45:36.000Z",
                "location": "https:\\/\\/api.github.com\\/scim\\/v2\\/organizations\\/myorg-123abc55141bfd8f\\/Users\\/c42772b5-2029-11e9-8543-9264a97dec8d"
            },
            "organization_id": 15,
            "operations": [
                {
                    "op": "replace",
                    "path": "generated",
                    "value": {
                        "0": null,
                        "active": false
                    }
                }
            ],
            "groups": [
                {
                    "value": "generated",
                    "display": "generated"
                },
                {
                    "value": "generated",
                    "display": "generated"
                }
            ],
            "roles": [
                {
                    "value": "generated",
                    "primary": false,
                    "type": "generated",
                    "display": "generated"
                },
                {
                    "value": "generated",
                    "primary": false,
                    "type": "generated",
                    "display": "generated"
                }
            ]
        },
        {
            "schemas": [
                "generated"
            ],
            "id": "1b78eada-9baa-11e6-9eb6-a431576d590e",
            "externalId": "a7b0f98395",
            "userName": "someone@example.com",
            "displayName": "Jon Doe",
            "name": {
                "givenName": "Jane",
                "familyName": "User",
                "formatted": "generated"
            },
            "emails": [
                {
                    "value": "another@example.com",
                    "primary": false,
                    "type": "generated"
                },
                {
                    "value": "another@example.com",
                    "primary": false,
                    "type": "generated"
                }
            ],
            "active": true,
            "meta": {
                "resourceType": "User",
                "created": "2019-01-24T22:45:36.000Z",
                "lastModified": "2019-01-24T22:45:36.000Z",
                "location": "https:\\/\\/api.github.com\\/scim\\/v2\\/organizations\\/myorg-123abc55141bfd8f\\/Users\\/c42772b5-2029-11e9-8543-9264a97dec8d"
            },
            "organization_id": 15,
            "operations": [
                {
                    "op": "replace",
                    "path": "generated",
                    "value": {
                        "0": null,
                        "active": false
                    }
                }
            ],
            "groups": [
                {
                    "value": "generated",
                    "display": "generated"
                },
                {
                    "value": "generated",
                    "display": "generated"
                }
            ],
            "roles": [
                {
                    "value": "generated",
                    "primary": false,
                    "type": "generated",
                    "display": "generated"
                },
                {
                    "value": "generated",
                    "primary": false,
                    "type": "generated",
                    "display": "generated"
                }
            ]
        }
    ]
}';

    /**
     * schemas: SCIM schema used.
     */
    public function __construct(public array $schemas, public int $totalResults, public int $itemsPerPage, public int $startIndex, #[MapFrom('Resources')]
    public array $resources,)
    {
    }
}
