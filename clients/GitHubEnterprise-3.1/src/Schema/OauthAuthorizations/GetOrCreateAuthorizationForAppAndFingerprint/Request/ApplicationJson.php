<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["client_secret"],"type":"object","properties":{"client_secret":{"maxLength":40,"type":"string","description":"The OAuth app client secret for which to create the token."},"scopes":{"type":["array","null"],"items":{"type":"string"},"description":"A list of scopes that this authorization is in.","examples":["public_repo","user"]},"note":{"type":"string","description":"A note to remind you what the OAuth token is for.","examples":["Update all gems"]},"note_url":{"type":"string","description":"A URL to remind you what app the OAuth token is for."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"client_secret":"generated","scopes":"user","note":"Update all gems","note_url":"generated"}';

    /**
     * clientSecret: The OAuth app client secret for which to create the token.
     * scopes: A list of scopes that this authorization is in.
     * note: A note to remind you what the OAuth token is for.
     * noteUrl: A URL to remind you what app the OAuth token is for.
     */
    public function __construct(#[MapFrom('client_secret')] public string $clientSecret, public ?array $scopes, public ?string $note, #[MapFrom('note_url')] public ?string $noteUrl)
    {
    }
}
