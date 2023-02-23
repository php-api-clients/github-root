<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookInstallationCreated;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Repositories
{
    public const SCHEMA_JSON = '{"required":["id","node_id","name","full_name","private"],"type":"object","properties":{"full_name":{"type":"string"},"id":{"type":"integer","description":"Unique identifier of the repository"},"name":{"type":"string","description":"The name of the repository."},"node_id":{"type":"string"},"private":{"type":"boolean","description":"Whether the repository is private or public."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"full_name":"generated_full_name","id":13,"name":"generated_name","node_id":"generated_node_id","private":false}';
    public ?string $full_name;
    /**
     * Unique identifier of the repository
     */
    public ?int $id;
    /**
     * The name of the repository.
     */
    public ?string $name;
    public ?string $node_id;
    /**
     * Whether the repository is private or public.
     */
    public ?bool $private;
    public function __construct(string $full_name, int $id, string $name, string $node_id, bool $private)
    {
        $this->full_name = $full_name;
        $this->id = $id;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->private = $private;
    }
}
