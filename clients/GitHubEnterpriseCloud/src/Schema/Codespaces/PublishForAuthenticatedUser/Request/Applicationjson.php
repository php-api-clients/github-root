<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Codespaces\PublishForAuthenticatedUser\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"A name for the new repository."},"private":{"type":"boolean","description":"Whether the new repository should be private.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","private":false}';
    /**
     * A name for the new repository.
     */
    public ?string $name;
    /**
     * Whether the new repository should be private.
     */
    public ?bool $private;
    public function __construct(string $name, bool $private)
    {
        $this->name = $name;
        $this->private = $private;
    }
}
