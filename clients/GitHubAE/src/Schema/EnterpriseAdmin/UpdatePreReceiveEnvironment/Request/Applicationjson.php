<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\EnterpriseAdmin\UpdatePreReceiveEnvironment\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"This pre-receive environment\'s new name."},"image_url":{"type":"string","description":"URL from which to download a tarball of this environment."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","image_url":"generated_image_url"}';
    /**
     * This pre-receive environment's new name.
     */
    public ?string $name;
    /**
     * URL from which to download a tarball of this environment.
     */
    public ?string $image_url;
    public function __construct(string $name, string $image_url)
    {
        $this->name = $name;
        $this->image_url = $image_url;
    }
}
