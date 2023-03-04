<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\UpdateReleaseAsset\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The file name of the asset."},"label":{"type":"string","description":"An alternate short description of the asset. Used in place of the filename."},"state":{"type":"string","examples":["\\"uploaded\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","label":"generated_label","state":"\\"uploaded\\""}';
    /**
     * The file name of the asset.
     */
    public ?string $name;
    /**
     * An alternate short description of the asset. Used in place of the filename.
     */
    public ?string $label;
    public ?string $state;
    public function __construct(string $name, string $label, string $state)
    {
        $this->name = $name;
        $this->label = $label;
        $this->state = $state;
    }
}
