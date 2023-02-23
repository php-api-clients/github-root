<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\PublicUser;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Plan
{
    public const SCHEMA_JSON = '{"required":["collaborators","name","space","private_repos"],"type":"object","properties":{"collaborators":{"type":"integer"},"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"collaborators":13,"name":"generated_name","space":13,"private_repos":13}';
    public ?int $collaborators;
    public ?string $name;
    public ?int $space;
    public ?int $private_repos;
    public function __construct(int $collaborators, string $name, int $space, int $private_repos)
    {
        $this->collaborators = $collaborators;
        $this->name = $name;
        $this->space = $space;
        $this->private_repos = $private_repos;
    }
}
