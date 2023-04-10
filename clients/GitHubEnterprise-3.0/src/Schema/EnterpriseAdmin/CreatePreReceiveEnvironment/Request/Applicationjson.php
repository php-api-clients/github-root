<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\EnterpriseAdmin\CreatePreReceiveEnvironment\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
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
