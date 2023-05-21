<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\UpdateStatusCheckProtection\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"strict":{"type":"boolean","description":"Require branches to be up to date before merging."},"contexts":{"type":"array","items":{"type":"string"},"description":"The list of status checks to require in order to merge into this branch","deprecated":true}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"strict":false,"contexts":["generated","generated"]}';

    /**
     * strict: Require branches to be up to date before merging.
     * contexts: The list of status checks to require in order to merge into this branch
     */
    public function __construct(public ?bool $strict, public ?array $contexts)
    {
    }
}
