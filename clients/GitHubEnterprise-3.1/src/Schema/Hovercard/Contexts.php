<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Hovercard;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Contexts
{
    public const SCHEMA_JSON = '{"required":["message","octicon"],"type":"object","properties":{"message":{"type":"string"},"octicon":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message","octicon":"generated_octicon"}';
    public ?string $message;
    public ?string $octicon;
    public function __construct(string $message, string $octicon)
    {
        $this->message = $message;
        $this->octicon = $octicon;
    }
}
