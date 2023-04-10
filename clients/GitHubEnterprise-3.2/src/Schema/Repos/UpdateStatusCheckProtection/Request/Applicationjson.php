<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\UpdateStatusCheckProtection\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"strict":{"type":"boolean","description":"Require branches to be up to date before merging."},"contexts":{"type":"array","items":{"type":"string"},"description":"The list of status checks to require in order to merge into this branch","deprecated":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"strict":false,"contexts":["generated_contexts_null"]}';
    /**
     * strict: Require branches to be up to date before merging.
     * contexts: The list of status checks to require in order to merge into this branch
     * @param ?array<string> $contexts
     */
    public function __construct(public ?bool $strict, public ?array $contexts)
    {
    }
}
