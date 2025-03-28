<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ScimEnterpriseGroupList
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
                            "schemas"
                        ],
                        "type": "object",
                        "properties": {
                            "schemas": {
                                "type": "array",
                                "items": {
                                    "enum": [
                                        "urn:ietf:params:scim:schemas:core:2.0:Group",
                                        "urn:ietf:params:scim:api:messages:2.0:ListResponse"
                                    ],
                                    "type": "string"
                                },
                                "description": "The URIs that are used to indicate the namespaces of the SCIM schemas.",
                                "examples": [
                                    "urn:ietf:params:scim:schemas:core:2.0:Group"
                                ]
                            },
                            "externalId": {
                                "type": [
                                    "string",
                                    "null"
                                ],
                                "description": "A unique identifier for the resource as defined by the provisioning client.",
                                "examples": [
                                    "8aa1a0c0-c4c3-4bc0-b4a5-2ef676900159"
                                ]
                            },
                            "displayName": {
                                "type": [
                                    "string",
                                    "null"
                                ],
                                "description": "A human-readable name for a security group.",
                                "examples": [
                                    "Engineering"
                                ]
                            },
                            "members": {
                                "type": "array",
                                "items": {
                                    "required": [
                                        "value",
                                        "$ref"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "value": {
                                            "type": "string",
                                            "description": "The local unique identifier for the member",
                                            "examples": [
                                                "23a35c27-23d3-4c03-b4c5-6443c09e7173"
                                            ]
                                        },
                                        "$ref": {
                                            "type": "string"
                                        },
                                        "display": {
                                            "type": "string",
                                            "description": "The display name associated with the member",
                                            "examples": [
                                                "Monalisa Octocat"
                                            ]
                                        }
                                    }
                                },
                                "description": "The group members."
                            }
                        }
                    },
                    {
                        "type": "object",
                        "properties": {
                            "id": {
                                "type": "string",
                                "description": "The internally generated id for the group object.",
                                "examples": [
                                    "7fce0092-d52e-4f76-b727-3955bd72c939"
                                ]
                            },
                            "members": {
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
                                "description": "The security group members.",
                                "examples": [
                                    {
                                        "value": "879db59-3bdf-4490-ad68-ab880a2694745",
                                        "$+ref": "https:\\/\\/api.github.localhost\\/scim\\/v2\\/Users\\/879db59-3bdf-4490-ad68-ab880a2694745",
                                        "displayName": "User 1"
                                    },
                                    {
                                        "value": "0db508eb-91e2-46e4-809c-30dcbda0c685",
                                        "$+ref": "https:\\/\\/api.github.localhost\\/scim\\/v2\\/Users\\/0db508eb-91e2-46e4-809c-30dcbda0c685",
                                        "displayName": "User 2"
                                    }
                                ]
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
            "description": "Information about each provisioned group."
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
                "urn:ietf:params:scim:schemas:core:2.0:Group",
                "urn:ietf:params:scim:schemas:core:2.0:Group"
            ],
            "externalId": "8aa1a0c0-c4c3-4bc0-b4a5-2ef676900159",
            "displayName": "Engineering",
            "members": [
                {
                    "value": "23a35c27-23d3-4c03-b4c5-6443c09e7173",
                    "$ref": "generated",
                    "display": "Monalisa Octocat"
                },
                {
                    "value": "23a35c27-23d3-4c03-b4c5-6443c09e7173",
                    "$ref": "generated",
                    "display": "Monalisa Octocat"
                }
            ]
        },
        {
            "schemas": [
                "urn:ietf:params:scim:schemas:core:2.0:Group",
                "urn:ietf:params:scim:schemas:core:2.0:Group"
            ],
            "externalId": "8aa1a0c0-c4c3-4bc0-b4a5-2ef676900159",
            "displayName": "Engineering",
            "members": [
                {
                    "value": "23a35c27-23d3-4c03-b4c5-6443c09e7173",
                    "$ref": "generated",
                    "display": "Monalisa Octocat"
                },
                {
                    "value": "23a35c27-23d3-4c03-b4c5-6443c09e7173",
                    "$ref": "generated",
                    "display": "Monalisa Octocat"
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
     * resources: Information about each provisioned group.
     * startIndex: A starting index for the returned page
     * itemsPerPage: Number of objects per page
     */
    public function __construct(public array $schemas, public int $totalResults, #[MapFrom('Resources')]
    public array $resources, public int $startIndex, public int $itemsPerPage,)
    {
    }
}
