<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Codespaces\UpdateForAuthenticatedUser\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"machine":{"type":"string","description":"A valid machine to transition this codespace to."},"display_name":{"type":"string","description":"Display name for this codespace"},"recent_folders":{"type":"array","items":{"type":"string"},"description":"Recently opened folders inside the codespace. It is currently used by the clients to determine the folder path to load the codespace in."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"machine":"generated_machine","display_name":"generated_display_name","recent_folders":[null]}';
    /**
     * A valid machine to transition this codespace to.
     */
    public ?string $machine;
    /**
     * Display name for this codespace
     */
    public ?string $display_name;
    /**
     * Recently opened folders inside the codespace. It is currently used by the clients to determine the folder path to load the codespace in.
     * @var array<string>
     */
    public ?array $recent_folders;
    public function __construct(string $machine, string $display_name, array $recent_folders)
    {
        $this->machine = $machine;
        $this->display_name = $display_name;
        $this->recent_folders = $recent_folders;
    }
}
