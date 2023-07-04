<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class GetConsumedLicenses
{
    public const SCHEMA_JSON         = '{"title":"Enterprise Consumed Licenses","properties":{"total_seats_consumed":{"type":"integer"},"total_seats_purchased":{"type":"integer"},"users":{"type":"array","items":{"type":"object","properties":{"github_com_login":{"type":"string"},"github_com_name":{"type":["string","null"]},"enterprise_server_user_ids":{"type":"array","items":{"type":"string"}},"github_com_user":{"type":"boolean"},"enterprise_server_user":{"type":["boolean","null"]},"visual_studio_subscription_user":{"type":"boolean"},"license_type":{"type":"string"},"github_com_profile":{"type":["string","null"]},"github_com_member_roles":{"type":"array","items":{"type":"string"}},"github_com_enterprise_roles":{"type":"array","items":{"type":"string"},"description":"All enterprise roles for a user."},"github_com_verified_domain_emails":{"type":"array","items":{"type":"string"}},"github_com_saml_name_id":{"type":["string","null"]},"github_com_orgs_with_pending_invites":{"type":"array","items":{"type":"string"}},"github_com_two_factor_auth":{"type":["boolean","null"]},"enterprise_server_emails":{"type":"array","items":{"type":"string"}},"visual_studio_license_status":{"type":["string","null"]},"visual_studio_subscription_email":{"type":["string","null"]},"total_user_accounts":{"type":"integer"}}}}},"description":"A breakdown of the licenses consumed by an enterprise."}';
    public const SCHEMA_TITLE        = 'Enterprise Consumed Licenses';
    public const SCHEMA_DESCRIPTION  = 'A breakdown of the licenses consumed by an enterprise.';
    public const SCHEMA_EXAMPLE_DATA = '{"total_seats_consumed":20,"total_seats_purchased":21,"users":[{"github_com_login":"generated","github_com_name":"generated","enterprise_server_user_ids":["generated","generated"],"github_com_user":false,"enterprise_server_user":false,"visual_studio_subscription_user":false,"license_type":"generated","github_com_profile":"generated","github_com_member_roles":["generated","generated"],"github_com_enterprise_roles":["generated","generated"],"github_com_verified_domain_emails":["generated","generated"],"github_com_saml_name_id":"generated","github_com_orgs_with_pending_invites":["generated","generated"],"github_com_two_factor_auth":false,"enterprise_server_emails":["generated","generated"],"visual_studio_license_status":"generated","visual_studio_subscription_email":"generated","total_user_accounts":19},{"github_com_login":"generated","github_com_name":"generated","enterprise_server_user_ids":["generated","generated"],"github_com_user":false,"enterprise_server_user":false,"visual_studio_subscription_user":false,"license_type":"generated","github_com_profile":"generated","github_com_member_roles":["generated","generated"],"github_com_enterprise_roles":["generated","generated"],"github_com_verified_domain_emails":["generated","generated"],"github_com_saml_name_id":"generated","github_com_orgs_with_pending_invites":["generated","generated"],"github_com_two_factor_auth":false,"enterprise_server_emails":["generated","generated"],"visual_studio_license_status":"generated","visual_studio_subscription_email":"generated","total_user_accounts":19}]}';

    public function __construct(#[MapFrom('total_seats_consumed')]
    public int|null $totalSeatsConsumed, #[MapFrom('total_seats_purchased')]
    public int|null $totalSeatsPurchased, public array|null $users,)
    {
    }
}
