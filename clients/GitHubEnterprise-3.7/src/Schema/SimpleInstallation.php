<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class SimpleInstallation
{
    public const SCHEMA_JSON = '{"title":"Simple Installation","required":["id","node_id"],"type":"object","properties":{"id":{"type":"integer","description":"The ID of the installation.","examples":[1]},"node_id":{"type":"string","description":"The global node ID of the installation.","examples":["MDQ6VXNlcjU4MzIzMQ=="]}},"description":"The GitHub App installation. This property is included when the event is configured for and sent to a GitHub App."}';
    public const SCHEMA_TITLE = 'Simple Installation';
    public const SCHEMA_DESCRIPTION = 'The GitHub App installation. This property is included when the event is configured for and sent to a GitHub App.';
    public const SCHEMA_EXAMPLE_DATA = '{"id":1,"node_id":"MDQ6VXNlcjU4MzIzMQ=="}';
    /**
     * The ID of the installation.
     */
    public ?int $id;
    /**
     * The global node ID of the installation.
     */
    public ?string $node_id;
    public function __construct(int $id, string $node_id)
    {
        $this->id = $id;
        $this->node_id = $node_id;
    }
}
