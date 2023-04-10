<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstractfc58c9c6c1f678e13e017ff0f747b71b
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","-1","laugh","confused","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/enterprise-server@3.0\\/rest\\/reference\\/reactions#reaction-types) to add to the team discussion comment."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"content":"+1"}';
    /**
     * content: The [reaction type](https://docs.github.com/enterprise-server@3.0/rest/reference/reactions#reaction-types) to add to the team discussion comment.
     */
    public function __construct(public string $content)
    {
    }
}
