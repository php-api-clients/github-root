<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Users\CreatePublicSshKeyForAuthenticatedUser\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["key"],"type":"object","properties":{"title":{"type":"string","description":"A descriptive name for the new key.","examples":["Personal MacBook Air"]},"key":{"pattern":"^ssh-(rsa|dss|ed25519) |^ecdsa-sha2-nistp(256|384|521) ","type":"string","description":"The public SSH key to add to your GitHub account."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"Personal MacBook Air","key":"generated_key"}';
    /**
     * A descriptive name for the new key.
     */
    public string $title;
    /**
     * The public SSH key to add to your GitHub account.
     */
    public ?string $key;
    public function __construct(string $title, string $key)
    {
        $this->title = $title;
        $this->key = $key;
    }
}
