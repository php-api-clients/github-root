<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\CreatePreReceiveEnvironment\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name","image_url"],"type":"object","properties":{"name":{"type":"string","description":"The new pre-receive environment\'s name."},"image_url":{"type":"string","description":"URL from which to download a tarball of this environment."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","image_url":"generated_image_url_null"}';
    /**
     * name: The new pre-receive environment's name.
     * imageUrl: URL from which to download a tarball of this environment.
     */
    public function __construct(public string $name, #[\EventSauce\ObjectHydrator\MapFrom('image_url')] public string $imageUrl)
    {
    }
}
