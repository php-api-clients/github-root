<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class ReactionRollup
{
    public const SCHEMA_JSON = '{"title":"Reaction Rollup","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"total_count":{"type":"integer"},"+1":{"type":"integer"},"-1":{"type":"integer"},"laugh":{"type":"integer"},"confused":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"eyes":{"type":"integer"},"rocket":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Reaction Rollup';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url","total_count":13,"_PLUSES_1":13,"_MINUS_1":13,"laugh":13,"confused":13,"heart":13,"hooray":13,"eyes":13,"rocket":13}';
    public function __construct(public string $url, public int $total_count, public int $_PLUSES_1, public int $_MINUS_1, public int $laugh, public int $confused, public int $heart, public int $hooray, public int $eyes, public int $rocket)
    {
    }
}
