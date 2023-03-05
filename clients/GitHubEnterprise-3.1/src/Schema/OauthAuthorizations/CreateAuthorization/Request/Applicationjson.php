<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\OauthAuthorizations\CreateAuthorization\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"scopes":{"type":["array","null"],"items":{"type":"string"},"description":"A list of scopes that this authorization is in.","examples":["public_repo","user"]},"note":{"type":"string","description":"A note to remind you what the OAuth token is for.","examples":["Update all gems"]},"note_url":{"type":"string","description":"A URL to remind you what app the OAuth token is for."},"client_id":{"maxLength":20,"type":"string","description":"The OAuth app client key for which to create the token."},"client_secret":{"maxLength":40,"type":"string","description":"The OAuth app client secret for which to create the token."},"fingerprint":{"type":"string","description":"A unique string to distinguish an authorization from others created for the same client ID and user."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"scopes":"user","note":"Update all gems","note_url":"generated_note_url","client_id":"generated_client_id","client_secret":"generated_client_secret","fingerprint":"generated_fingerprint"}';
    /**
     * A list of scopes that this authorization is in.
     */
    public ?array $scopes;
    /**
     * A note to remind you what the OAuth token is for.
     */
    public ?string $note;
    /**
     * A URL to remind you what app the OAuth token is for.
     */
    public ?string $note_url;
    /**
     * The OAuth app client key for which to create the token.
     */
    public ?string $client_id;
    /**
     * The OAuth app client secret for which to create the token.
     */
    public ?string $client_secret;
    /**
     * A unique string to distinguish an authorization from others created for the same client ID and user.
     */
    public ?string $fingerprint;
    public function __construct(array $scopes, string $note, string $note_url, string $client_id, string $client_secret, string $fingerprint)
    {
        $this->scopes = $scopes;
        $this->note = $note;
        $this->note_url = $note_url;
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
        $this->fingerprint = $fingerprint;
    }
}
