<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\EnterpriseAdmin\UpgradeLicense\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ApplicationxWwwFormUrlencoded
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"license":{"type":"string","description":"The content of your new _.ghl_ license file."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"license":"generated_license_null"}';
    /**
     * license: The content of your new _.ghl_ license file.
     */
    public function __construct(public ?string $license)
    {
    }
}
