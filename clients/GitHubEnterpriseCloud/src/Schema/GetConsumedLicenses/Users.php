<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Users
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"github_com_login":{"type":"string"},"github_com_name":{"type":["string","null"]},"enterprise_server_user_ids":{"type":"array","items":{"type":"string"}},"github_com_user":{"type":"boolean"},"enterprise_server_user":{"type":["boolean","null"]},"visual_studio_subscription_user":{"type":"boolean"},"license_type":{"type":"string"},"github_com_profile":{"type":["string","null"]},"github_com_member_roles":{"type":"array","items":{"type":"string"}},"github_com_enterprise_roles":{"type":"array","items":{"type":"string"},"description":"All enterprise roles for a user."},"github_com_verified_domain_emails":{"type":"array","items":{"type":"string"}},"github_com_saml_name_id":{"type":["string","null"]},"github_com_orgs_with_pending_invites":{"type":"array","items":{"type":"string"}},"github_com_two_factor_auth":{"type":["boolean","null"]},"enterprise_server_emails":{"type":"array","items":{"type":"string"}},"visual_studio_license_status":{"type":["string","null"]},"visual_studio_subscription_email":{"type":["string","null"]},"total_user_accounts":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"github_com_login":"generated_github_com_login_null","github_com_name":"generated_github_com_name_null","enterprise_server_user_ids":["generated_enterprise_server_user_ids_null"],"github_com_user":false,"enterprise_server_user":false,"visual_studio_subscription_user":false,"license_type":"generated_license_type_null","github_com_profile":"generated_github_com_profile_null","github_com_member_roles":["generated_github_com_member_roles_null"],"github_com_enterprise_roles":["generated_github_com_enterprise_roles_null"],"github_com_verified_domain_emails":["generated_github_com_verified_domain_emails_null"],"github_com_saml_name_id":"generated_github_com_saml_name_id_null","github_com_orgs_with_pending_invites":["generated_github_com_orgs_with_pending_invites_null"],"github_com_two_factor_auth":false,"enterprise_server_emails":["generated_enterprise_server_emails_null"],"visual_studio_license_status":"generated_visual_studio_license_status_null","visual_studio_subscription_email":"generated_visual_studio_subscription_email_null","total_user_accounts":13}';
    /**
     * @param ?array<string> $enterpriseServerUserIds
     * @param ?array<string> $githubComMemberRoles
     * githubComEnterpriseRoles: All enterprise roles for a user.
     * @param ?array<string> $githubComEnterpriseRoles
     * @param ?array<string> $githubComVerifiedDomainEmails
     * @param ?array<string> $githubComOrgsWithPendingInvites
     * @param ?array<string> $enterpriseServerEmails
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('github_com_login')] public ?string $githubComLogin, #[\EventSauce\ObjectHydrator\MapFrom('github_com_name')] public ?string $githubComName, #[\EventSauce\ObjectHydrator\MapFrom('enterprise_server_user_ids')] public ?array $enterpriseServerUserIds, #[\EventSauce\ObjectHydrator\MapFrom('github_com_user')] public ?bool $githubComUser, #[\EventSauce\ObjectHydrator\MapFrom('enterprise_server_user')] public ?bool $enterpriseServerUser, #[\EventSauce\ObjectHydrator\MapFrom('visual_studio_subscription_user')] public ?bool $visualStudioSubscriptionUser, #[\EventSauce\ObjectHydrator\MapFrom('license_type')] public ?string $licenseType, #[\EventSauce\ObjectHydrator\MapFrom('github_com_profile')] public ?string $githubComProfile, #[\EventSauce\ObjectHydrator\MapFrom('github_com_member_roles')] public ?array $githubComMemberRoles, #[\EventSauce\ObjectHydrator\MapFrom('github_com_enterprise_roles')] public ?array $githubComEnterpriseRoles, #[\EventSauce\ObjectHydrator\MapFrom('github_com_verified_domain_emails')] public ?array $githubComVerifiedDomainEmails, #[\EventSauce\ObjectHydrator\MapFrom('github_com_saml_name_id')] public ?string $githubComSamlNameId, #[\EventSauce\ObjectHydrator\MapFrom('github_com_orgs_with_pending_invites')] public ?array $githubComOrgsWithPendingInvites, #[\EventSauce\ObjectHydrator\MapFrom('github_com_two_factor_auth')] public ?bool $githubComTwoFactorAuth, #[\EventSauce\ObjectHydrator\MapFrom('enterprise_server_emails')] public ?array $enterpriseServerEmails, #[\EventSauce\ObjectHydrator\MapFrom('visual_studio_license_status')] public ?string $visualStudioLicenseStatus, #[\EventSauce\ObjectHydrator\MapFrom('visual_studio_subscription_email')] public ?string $visualStudioSubscriptionEmail, #[\EventSauce\ObjectHydrator\MapFrom('total_user_accounts')] public ?int $totalUserAccounts)
    {
    }
}
