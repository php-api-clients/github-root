<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Apps\CheckToken\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["access_token"],"type":"object","properties":{"access_token":{"type":"string","description":"The access_token of the OAuth or GitHub application."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"access_token":"generated_access_token"}';
    /**
     * The access_token of the OAuth or GitHub application.
     */
    public ?string $access_token;
    public function __construct(string $access_token)
    {
        $this->access_token = $access_token;
    }
}
