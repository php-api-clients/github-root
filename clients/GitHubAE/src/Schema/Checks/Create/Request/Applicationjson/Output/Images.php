<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Checks\Create\Request\Applicationjson\Output;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Images
{
    public const SCHEMA_JSON = '{"required":["alt","image_url"],"type":"object","properties":{"alt":{"type":"string","description":"The alternative text for the image."},"image_url":{"type":"string","description":"The full URL of the image."},"caption":{"type":"string","description":"A short image description."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"alt":"generated_alt","image_url":"generated_image_url","caption":"generated_caption"}';
    /**
     * alt: The alternative text for the image.
     * image_url: The full URL of the image.
     * caption: A short image description.
     */
    public function __construct(public ?string $alt, public ?string $image_url, public string $caption)
    {
    }
}
