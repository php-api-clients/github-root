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
    public const SCHEMA_EXAMPLE_DATA = '{"client_secret":"generated_client_secret","scopes":["user"],"note":"Update all gems","note_url":"generated_note_url"}';
    /**
     * The OAuth app client secret for which to create the token.
     */
    public ?string $client_secret;
    /**
     * A list of scopes that this authorization is in.
     * @var array<string>
     */
    public ?array $scopes;
    /**
     * A note to remind you what the OAuth token is for.
     */
    public string $note;
    /**
     * A URL to remind you what app the OAuth token is for.
     */
    public string $note_url;
    public function __construct(string $client_secret, array $scopes, string $note, string $note_url)
    {
        $this->client_secret = $client_secret;
        $this->scopes = $scopes;
        $this->note = $note;
        $this->note_url = $note_url;
    }
}
