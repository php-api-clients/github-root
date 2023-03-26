<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\OauthAuthorizations\CreateAuthorization\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"scopes":{"type":["array","null"],"items":{"type":"string"},"description":"A list of scopes that this authorization is in.","examples":["public_repo","user"]},"note":{"type":"string","description":"A note to remind you what the OAuth token is for.","examples":["Update all gems"]},"note_url":{"type":"string","description":"A URL to remind you what app the OAuth token is for."},"client_id":{"maxLength":20,"type":"string","description":"The OAuth app client key for which to create the token."},"client_secret":{"maxLength":40,"type":"string","description":"The OAuth app client secret for which to create the token."},"fingerprint":{"type":"string","description":"A unique string to distinguish an authorization from others created for the same client ID and user."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"scopes":["public_repo"],"note":"Update all gems","note_url":"generated_note_url_null","client_id":"generated_client_id_null","client_secret":"generated_client_secret_null","fingerprint":"generated_fingerprint_null"}';
    /**
     * scopes: A list of scopes that this authorization is in.
     * @param ?array<string> $scopes
     * note: A note to remind you what the OAuth token is for.
     * noteUrl: A URL to remind you what app the OAuth token is for.
     * clientId: The OAuth app client key for which to create the token.
     * clientSecret: The OAuth app client secret for which to create the token.
     * fingerprint: A unique string to distinguish an authorization from others created for the same client ID and user.
     */
    public function __construct(public ?array $scopes, public ?string $note, #[\EventSauce\ObjectHydrator\MapFrom('note_url')] public ?string $noteUrl, #[\EventSauce\ObjectHydrator\MapFrom('client_id')] public ?string $clientId, #[\EventSauce\ObjectHydrator\MapFrom('client_secret')] public ?string $clientSecret, public ?string $fingerprint)
    {
    }
}
