<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookStatus\Commit;

final readonly class Commit implements \ApiClients\Client\GitHub\Contract\WebhookStatus\Commit\Commit
{
    const SCHEMA_JSON = '{
    "required": [
        "author",
        "committer",
        "message",
        "tree",
        "url",
        "comment_count",
        "verification"
    ],
    "type": "object",
    "properties": {
        "author": {
            "allOf": [
                {
                    "title": "Committer",
                    "required": [
                        "email",
                        "name"
                    ],
                    "type": "object",
                    "properties": {
                        "date": {
                            "type": "string",
                            "format": "date-time"
                        },
                        "email": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "email"
                        },
                        "name": {
                            "type": "string",
                            "description": "The git author\'s name."
                        },
                        "username": {
                            "type": "string"
                        }
                    },
                    "description": "Metaproperties for Git author\\/committer information."
                },
                {
                    "required": [
                        "date"
                    ],
                    "type": "object",
                    "properties": {
                        "date": {
                            "type": "string"
                        },
                        "email": {
                            "type": "string"
                        },
                        "name": {
                            "type": "string"
                        }
                    }
                }
            ]
        },
        "comment_count": {
            "type": "integer"
        },
        "committer": {
            "allOf": [
                {
                    "title": "Committer",
                    "required": [
                        "email",
                        "name"
                    ],
                    "type": "object",
                    "properties": {
                        "date": {
                            "type": "string",
                            "format": "date-time"
                        },
                        "email": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "email"
                        },
                        "name": {
                            "type": "string",
                            "description": "The git author\'s name."
                        },
                        "username": {
                            "type": "string"
                        }
                    },
                    "description": "Metaproperties for Git author\\/committer information."
                },
                {
                    "required": [
                        "date"
                    ],
                    "type": "object",
                    "properties": {
                        "date": {
                            "type": "string"
                        },
                        "email": {
                            "type": "string"
                        },
                        "name": {
                            "type": "string"
                        }
                    }
                }
            ]
        },
        "message": {
            "type": "string"
        },
        "tree": {
            "required": [
                "sha",
                "url"
            ],
            "type": "object",
            "properties": {
                "sha": {
                    "type": "string"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                }
            }
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "verification": {
            "required": [
                "verified",
                "reason",
                "signature",
                "payload"
            ],
            "type": "object",
            "properties": {
                "payload": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "reason": {
                    "enum": [
                        "expired_key",
                        "not_signing_key",
                        "gpgverify_error",
                        "gpgverify_unavailable",
                        "unsigned",
                        "unknown_signature_type",
                        "no_user",
                        "unverified_email",
                        "bad_email",
                        "unknown_key",
                        "malformed_signature",
                        "invalid",
                        "valid",
                        "bad_cert",
                        "ocsp_pending"
                    ],
                    "type": "string"
                },
                "signature": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "verified": {
                    "type": "boolean"
                },
                "verified_at": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "author": {
        "date": "generated",
        "email": "generated",
        "name": "generated",
        "username": "generated"
    },
    "comment_count": 13,
    "committer": {
        "date": "generated",
        "email": "generated",
        "name": "generated",
        "username": "generated"
    },
    "message": "generated",
    "tree": {
        "sha": "generated",
        "url": "https:\\/\\/example.com\\/"
    },
    "url": "https:\\/\\/example.com\\/",
    "verification": {
        "payload": "generated",
        "reason": "expired_key",
        "signature": "generated",
        "verified": false,
        "verified_at": "generated"
    }
}';
    public function __construct(public \ApiClients\Client\GitHub\Schema\WebhookStatus\Commit\Commit\Author $author, #[\EventSauce\ObjectHydrator\MapFrom('comment_count')] public int $commentCount, public \ApiClients\Client\GitHub\Schema\WebhookStatus\Commit\Commit\Committer $committer, public string $message, public \ApiClients\Client\GitHub\Schema\WebhookStatus\Commit\Commit\Tree $tree, public string $url, public \ApiClients\Client\GitHub\Schema\WebhookStatus\Commit\Commit\Verification $verification)
    {
    }
}
