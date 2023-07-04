<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Users
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"github_com_login":{"type":"string"},"github_com_name":{"type":["string","null"]},"enterprise_server_user_ids":{"type":"array","items":{"type":"string"}},"github_com_user":{"type":"boolean"},"enterprise_server_user":{"type":["boolean","null"]},"visual_studio_subscription_user":{"type":"boolean"},"license_type":{"type":"string"},"github_com_profile":{"type":["string","null"]},"github_com_member_roles":{"type":"array","items":{"type":"string"}},"github_com_enterprise_roles":{"type":"array","items":{"type":"string"},"description":"All enterprise roles for a user."},"github_com_verified_domain_emails":{"type":"array","items":{"type":"string"}},"github_com_saml_name_id":{"type":["string","null"]},"github_com_orgs_with_pending_invites":{"type":"array","items":{"type":"string"}},"github_com_two_factor_auth":{"type":["boolean","null"]},"enterprise_server_emails":{"type":"array","items":{"type":"string"}},"visual_studio_license_status":{"type":["string","null"]},"visual_studio_subscription_email":{"type":["string","null"]},"total_user_accounts":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"github_com_login":"generated","github_com_name":"generated","enterprise_server_user_ids":["generated","generated"],"github_com_user":false,"enterprise_server_user":false,"visual_studio_subscription_user":false,"license_type":"generated","github_com_profile":"generated","github_com_member_roles":["generated","generated"],"github_com_enterprise_roles":["generated","generated"],"github_com_verified_domain_emails":["generated","generated"],"github_com_saml_name_id":"generated","github_com_orgs_with_pending_invites":["generated","generated"],"github_com_two_factor_auth":false,"enterprise_server_emails":["generated","generated"],"visual_studio_license_status":"generated","visual_studio_subscription_email":"generated","total_user_accounts":19}';

    /**
     * githubComEnterpriseRoles: All enterprise roles for a user.
     */
    public function __construct(#[MapFrom('github_com_login')]
    public string|null $githubComLogin, #[MapFrom('github_com_name')]
    public string|null $githubComName, #[MapFrom('enterprise_server_user_ids')]
    public array|null $enterpriseServerUserIds, #[MapFrom('github_com_user')]
    public bool|null $githubComUser, #[MapFrom('enterprise_server_user')]
    public bool|null $enterpriseServerUser, #[MapFrom('visual_studio_subscription_user')]
    public bool|null $visualStudioSubscriptionUser, #[MapFrom('license_type')]
    public string|null $licenseType, #[MapFrom('github_com_profile')]
    public string|null $githubComProfile, #[MapFrom('github_com_member_roles')]
    public array|null $githubComMemberRoles, #[MapFrom('github_com_enterprise_roles')]
    public array|null $githubComEnterpriseRoles, #[MapFrom('github_com_verified_domain_emails')]
    public array|null $githubComVerifiedDomainEmails, #[MapFrom('github_com_saml_name_id')]
    public string|null $githubComSamlNameId, #[MapFrom('github_com_orgs_with_pending_invites')]
    public array|null $githubComOrgsWithPendingInvites, #[MapFrom('github_com_two_factor_auth')]
    public bool|null $githubComTwoFactorAuth, #[MapFrom('enterprise_server_emails')]
    public array|null $enterpriseServerEmails, #[MapFrom('visual_studio_license_status')]
    public string|null $visualStudioLicenseStatus, #[MapFrom('visual_studio_subscription_email')]
    public string|null $visualStudioSubscriptionEmail, #[MapFrom('total_user_accounts')]
    public int|null $totalUserAccounts,)
    {
    }
}
