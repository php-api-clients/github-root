<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Saml
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"sso_url":{"type":["string","null"]},"certificate":{"type":["string","null"]},"certificate_path":{"type":["string","null"]},"issuer":{"type":["string","null"]},"idp_initiated_sso":{"type":"boolean"},"disable_admin_demote":{"type":"boolean"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"sso_url":"generated","certificate":"generated","certificate_path":"generated","issuer":"generated","idp_initiated_sso":false,"disable_admin_demote":false}';

    public function __construct(#[MapFrom('sso_url')]
    public string|null $ssoUrl, public string|null $certificate, #[MapFrom('certificate_path')]
    public string|null $certificatePath, public string|null $issuer, #[MapFrom('idp_initiated_sso')]
    public bool|null $idpInitiatedSso, #[MapFrom('disable_admin_demote')]
    public bool|null $disableAdminDemote,)
    {
    }
}
