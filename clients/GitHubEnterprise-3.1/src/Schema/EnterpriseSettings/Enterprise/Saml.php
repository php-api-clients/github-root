<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Saml
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"sso_url":{"type":["string","null"]},"certificate":{"type":["string","null"]},"certificate_path":{"type":["string","null"]},"issuer":{"type":["string","null"]},"idp_initiated_sso":{"type":"boolean"},"disable_admin_demote":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"sso_url":"generated_sso_url","certificate":"generated_certificate","certificate_path":"generated_certificate_path","issuer":"generated_issuer","idp_initiated_sso":false,"disable_admin_demote":false}';
    public function __construct(public ?string $sso_url, public ?string $certificate, public ?string $certificate_path, public ?string $issuer, public ?bool $idp_initiated_sso, public ?bool $disable_admin_demote)
    {
    }
}
