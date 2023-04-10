<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\AddCollaborator\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"permission":{"enum":["pull","push","admin","maintain","triage"],"type":"string","description":"The permission to grant the collaborator. **Only valid on organization-owned repositories.** Can be one of:  \\n\\\\* `pull` - can pull, but not push to or administer this repository.  \\n\\\\* `push` - can pull and push, but not administer this repository.  \\n\\\\* `admin` - can pull, push and administer this repository.  \\n\\\\* `maintain` - Recommended for project managers who need to manage the repository without access to sensitive or destructive actions.  \\n\\\\* `triage` - Recommended for contributors who need to proactively manage issues and pull requests without write access.","default":"push"},"permissions":{"type":"string","examples":["\\"push\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"permission":"pull","permissions":"\\"push\\""}';
    /**
    * permission: The permission to grant the collaborator. **Only valid on organization-owned repositories.** Can be one of:  
    \* `pull` - can pull, but not push to or administer this repository.  
    \* `push` - can pull and push, but not administer this repository.  
    \* `admin` - can pull, push and administer this repository.  
    \* `maintain` - Recommended for project managers who need to manage the repository without access to sensitive or destructive actions.  
    \* `triage` - Recommended for contributors who need to proactively manage issues and pull requests without write access.
    */
    public function __construct(public ?string $permission, public ?string $permissions)
    {
    }
}
