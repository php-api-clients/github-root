<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\BranchRestrictionPolicy\Apps;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Permissions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"metadata":{"type":"string"},"contents":{"type":"string"},"issues":{"type":"string"},"single_file":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"metadata":"generated_metadata","contents":"generated_contents","issues":"generated_issues","single_file":"generated_single_file"}';
    public function __construct(public ?string $metadata, public ?string $contents, public ?string $issues, public ?string $single_file)
    {
    }
}
