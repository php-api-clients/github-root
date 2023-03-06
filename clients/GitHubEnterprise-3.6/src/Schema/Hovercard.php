<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Hovercard
{
    public const SCHEMA_JSON = '{"title":"Hovercard","required":["contexts"],"type":"object","properties":{"contexts":{"type":"array","items":{"required":["message","octicon"],"type":"object","properties":{"message":{"type":"string"},"octicon":{"type":"string"}}}}},"description":"Hovercard"}';
    public const SCHEMA_TITLE = 'Hovercard';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    public const SCHEMA_EXAMPLE_DATA = '{"contexts":[{"message":"generated_message","octicon":"generated_octicon"}]}';
    /**
     * @var array<Schema\Hovercard\Contexts>
     */
    public ?array $contexts;
    public function __construct(array $contexts)
    {
        $this->contexts = $contexts;
    }
}
