<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Users
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"github_com_login":{"type":"string"},"github_com_name":{"type":["string","null"]},"enterprise_server_user_ids":{"type":"array","items":{"type":"string"}},"github_com_user":{"type":"boolean"},"enterprise_server_user":{"type":["boolean","null"]},"visual_studio_subscription_user":{"type":"boolean"},"license_type":{"type":"string"},"github_com_profile":{"type":["string","null"]},"github_com_member_roles":{"type":"array","items":{"type":"string"}},"github_com_enterprise_roles":{"type":"array","items":{"type":"string"},"description":"All enterprise roles for a user."},"github_com_verified_domain_emails":{"type":"array","items":{"type":"string"}},"github_com_saml_name_id":{"type":["string","null"]},"github_com_orgs_with_pending_invites":{"type":"array","items":{"type":"string"}},"github_com_two_factor_auth":{"type":["boolean","null"]},"enterprise_server_emails":{"type":"array","items":{"type":"string"}},"visual_studio_license_status":{"type":["string","null"]},"visual_studio_subscription_email":{"type":["string","null"]},"total_user_accounts":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"github_com_login":"generated_github_com_login","github_com_name":"generated_github_com_name","enterprise_server_user_ids":[null],"github_com_user":false,"enterprise_server_user":false,"visual_studio_subscription_user":false,"license_type":"generated_license_type","github_com_profile":"generated_github_com_profile","github_com_member_roles":[null],"github_com_enterprise_roles":[null],"github_com_verified_domain_emails":[null],"github_com_saml_name_id":"generated_github_com_saml_name_id","github_com_orgs_with_pending_invites":[null],"github_com_two_factor_auth":false,"enterprise_server_emails":[null],"visual_studio_license_status":"generated_visual_studio_license_status","visual_studio_subscription_email":"generated_visual_studio_subscription_email","total_user_accounts":13}';
    public ?string $github_com_login;
    public ?string $github_com_name;
    /**
     * @var array<string>
     */
    public ?array $enterprise_server_user_ids;
    public ?bool $github_com_user;
    public ?bool $enterprise_server_user;
    public ?bool $visual_studio_subscription_user;
    public ?string $license_type;
    public ?string $github_com_profile;
    /**
     * @var array<string>
     */
    public ?array $github_com_member_roles;
    /**
     * All enterprise roles for a user.
     * @var array<string>
     */
    public ?array $github_com_enterprise_roles;
    /**
     * @var array<string>
     */
    public ?array $github_com_verified_domain_emails;
    public ?string $github_com_saml_name_id;
    /**
     * @var array<string>
     */
    public ?array $github_com_orgs_with_pending_invites;
    public ?bool $github_com_two_factor_auth;
    /**
     * @var array<string>
     */
    public ?array $enterprise_server_emails;
    public ?string $visual_studio_license_status;
    public ?string $visual_studio_subscription_email;
    public ?int $total_user_accounts;
    public function __construct(string $github_com_login, string $github_com_name, array $enterprise_server_user_ids, bool $github_com_user, bool $enterprise_server_user, bool $visual_studio_subscription_user, string $license_type, string $github_com_profile, array $github_com_member_roles, array $github_com_enterprise_roles, array $github_com_verified_domain_emails, string $github_com_saml_name_id, array $github_com_orgs_with_pending_invites, bool $github_com_two_factor_auth, array $enterprise_server_emails, string $visual_studio_license_status, string $visual_studio_subscription_email, int $total_user_accounts)
    {
        $this->github_com_login = $github_com_login;
        $this->github_com_name = $github_com_name;
        $this->enterprise_server_user_ids = $enterprise_server_user_ids;
        $this->github_com_user = $github_com_user;
        $this->enterprise_server_user = $enterprise_server_user;
        $this->visual_studio_subscription_user = $visual_studio_subscription_user;
        $this->license_type = $license_type;
        $this->github_com_profile = $github_com_profile;
        $this->github_com_member_roles = $github_com_member_roles;
        $this->github_com_enterprise_roles = $github_com_enterprise_roles;
        $this->github_com_verified_domain_emails = $github_com_verified_domain_emails;
        $this->github_com_saml_name_id = $github_com_saml_name_id;
        $this->github_com_orgs_with_pending_invites = $github_com_orgs_with_pending_invites;
        $this->github_com_two_factor_auth = $github_com_two_factor_auth;
        $this->enterprise_server_emails = $enterprise_server_emails;
        $this->visual_studio_license_status = $visual_studio_license_status;
        $this->visual_studio_subscription_email = $visual_studio_subscription_email;
        $this->total_user_accounts = $total_user_accounts;
    }
}
