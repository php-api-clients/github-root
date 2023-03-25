<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class GetConsumedLicenses
{
    public const SCHEMA_JSON = '{"title":"Enterprise Consumed Licenses","properties":{"total_seats_consumed":{"type":"integer"},"total_seats_purchased":{"type":"integer"},"users":{"type":"array","items":{"type":"object","properties":{"github_com_login":{"type":"string"},"github_com_name":{"type":["string","null"]},"enterprise_server_user_ids":{"type":"array","items":{"type":"string"}},"github_com_user":{"type":"boolean"},"enterprise_server_user":{"type":["boolean","null"]},"visual_studio_subscription_user":{"type":"boolean"},"license_type":{"type":"string"},"github_com_profile":{"type":["string","null"]},"github_com_member_roles":{"type":"array","items":{"type":"string"}},"github_com_enterprise_roles":{"type":"array","items":{"type":"string"},"description":"All enterprise roles for a user."},"github_com_verified_domain_emails":{"type":"array","items":{"type":"string"}},"github_com_saml_name_id":{"type":["string","null"]},"github_com_orgs_with_pending_invites":{"type":"array","items":{"type":"string"}},"github_com_two_factor_auth":{"type":["boolean","null"]},"enterprise_server_emails":{"type":"array","items":{"type":"string"}},"visual_studio_license_status":{"type":["string","null"]},"visual_studio_subscription_email":{"type":["string","null"]},"total_user_accounts":{"type":"integer"}}}}},"description":"A breakdown of the licenses consumed by an enterprise."}';
    public const SCHEMA_TITLE = 'Enterprise Consumed Licenses';
    public const SCHEMA_DESCRIPTION = 'A breakdown of the licenses consumed by an enterprise.';
    public const SCHEMA_EXAMPLE_DATA = '{"totalSeatsConsumed":13,"totalSeatsPurchased":13,"users":[{"githubComLogin":"generated_github_com_login_null","githubComName":"generated_github_com_name_null","enterpriseServerUserIds":["generated_enterprise_server_user_ids_null"],"githubComUser":false,"enterpriseServerUser":false,"visualStudioSubscriptionUser":false,"licenseType":"generated_license_type_null","githubComProfile":"generated_github_com_profile_null","githubComMemberRoles":["generated_github_com_member_roles_null"],"githubComEnterpriseRoles":["generated_github_com_enterprise_roles_null"],"githubComVerifiedDomainEmails":["generated_github_com_verified_domain_emails_null"],"githubComSamlNameId":"generated_github_com_saml_name_id_null","githubComOrgsWithPendingInvites":["generated_github_com_orgs_with_pending_invites_null"],"githubComTwoFactorAuth":false,"enterpriseServerEmails":["generated_enterprise_server_emails_null"],"visualStudioLicenseStatus":"generated_visual_studio_license_status_null","visualStudioSubscriptionEmail":"generated_visual_studio_subscription_email_null","totalUserAccounts":13}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses\Users> $users
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_seats_consumed')] public ?int $totalSeatsConsumed, #[\EventSauce\ObjectHydrator\MapFrom('total_seats_purchased')] public ?int $totalSeatsPurchased, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\GetConsumedLicenses\Users::class)] public ?array $users)
    {
    }
}
