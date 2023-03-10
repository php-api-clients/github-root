<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\CreateDeployKey\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["key"],"type":"object","properties":{"title":{"type":"string","description":"A name for the key."},"key":{"type":"string","description":"The contents of the key."},"read_only":{"type":"boolean","description":"If `true`, the key will only be able to read repository contents. Otherwise, the key will be able to read and write.  \\n  \\nDeploy keys with write access can perform the same actions as an organization member with admin access, or a collaborator on a personal repository. For more information, see \\"[Repository permission levels for an organization](https:\\/\\/docs.github.com\\/enterprise-server@3.8\\/articles\\/repository-permission-levels-for-an-organization\\/)\\" and \\"[Permission levels for a user account repository](https:\\/\\/docs.github.com\\/enterprise-server@3.8\\/articles\\/permission-levels-for-a-user-account-repository\\/).\\""}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated_title","key":"generated_key","read_only":false}';
    /**
    * title: A name for the key.
    * key: The contents of the key.
    * read_only: If `true`, the key will only be able to read repository contents. Otherwise, the key will be able to read and write.  
     
    Deploy keys with write access can perform the same actions as an organization member with admin access, or a collaborator on a personal repository. For more information, see "[Repository permission levels for an organization](https://docs.github.com/enterprise-server@3.8/articles/repository-permission-levels-for-an-organization/)" and "[Permission levels for a user account repository](https://docs.github.com/enterprise-server@3.8/articles/permission-levels-for-a-user-account-repository/)."
    */
    public function __construct(public ?string $title, public string $key, public ?bool $read_only)
    {
    }
}
