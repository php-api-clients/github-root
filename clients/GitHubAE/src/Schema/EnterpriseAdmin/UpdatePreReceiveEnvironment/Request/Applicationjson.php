<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\EnterpriseAdmin\UpdatePreReceiveEnvironment\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Applicationjson
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"name":{"type":"string","description":"This pre-receive environment\'s new name."},"image_url":{"type":"string","description":"URL from which to download a tarball of this environment."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","image_url":"generated_image_url_null"}';

    /**
     * name: This pre-receive environment's new name.
     * imageUrl: URL from which to download a tarball of this environment.
     */
    public function __construct(public ?string $name, #[MapFrom('image_url')] public ?string $imageUrl)
    {
    }
}
