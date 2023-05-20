<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\OauthAuthorizations\UpdateAuthorization\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"scopes":{"type":["array","null"],"items":{"type":"string"},"description":"A list of scopes that this authorization is in.","examples":["public_repo","user"]},"add_scopes":{"type":"array","items":{"type":"string"},"description":"A list of scopes to add to this authorization."},"remove_scopes":{"type":"array","items":{"type":"string"},"description":"A list of scopes to remove from this authorization."},"note":{"type":"string","description":"A note to remind you what the OAuth token is for.","examples":["Update all gems"]},"note_url":{"type":"string","description":"A URL to remind you what app the OAuth token is for."},"fingerprint":{"type":"string","description":"A unique string to distinguish an authorization from others created for the same client ID and user."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"scopes":"user","add_scopes":["generated","generated"],"remove_scopes":["generated","generated"],"note":"Update all gems","note_url":"generated","fingerprint":"generated"}';

    /**
     * scopes: A list of scopes that this authorization is in.
     * addScopes: A list of scopes to add to this authorization.
     * removeScopes: A list of scopes to remove from this authorization.
     * note: A note to remind you what the OAuth token is for.
     * noteUrl: A URL to remind you what app the OAuth token is for.
     * fingerprint: A unique string to distinguish an authorization from others created for the same client ID and user.
     */
    public function __construct(public ?array $scopes, #[MapFrom('add_scopes')] public ?array $addScopes, #[MapFrom('remove_scopes')] public ?array $removeScopes, public ?string $note, #[MapFrom('note_url')] public ?string $noteUrl, public ?string $fingerprint)
    {
    }
}
