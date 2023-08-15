<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\TietC2732743\Tiet145AE088\TietC34EBC7B;

abstract readonly class TietB90A120F
{
    public const SCHEMA_JSON         = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","-1","laugh","confused","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/enterprise-server@3.6\\/rest\\/reactions\\/reactions#about-reactions) to add to the team discussion comment."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"content":"+1"}';

    /**
     * content: The [reaction type](https://docs.github.com/enterprise-server@3.6/rest/reactions/reactions#about-reactions) to add to the team discussion comment.
     */
    public function __construct(public string $content)
    {
    }
}
