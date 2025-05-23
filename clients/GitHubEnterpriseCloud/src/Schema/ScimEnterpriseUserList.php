<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ScimEnterpriseUserList
{
    public const SCHEMA_JSON         = '{
    "required": [
        "schemas",
        "totalResults",
        "Resources",
        "startIndex",
        "itemsPerPage"
    ],
    "type": "object",
    "properties": {
        "schemas": {
            "type": "array",
            "items": {
                "enum": [
                    "urn:ietf:params:scim:api:messages:2.0:ListResponse"
                ],
                "type": "string"
            },
            "description": "The URIs that are used to indicate the namespaces of the list SCIM schemas.",
            "examples": [
                "urn:ietf:params:scim:api:messages:2.0:ListResponse"
            ]
        },
        "totalResults": {
            "type": "integer",
            "description": "Number of results found",
            "examples": [
                1
            ]
        },
        "Resources": {
            "type": "array",
            "items": {
                "allOf": [
                    {
                        "required": [
                            "schemas",
                            "active",
                            "emails"
                        ],
                        "type": "object",
                        "properties": {
                            "schemas": {
                                "type": "array",
                                "items": {
                                    "enum": [
                                        "urn:ietf:params:scim:schemas:core:2.0:User"
                                    ],
                                    "type": "string"
                                },
                                "description": "The URIs that are used to indicate the namespaces of the SCIM schemas.",
                                "examples": [
                                    "urn:ietf:params:scim:schemas:core:2.0:User"
                                ]
                            },
                            "externalId": {
                                "type": [
                                    "string",
                                    "null"
                                ],
                                "description": "A unique identifier for the resource as defined by the provisioning client.",
                                "examples": [
                                    "E012345"
                                ]
                            },
                            "active": {
                                "type": "boolean",
                                "description": "Whether the user active in the IdP.",
                                "examples": [
                                    true
                                ]
                            },
                            "userName": {
                                "type": "string",
                                "description": "The username for the user.",
                                "examples": [
                                    "E012345"
                                ]
                            },
                            "name": {
                                "type": "object",
                                "properties": {
                                    "formatted": {
                                        "type": "string",
                                        "description": "The full name, including all middle names, titles, and suffixes as appropriate, formatted for display.",
                                        "examples": [
                                            "Ms. Mona Lisa Octocat"
                                        ]
                                    },
                                    "familyName": {
                                        "type": "string",
                                        "description": "The family name of the user.",
                                        "examples": [
                                            "Octocat"
                                        ]
                                    },
                                    "givenName": {
                                        "type": "string",
                                        "description": "The given name of the user.",
                                        "examples": [
                                            "Mona"
                                        ]
                                    },
                                    "middleName": {
                                        "type": "string",
                                        "description": "The middle name(s) of the user.",
                                        "examples": [
                                            "Lisa"
                                        ]
                                    }
                                }
                            },
                            "displayName": {
                                "type": [
                                    "string",
                                    "null"
                                ],
                                "description": "A human-readable name for the user.",
                                "examples": [
                                    "Mona Lisa"
                                ]
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
                                            "type": "string",
                                            "description": "The email address.",
                                            "examples": [
                                                "mlisa@example.com"
                                            ]
                                        },
                                        "type": {
                                            "type": "string",
                                            "description": "The type of email address.",
                                            "examples": [
                                                "work"
                                            ]
                                        },
                                        "primary": {
                                            "type": "boolean",
                                            "description": "Whether this email address is the primary address.",
                                            "examples": [
                                                true
                                            ]
                                        }
                                    }
                                },
                                "description": "The emails for the user."
                            },
                            "roles": {
                                "type": "array",
                                "items": {
                                    "required": [
                                        "value"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "display": {
                                            "type": "string"
                                        },
                                        "type": {
                                            "type": "string"
                                        },
                                        "value": {
                                            "enum": [
                                                "user",
                                                "27d9891d-2c17-4f45-a262-781a0e55c80a",
                                                "guest_collaborator",
                                                "1ebc4a02-e56c-43a6-92a5-02ee09b90824",
                                                "enterprise_owner",
                                                "981df190-8801-4618-a08a-d91f6206c954",
                                                "ba4987ab-a1c3-412a-b58c-360fc407cb10",
                                                "billing_manager",
                                                "0e338b8c-cc7f-498a-928d-ea3470d7e7e3",
                                                "e6be2762-e4ad-4108-b72d-1bbe884a0f91"
                                            ],
                                            "type": "string",
                                            "description": "The role value representing a user role in GitHub.",
                                            "examples": [
                                                "user"
                                            ]
                                        },
                                        "primary": {
                                            "type": "boolean",
                                            "description": "Is the role a primary role for the user.",
                                            "examples": [
                                                false
                                            ]
                                        }
                                    }
                                },
                                "description": "The roles assigned to the user."
                            }
                        }
                    },
                    {
                        "required": [
                            "id",
                            "meta"
                        ],
                        "type": "object",
                        "properties": {
                            "id": {
                                "type": "string",
                                "description": "The internally generated id for the user object.",
                                "examples": [
                                    "7fce0092-d52e-4f76-b727-3955bd72c939"
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
                                        "$ref": {
                                            "type": "string"
                                        },
                                        "display": {
                                            "type": "string"
                                        }
                                    }
                                },
                                "description": "Provisioned SCIM groups that the user is a member of."
                            },
                            "meta": {
                                "required": [
                                    "resourceType"
                                ],
                                "type": "object",
                                "properties": {
                                    "resourceType": {
                                        "enum": [
                                            "User",
                                            "Group"
                                        ],
                                        "type": "string",
                                        "description": "A type of a resource",
                                        "examples": [
                                            "User"
                                        ]
                                    },
                                    "created": {
                                        "type": "string",
                                        "description": "A date and time when the user was created.",
                                        "examples": [
                                            "2022-03-27T19:59:26.000Z"
                                        ]
                                    },
                                    "lastModified": {
                                        "type": "string",
                                        "description": "A data and time when the user was last modified.",
                                        "examples": [
                                            "2022-03-27T19:59:26.000Z"
                                        ]
                                    },
                                    "location": {
                                        "type": "string",
                                        "description": "A URL location of an object"
                                    }
                                },
                                "description": "The metadata associated with the creation\\/updates to the user."
                            }
                        }
                    }
                ]
            },
            "description": "Information about each provisioned account."
        },
        "startIndex": {
            "type": "integer",
            "description": "A starting index for the returned page",
            "examples": [
                1
            ]
        },
        "itemsPerPage": {
            "type": "integer",
            "description": "Number of objects per page",
            "examples": [
                20
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "schemas": [
        "urn:ietf:params:scim:api:messages:2.0:ListResponse",
        "urn:ietf:params:scim:api:messages:2.0:ListResponse"
    ],
    "totalResults": 1,
    "Resources": [
        {
            "schemas": [
                "urn:ietf:params:scim:schemas:core:2.0:User",
                "urn:ietf:params:scim:schemas:core:2.0:User"
            ],
            "externalId": "E012345",
            "active": true,
            "userName": "E012345",
            "name": {
                "formatted": "Ms. Mona Lisa Octocat",
                "familyName": "Octocat",
                "givenName": "Mona",
                "middleName": "Lisa"
            },
            "displayName": "Mona Lisa",
            "emails": [
                {
                    "value": "mlisa@example.com",
                    "type": "work",
                    "primary": true
                },
                {
                    "value": "mlisa@example.com",
                    "type": "work",
                    "primary": true
                }
            ],
            "roles": [
                {
                    "display": "generated",
                    "type": "generated",
                    "value": "user",
                    "primary": false
                },
                {
                    "display": "generated",
                    "type": "generated",
                    "value": "user",
                    "primary": false
                }
            ]
        },
        {
            "schemas": [
                "urn:ietf:params:scim:schemas:core:2.0:User",
                "urn:ietf:params:scim:schemas:core:2.0:User"
            ],
            "externalId": "E012345",
            "active": true,
            "userName": "E012345",
            "name": {
                "formatted": "Ms. Mona Lisa Octocat",
                "familyName": "Octocat",
                "givenName": "Mona",
                "middleName": "Lisa"
            },
            "displayName": "Mona Lisa",
            "emails": [
                {
                    "value": "mlisa@example.com",
                    "type": "work",
                    "primary": true
                },
                {
                    "value": "mlisa@example.com",
                    "type": "work",
                    "primary": true
                }
            ],
            "roles": [
                {
                    "display": "generated",
                    "type": "generated",
                    "value": "user",
                    "primary": false
                },
                {
                    "display": "generated",
                    "type": "generated",
                    "value": "user",
                    "primary": false
                }
            ]
        }
    ],
    "startIndex": 1,
    "itemsPerPage": 20
}';

    /**
     * schemas: The URIs that are used to indicate the namespaces of the list SCIM schemas.
     * totalResults: Number of results found
     * resources: Information about each provisioned account.
     * startIndex: A starting index for the returned page
     * itemsPerPage: Number of objects per page
     */
    public function __construct(public array $schemas, public int $totalResults, #[MapFrom('Resources')]
    public array $resources, public int $startIndex, public int $itemsPerPage,)
    {
    }
}
