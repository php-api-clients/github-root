<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\OauthAuthorizations\UpdateAuthorization\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"scopes":{"type":["array","null"],"items":{"type":"string"},"description":"A list of scopes that this authorization is in.","examples":["public_repo","user"]},"add_scopes":{"type":"array","items":{"type":"string"},"description":"A list of scopes to add to this authorization."},"remove_scopes":{"type":"array","items":{"type":"string"},"description":"A list of scopes to remove from this authorization."},"note":{"type":"string","description":"A note to remind you what the OAuth token is for.","examples":["Update all gems"]},"note_url":{"type":"string","description":"A URL to remind you what app the OAuth token is for."},"fingerprint":{"type":"string","description":"A unique string to distinguish an authorization from others created for the same client ID and user."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"scopes":["public_repo"],"add_scopes":["generated_add_scopes_null"],"remove_scopes":["generated_remove_scopes_null"],"note":"Update all gems","note_url":"generated_note_url_null","fingerprint":"generated_fingerprint_null"}';
    /**
     * scopes: A list of scopes that this authorization is in.
     * @param ?array<string> $scopes
     * addScopes: A list of scopes to add to this authorization.
     * @param ?array<string> $addScopes
     * removeScopes: A list of scopes to remove from this authorization.
     * @param ?array<string> $removeScopes
     * note: A note to remind you what the OAuth token is for.
     * noteUrl: A URL to remind you what app the OAuth token is for.
     * fingerprint: A unique string to distinguish an authorization from others created for the same client ID and user.
     */
    public function __construct(public ?array $scopes, #[\EventSauce\ObjectHydrator\MapFrom('add_scopes')] public ?array $addScopes, #[\EventSauce\ObjectHydrator\MapFrom('remove_scopes')] public ?array $removeScopes, public ?string $note, #[\EventSauce\ObjectHydrator\MapFrom('note_url')] public ?string $noteUrl, public ?string $fingerprint)
    {
    }
}
