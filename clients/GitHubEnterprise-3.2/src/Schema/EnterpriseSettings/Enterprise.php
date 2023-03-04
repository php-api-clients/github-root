<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Enterprise
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"private_mode":{"type":"boolean"},"public_pages":{"type":"boolean"},"subdomain_isolation":{"type":"boolean"},"signup_enabled":{"type":"boolean"},"github_hostname":{"type":"string"},"identicons_host":{"type":"string"},"http_proxy":{"type":["string","null"]},"auth_mode":{"type":"string"},"expire_sessions":{"type":"boolean"},"admin_password":{"type":["string","null"]},"configuration_id":{"type":"integer"},"configuration_run_count":{"type":"integer"},"avatar":{"type":"object","properties":{"enabled":{"type":"boolean"},"uri":{"type":"string"}}},"customer":{"type":"object","properties":{"name":{"type":"string"},"email":{"type":"string"},"uuid":{"type":"string"},"secret_key_data":{"type":"string"},"public_key_data":{"type":"string"}}},"license":{"type":"object","properties":{"seats":{"type":"integer"},"evaluation":{"type":"boolean"},"perpetual":{"type":"boolean"},"unlimited_seating":{"type":"boolean"},"support_key":{"type":"string"},"ssh_allowed":{"type":"boolean"},"cluster_support":{"type":"boolean"},"expire_at":{"type":"string"}}},"github_ssl":{"type":"object","properties":{"enabled":{"type":"boolean"},"cert":{"type":["string","null"]},"key":{"type":["string","null"]}}},"ldap":{"type":"object","properties":{"host":{"type":["string","null"]},"port":{"type":"integer"},"base":{"type":"array","items":{}},"uid":{"type":["string","null"]},"bind_dn":{"type":["string","null"]},"password":{"type":["string","null"]},"method":{"type":"string"},"search_strategy":{"type":"string"},"user_groups":{"type":"array","items":{}},"admin_group":{"type":["string","null"]},"virtual_attribute_enabled":{"type":"boolean"},"recursive_group_search":{"type":"boolean"},"posix_support":{"type":"boolean"},"user_sync_emails":{"type":"boolean"},"user_sync_keys":{"type":"boolean"},"user_sync_interval":{"type":"integer"},"team_sync_interval":{"type":"integer"},"sync_enabled":{"type":"boolean"},"reconciliation":{"type":"object","properties":{"user":{"type":["string","null"]},"org":{"type":["string","null"]}}},"profile":{"type":"object","properties":{"uid":{"type":"string"},"name":{"type":["string","null"]},"mail":{"type":["string","null"]},"key":{"type":["string","null"]}}}}},"cas":{"type":"object","properties":{"url":{"type":["string","null"]}}},"saml":{"type":"object","properties":{"sso_url":{"type":["string","null"]},"certificate":{"type":["string","null"]},"certificate_path":{"type":["string","null"]},"issuer":{"type":["string","null"]},"idp_initiated_sso":{"type":"boolean"},"disable_admin_demote":{"type":"boolean"}}},"github_oauth":{"type":"object","properties":{"client_id":{"type":"string"},"client_secret":{"type":"string"},"organization_name":{"type":"string"},"organization_team":{"type":"string"}}},"smtp":{"type":"object","properties":{"enabled":{"type":"boolean"},"address":{"type":"string"},"authentication":{"type":"string"},"port":{"type":"string"},"domain":{"type":"string"},"username":{"type":"string"},"user_name":{"type":"string"},"enable_starttls_auto":{"type":"boolean"},"password":{"type":"string"},"discard-to-noreply-address":{"type":"boolean"},"support_address":{"type":"string"},"support_address_type":{"type":"string"},"noreply_address":{"type":"string"}}},"ntp":{"type":"object","properties":{"primary_server":{"type":"string"},"secondary_server":{"type":"string"}}},"timezone":{"type":["string","null"]},"snmp":{"type":"object","properties":{"enabled":{"type":"boolean"},"community":{"type":"string"}}},"syslog":{"type":"object","properties":{"enabled":{"type":"boolean"},"server":{"type":["string","null"]},"protocol_name":{"type":"string"}}},"assets":{"type":["string","null"]},"pages":{"type":"object","properties":{"enabled":{"type":"boolean"}}},"collectd":{"type":"object","properties":{"enabled":{"type":"boolean"},"server":{"type":["string","null"]},"port":{"type":"integer"},"encryption":{"type":["string","null"]},"username":{"type":["string","null"]},"password":{"type":["string","null"]}}},"mapping":{"type":"object","properties":{"enabled":{"type":"boolean"},"tileserver":{"type":["string","null"]},"basemap":{"type":"string"},"token":{"type":["string","null"]}}},"load_balancer":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"private_mode":false,"public_pages":false,"subdomain_isolation":false,"signup_enabled":false,"github_hostname":"generated_github_hostname","identicons_host":"generated_identicons_host","http_proxy":"generated_http_proxy","auth_mode":"generated_auth_mode","expire_sessions":false,"admin_password":"generated_admin_password","configuration_id":13,"configuration_run_count":13,"avatar":{"enabled":false,"uri":"generated_uri"},"customer":{"name":"generated_name","email":"generated_email","uuid":"generated_uuid","secret_key_data":"generated_secret_key_data","public_key_data":"generated_public_key_data"},"license":{"seats":13,"evaluation":false,"perpetual":false,"unlimited_seating":false,"support_key":"generated_support_key","ssh_allowed":false,"cluster_support":false,"expire_at":"generated_expire_at"},"github_ssl":{"enabled":false,"cert":"generated_cert","key":"generated_key"},"ldap":{"host":"generated_host","port":13,"base":[null],"uid":"generated_uid","bind_dn":"generated_bind_dn","password":"generated_password","method":"generated_method","search_strategy":"generated_search_strategy","user_groups":[null],"admin_group":"generated_admin_group","virtual_attribute_enabled":false,"recursive_group_search":false,"posix_support":false,"user_sync_emails":false,"user_sync_keys":false,"user_sync_interval":13,"team_sync_interval":13,"sync_enabled":false,"reconciliation":{"user":"generated_user","org":"generated_org"},"profile":{"uid":"generated_uid","name":"generated_name","mail":"generated_mail","key":"generated_key"}},"cas":{"url":"generated_url"},"saml":{"sso_url":"generated_sso_url","certificate":"generated_certificate","certificate_path":"generated_certificate_path","issuer":"generated_issuer","idp_initiated_sso":false,"disable_admin_demote":false},"github_oauth":{"client_id":"generated_client_id","client_secret":"generated_client_secret","organization_name":"generated_organization_name","organization_team":"generated_organization_team"},"smtp":{"enabled":false,"address":"generated_address","authentication":"generated_authentication","port":"generated_port","domain":"generated_domain","username":"generated_username","user_name":"generated_user_name","enable_starttls_auto":false,"password":"generated_password","discard_MINUS_to_MINUS_noreply_MINUS_address":false,"support_address":"generated_support_address","support_address_type":"generated_support_address_type","noreply_address":"generated_noreply_address"},"ntp":{"primary_server":"generated_primary_server","secondary_server":"generated_secondary_server"},"timezone":"generated_timezone","snmp":{"enabled":false,"community":"generated_community"},"syslog":{"enabled":false,"server":"generated_server","protocol_name":"generated_protocol_name"},"assets":"generated_assets","pages":{"enabled":false},"collectd":{"enabled":false,"server":"generated_server","port":13,"encryption":"generated_encryption","username":"generated_username","password":"generated_password"},"mapping":{"enabled":false,"tileserver":"generated_tileserver","basemap":"generated_basemap","token":"generated_token"},"load_balancer":"generated_load_balancer"}';
    public ?bool $private_mode;
    public ?bool $public_pages;
    public ?bool $subdomain_isolation;
    public ?bool $signup_enabled;
    public ?string $github_hostname;
    public ?string $identicons_host;
    public ?string $http_proxy;
    public ?string $auth_mode;
    public ?bool $expire_sessions;
    public ?string $admin_password;
    public ?int $configuration_id;
    public ?int $configuration_run_count;
    public ?Schema\EnterpriseSettings\Enterprise\Avatar $avatar;
    public ?Schema\EnterpriseSettings\Enterprise\Customer $customer;
    public ?Schema\EnterpriseSettings\Enterprise\License $license;
    public ?Schema\EnterpriseSettings\Enterprise\GithubSsl $github_ssl;
    public ?Schema\EnterpriseSettings\Enterprise\Ldap $ldap;
    public ?Schema\EnterpriseSettings\Enterprise\Cas $cas;
    public ?Schema\EnterpriseSettings\Enterprise\Saml $saml;
    public ?Schema\EnterpriseSettings\Enterprise\GithubOauth $github_oauth;
    public ?Schema\EnterpriseSettings\Enterprise\Smtp $smtp;
    public ?Schema\EnterpriseSettings\Enterprise\Ntp $ntp;
    public ?string $timezone;
    public ?Schema\EnterpriseSettings\Enterprise\Snmp $snmp;
    public ?Schema\EnterpriseSettings\Enterprise\Syslog $syslog;
    public ?string $assets;
    public ?Schema\BranchProtection\RequiredLinearHistory $pages;
    public ?Schema\EnterpriseSettings\Enterprise\Collectd $collectd;
    public ?Schema\EnterpriseSettings\Enterprise\Mapping $mapping;
    public ?string $load_balancer;
    public function __construct(bool $private_mode, bool $public_pages, bool $subdomain_isolation, bool $signup_enabled, string $github_hostname, string $identicons_host, string $http_proxy, string $auth_mode, bool $expire_sessions, string $admin_password, int $configuration_id, int $configuration_run_count, Schema\EnterpriseSettings\Enterprise\Avatar $avatar, Schema\EnterpriseSettings\Enterprise\Customer $customer, Schema\EnterpriseSettings\Enterprise\License $license, Schema\EnterpriseSettings\Enterprise\GithubSsl $github_ssl, Schema\EnterpriseSettings\Enterprise\Ldap $ldap, Schema\EnterpriseSettings\Enterprise\Cas $cas, Schema\EnterpriseSettings\Enterprise\Saml $saml, Schema\EnterpriseSettings\Enterprise\GithubOauth $github_oauth, Schema\EnterpriseSettings\Enterprise\Smtp $smtp, Schema\EnterpriseSettings\Enterprise\Ntp $ntp, string $timezone, Schema\EnterpriseSettings\Enterprise\Snmp $snmp, Schema\EnterpriseSettings\Enterprise\Syslog $syslog, string $assets, Schema\BranchProtection\RequiredLinearHistory $pages, Schema\EnterpriseSettings\Enterprise\Collectd $collectd, Schema\EnterpriseSettings\Enterprise\Mapping $mapping, string $load_balancer)
    {
        $this->private_mode = $private_mode;
        $this->public_pages = $public_pages;
        $this->subdomain_isolation = $subdomain_isolation;
        $this->signup_enabled = $signup_enabled;
        $this->github_hostname = $github_hostname;
        $this->identicons_host = $identicons_host;
        $this->http_proxy = $http_proxy;
        $this->auth_mode = $auth_mode;
        $this->expire_sessions = $expire_sessions;
        $this->admin_password = $admin_password;
        $this->configuration_id = $configuration_id;
        $this->configuration_run_count = $configuration_run_count;
        $this->avatar = $avatar;
        $this->customer = $customer;
        $this->license = $license;
        $this->github_ssl = $github_ssl;
        $this->ldap = $ldap;
        $this->cas = $cas;
        $this->saml = $saml;
        $this->github_oauth = $github_oauth;
        $this->smtp = $smtp;
        $this->ntp = $ntp;
        $this->timezone = $timezone;
        $this->snmp = $snmp;
        $this->syslog = $syslog;
        $this->assets = $assets;
        $this->pages = $pages;
        $this->collectd = $collectd;
        $this->mapping = $mapping;
        $this->load_balancer = $load_balancer;
    }
}
