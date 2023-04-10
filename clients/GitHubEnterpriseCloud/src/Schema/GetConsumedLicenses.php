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
    public const SCHEMA_EXAMPLE_DATA = '{"total_seats_consumed":13,"total_seats_purchased":13,"users":[{"github_com_login":"generated_github_com_login_null","github_com_name":"generated_github_com_name_null","enterprise_server_user_ids":["generated_enterprise_server_user_ids_null"],"github_com_user":false,"enterprise_server_user":false,"visual_studio_subscription_user":false,"license_type":"generated_license_type_null","github_com_profile":"generated_github_com_profile_null","github_com_member_roles":["generated_github_com_member_roles_null"],"github_com_enterprise_roles":["generated_github_com_enterprise_roles_null"],"github_com_verified_domain_emails":["generated_github_com_verified_domain_emails_null"],"github_com_saml_name_id":"generated_github_com_saml_name_id_null","github_com_orgs_with_pending_invites":["generated_github_com_orgs_with_pending_invites_null"],"github_com_two_factor_auth":false,"enterprise_server_emails":["generated_enterprise_server_emails_null"],"visual_studio_license_status":"generated_visual_studio_license_status_null","visual_studio_subscription_email":"generated_visual_studio_subscription_email_null","total_user_accounts":13}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses\Users> $users
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_seats_consumed')] public ?int $totalSeatsConsumed, #[\EventSauce\ObjectHydrator\MapFrom('total_seats_purchased')] public ?int $totalSeatsPurchased, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\GetConsumedLicenses\Users::class)] public ?array $users)
    {
    }
}
