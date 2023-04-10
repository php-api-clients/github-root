<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\CreatePagesSite\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"anyOf":[{"required":["source"]}],"properties":{"source":{"required":["branch"],"type":"object","properties":{"branch":{"type":"string","description":"The repository branch used to publish your site\'s source files."},"path":{"enum":["\\/","\\/docs"],"type":"string","description":"The repository directory that includes the source files for the Pages site. Allowed paths are `\\/` or `\\/docs`. Default: `\\/`","default":"\\/"}},"description":"The source branch and directory used to publish your Pages site."}},"description":"The source branch and directory used to publish your Pages site."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The source branch and directory used to publish your Pages site.';
    public const SCHEMA_EXAMPLE_DATA = '{"source":{"branch":"generated_branch_null","path":"\\/"}}';
    /**
     * source: The source branch and directory used to publish your Pages site.
     */
    public function __construct(public ?Schema\Repos\CreatePagesSite\Request\Applicationjson\Source $source)
    {
    }
}
