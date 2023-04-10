<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\DependencyGraphSpdxSbom\Sbom;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class CreationInfo
{
    public const SCHEMA_JSON = '{"required":["created","creators"],"type":"object","properties":{"created":{"type":"string","description":"The date and time the SPDX document was created.","examples":["2021-11-03T00:00:00Z"]},"creators":{"type":"array","items":{"type":"string","examples":["GitHub"]},"description":"The tools that were used to generate the SPDX document."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"created":"2021-11-03T00:00:00Z","creators":["generated_creators_null"]}';
    /**
     * created: The date and time the SPDX document was created.
     * creators: The tools that were used to generate the SPDX document.
     * @param array<string> $creators
     */
    public function __construct(public string $created, public array $creators)
    {
    }
}
