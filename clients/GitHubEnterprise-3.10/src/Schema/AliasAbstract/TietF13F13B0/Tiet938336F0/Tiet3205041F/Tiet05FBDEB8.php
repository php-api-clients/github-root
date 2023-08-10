<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\TietF13F13B0\Tiet938336F0\Tiet3205041F;

abstract readonly class Tiet05FBDEB8
{
    public const SCHEMA_JSON         = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","-1","laugh","confused","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/enterprise-server@3.10\\/rest\\/reference\\/reactions#reaction-types) to add to the team discussion."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"content":"+1"}';

    /**
     * content: The [reaction type](https://docs.github.com/enterprise-server@3.10/rest/reference/reactions#reaction-types) to add to the team discussion.
     */
    public function __construct(public string $content)
    {
    }
}
