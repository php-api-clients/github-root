<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class PreReceiveHook
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"enforcement":{"type":"string"},"script":{"type":"string"},"script_repository":{"type":"object","properties":{"id":{"type":"integer"},"full_name":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"}}},"environment":{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"image_url":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"default_environment":{"type":"boolean"},"created_at":{"type":"string"},"hooks_count":{"type":"integer"},"download":{"type":"object","properties":{"url":{"type":"string"},"state":{"type":"string"},"downloaded_at":{"type":["string","null"]},"message":{"type":["string","null"]}}}}},"allow_downstream_configuration":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name_null","enforcement":"generated_enforcement_null","script":"generated_script_null","script_repository":{"id":13,"full_name":"generated_full_name_null","url":"generated_url_null","html_url":"generated_html_url_null"},"environment":{"id":13,"name":"generated_name_null","image_url":"generated_image_url_null","url":"generated_url_null","html_url":"generated_html_url_null","default_environment":false,"created_at":"generated_created_at_null","hooks_count":13,"download":{"url":"generated_url_null","state":"generated_state_null","downloaded_at":"generated_downloaded_at_null","message":"generated_message_null"}},"allow_downstream_configuration":false}';
    public function __construct(public ?int $id, public ?string $name, public ?string $enforcement, public ?string $script, #[\EventSauce\ObjectHydrator\MapFrom('script_repository')] public ?Schema\PreReceiveHook\ScriptRepository $scriptRepository, public ?Schema\PreReceiveHook\Environment $environment, #[\EventSauce\ObjectHydrator\MapFrom('allow_downstream_configuration')] public ?bool $allowDownstreamConfiguration)
    {
    }
}
