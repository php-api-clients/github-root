<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["client_secret"],"type":"object","properties":{"client_secret":{"maxLength":40,"type":"string","description":"The OAuth app client secret for which to create the token."},"scopes":{"type":["array","null"],"items":{"type":"string"},"description":"A list of scopes that this authorization is in.","examples":["public_repo","user"]},"note":{"type":"string","description":"A note to remind you what the OAuth token is for.","examples":["Update all gems"]},"note_url":{"type":"string","description":"A URL to remind you what app the OAuth token is for."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"client_secret":"generated_client_secret","scopes":["public_repo"],"note":"Update all gems","note_url":"generated_note_url"}';
    /**
     * client_secret: The OAuth app client secret for which to create the token.
     * scopes: A list of scopes that this authorization is in.
     * @param ?array<string> $scopes
     * note: A note to remind you what the OAuth token is for.
     * note_url: A URL to remind you what app the OAuth token is for.
     */
    public function __construct(public ?string $client_secret, public ?array $scopes, public string $note, public string $note_url)
    {
    }
}
