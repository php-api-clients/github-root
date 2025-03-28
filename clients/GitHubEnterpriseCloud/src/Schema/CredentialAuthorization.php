<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CredentialAuthorization
{
    public const SCHEMA_JSON         = '{
    "title": "Credential Authorization",
    "required": [
        "login",
        "credential_id",
        "credential_type",
        "credential_authorized_at",
        "credential_accessed_at",
        "authorized_credential_id"
    ],
    "type": "object",
    "properties": {
        "login": {
            "type": "string",
            "description": "User login that owns the underlying credential.",
            "examples": [
                "monalisa"
            ]
        },
        "credential_id": {
            "type": "integer",
            "description": "Unique identifier for the authorization of the credential. Use this to revoke authorization of the underlying token or key.",
            "examples": [
                1
            ]
        },
        "credential_type": {
            "type": "string",
            "description": "Human-readable description of the credential type.",
            "examples": [
                "SSH Key"
            ]
        },
        "token_last_eight": {
            "type": "string",
            "description": "Last eight characters of the credential. Only included in responses with credential_type of personal access token.",
            "examples": [
                "12345678"
            ]
        },
        "credential_authorized_at": {
            "type": "string",
            "description": "Date when the credential was authorized for use.",
            "format": "date-time",
            "examples": [
                "2011-01-26T19:06:43Z"
            ]
        },
        "scopes": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "List of oauth scopes the token has been granted.",
            "examples": [
                "user",
                "repo"
            ]
        },
        "fingerprint": {
            "type": "string",
            "description": "Unique string to distinguish the credential. Only included in responses with credential_type of SSH Key.",
            "examples": [
                "jklmnop12345678"
            ]
        },
        "credential_accessed_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "Date when the credential was last accessed. May be null if it was never accessed",
            "format": "date-time",
            "examples": [
                "2011-01-26T19:06:43Z"
            ]
        },
        "authorized_credential_id": {
            "type": [
                "integer",
                "null"
            ],
            "description": "The ID of the underlying token that was authorized by the user. This will remain unchanged across authorizations of the token.",
            "examples": [
                12345678
            ]
        },
        "authorized_credential_title": {
            "type": [
                "string",
                "null"
            ],
            "description": "The title given to the ssh key. This will only be present when the credential is an ssh key.",
            "examples": [
                "my ssh key"
            ]
        },
        "authorized_credential_note": {
            "type": [
                "string",
                "null"
            ],
            "description": "The note given to the token. This will only be present when the credential is a token.",
            "examples": [
                "my token"
            ]
        },
        "authorized_credential_expires_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The expiry for the token. This will only be present when the credential is a token.",
            "format": "date-time"
        }
    },
    "description": "Credential Authorization"
}';
    public const SCHEMA_TITLE        = 'Credential Authorization';
    public const SCHEMA_DESCRIPTION  = 'Credential Authorization';
    public const SCHEMA_EXAMPLE_DATA = '{
    "login": "monalisa",
    "credential_id": 1,
    "credential_type": "SSH Key",
    "token_last_eight": "12345678",
    "credential_authorized_at": "2011-01-26T19:06:43Z",
    "scopes": [
        "repo",
        "repo"
    ],
    "fingerprint": "jklmnop12345678",
    "credential_accessed_at": "2011-01-26T19:06:43Z",
    "authorized_credential_id": 12345678,
    "authorized_credential_title": "my ssh key",
    "authorized_credential_note": "my token",
    "authorized_credential_expires_at": "1970-01-01T00:00:00+00:00"
}';

    /**
     * login: User login that owns the underlying credential.
     * credentialId: Unique identifier for the authorization of the credential. Use this to revoke authorization of the underlying token or key.
     * credentialType: Human-readable description of the credential type.
     * tokenLastEight: Last eight characters of the credential. Only included in responses with credential_type of personal access token.
     * credentialAuthorizedAt: Date when the credential was authorized for use.
     * scopes: List of oauth scopes the token has been granted.
     * fingerprint: Unique string to distinguish the credential. Only included in responses with credential_type of SSH Key.
     * credentialAccessedAt: Date when the credential was last accessed. May be null if it was never accessed
     * authorizedCredentialId: The ID of the underlying token that was authorized by the user. This will remain unchanged across authorizations of the token.
     * authorizedCredentialTitle: The title given to the ssh key. This will only be present when the credential is an ssh key.
     * authorizedCredentialNote: The note given to the token. This will only be present when the credential is a token.
     * authorizedCredentialExpiresAt: The expiry for the token. This will only be present when the credential is a token.
     */
    public function __construct(public string $login, #[MapFrom('credential_id')]
    public int $credentialId, #[MapFrom('credential_type')]
    public string $credentialType, #[MapFrom('token_last_eight')]
    public string|null $tokenLastEight, #[MapFrom('credential_authorized_at')]
    public string $credentialAuthorizedAt, public array|null $scopes, public string|null $fingerprint, #[MapFrom('credential_accessed_at')]
    public string|null $credentialAccessedAt, #[MapFrom('authorized_credential_id')]
    public int|null $authorizedCredentialId, #[MapFrom('authorized_credential_title')]
    public string|null $authorizedCredentialTitle, #[MapFrom('authorized_credential_note')]
    public string|null $authorizedCredentialNote, #[MapFrom('authorized_credential_expires_at')]
    public string|null $authorizedCredentialExpiresAt,)
    {
    }
}
