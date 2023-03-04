<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Orgs\Update\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"billing_email":{"type":"string","description":"Billing email address. This address is not publicized."},"company":{"type":"string","description":"The company name."},"email":{"type":"string","description":"The publicly visible email address."},"twitter_username":{"type":"string","description":"The Twitter username of the company."},"location":{"type":"string","description":"The location."},"name":{"type":"string","description":"The shorthand name of the company."},"description":{"type":"string","description":"The description of the company."},"has_organization_projects":{"type":"boolean","description":"Whether an organization can use organization projects."},"has_repository_projects":{"type":"boolean","description":"Whether repositories that belong to the organization can use repository projects."},"default_repository_permission":{"enum":["read","write","admin","none"],"type":"string","description":"Default permission level members have for organization repositories.","default":"read"},"members_can_create_repositories":{"type":"boolean","description":"Whether of non-admin organization members can create repositories. **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details.","default":true},"members_can_create_internal_repositories":{"type":"boolean","description":"Whether organization members can create internal repositories, which are visible to all enterprise members. You can only allow members to create internal repositories if your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+. For more information, see \\"[Restricting repository creation in your organization](https:\\/\\/docs.github.com\\/github\\/setting-up-and-managing-organizations-and-teams\\/restricting-repository-creation-in-your-organization)\\" in the GitHub Help documentation."},"members_can_create_private_repositories":{"type":"boolean","description":"Whether organization members can create private repositories, which are visible to organization members with permission. For more information, see \\"[Restricting repository creation in your organization](https:\\/\\/docs.github.com\\/github\\/setting-up-and-managing-organizations-and-teams\\/restricting-repository-creation-in-your-organization)\\" in the GitHub Help documentation."},"members_can_create_public_repositories":{"type":"boolean","description":"Whether organization members can create public repositories, which are visible to anyone. For more information, see \\"[Restricting repository creation in your organization](https:\\/\\/docs.github.com\\/github\\/setting-up-and-managing-organizations-and-teams\\/restricting-repository-creation-in-your-organization)\\" in the GitHub Help documentation."},"members_allowed_repository_creation_type":{"enum":["all","private","none"],"type":"string","description":"Specifies which types of repositories non-admin organization members can create. \\n**Note:** This parameter is deprecated and will be removed in the future. Its return value ignores internal repositories. Using this parameter overrides values set in `members_can_create_repositories`. See the parameter deprecation notice in the operation description for details."},"members_can_create_pages":{"type":"boolean","description":"Whether organization members can create GitHub Pages sites. Existing published sites will not be impacted.","default":true},"blog":{"type":"string","examples":["\\"http:\\/\\/github.blog\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"billing_email":"generated_billing_email","company":"generated_company","email":"generated_email","twitter_username":"generated_twitter_username","location":"generated_location","name":"generated_name","description":"generated_description","has_organization_projects":false,"has_repository_projects":false,"default_repository_permission":"generated_default_repository_permission","members_can_create_repositories":false,"members_can_create_internal_repositories":false,"members_can_create_private_repositories":false,"members_can_create_public_repositories":false,"members_allowed_repository_creation_type":"generated_members_allowed_repository_creation_type","members_can_create_pages":false,"blog":"\\"http:\\/\\/github.blog\\""}';
    /**
     * Billing email address. This address is not publicized.
     */
    public ?string $billing_email;
    /**
     * The company name.
     */
    public ?string $company;
    /**
     * The publicly visible email address.
     */
    public ?string $email;
    /**
     * The Twitter username of the company.
     */
    public ?string $twitter_username;
    /**
     * The location.
     */
    public ?string $location;
    /**
     * The shorthand name of the company.
     */
    public ?string $name;
    /**
     * The description of the company.
     */
    public ?string $description;
    /**
     * Whether an organization can use organization projects.
     */
    public ?bool $has_organization_projects;
    /**
     * Whether repositories that belong to the organization can use repository projects.
     */
    public ?bool $has_repository_projects;
    /**
     * Default permission level members have for organization repositories.
     */
    public ?string $default_repository_permission;
    /**
     * Whether of non-admin organization members can create repositories. **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details.
     */
    public ?bool $members_can_create_repositories;
    /**
     * Whether organization members can create internal repositories, which are visible to all enterprise members. You can only allow members to create internal repositories if your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
     */
    public ?bool $members_can_create_internal_repositories;
    /**
     * Whether organization members can create private repositories, which are visible to organization members with permission. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
     */
    public ?bool $members_can_create_private_repositories;
    /**
     * Whether organization members can create public repositories, which are visible to anyone. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
     */
    public ?bool $members_can_create_public_repositories;
    /**
    * Specifies which types of repositories non-admin organization members can create. 
    **Note:** This parameter is deprecated and will be removed in the future. Its return value ignores internal repositories. Using this parameter overrides values set in `members_can_create_repositories`. See the parameter deprecation notice in the operation description for details.
    */
    public ?string $members_allowed_repository_creation_type;
    /**
     * Whether organization members can create GitHub Pages sites. Existing published sites will not be impacted.
     */
    public ?bool $members_can_create_pages;
    public ?string $blog;
    public function __construct(string $billing_email, string $company, string $email, string $twitter_username, string $location, string $name, string $description, bool $has_organization_projects, bool $has_repository_projects, string $default_repository_permission, bool $members_can_create_repositories, bool $members_can_create_internal_repositories, bool $members_can_create_private_repositories, bool $members_can_create_public_repositories, string $members_allowed_repository_creation_type, bool $members_can_create_pages, string $blog)
    {
        $this->billing_email = $billing_email;
        $this->company = $company;
        $this->email = $email;
        $this->twitter_username = $twitter_username;
        $this->location = $location;
        $this->name = $name;
        $this->description = $description;
        $this->has_organization_projects = $has_organization_projects;
        $this->has_repository_projects = $has_repository_projects;
        $this->default_repository_permission = $default_repository_permission;
        $this->members_can_create_repositories = $members_can_create_repositories;
        $this->members_can_create_internal_repositories = $members_can_create_internal_repositories;
        $this->members_can_create_private_repositories = $members_can_create_private_repositories;
        $this->members_can_create_public_repositories = $members_can_create_public_repositories;
        $this->members_allowed_repository_creation_type = $members_allowed_repository_creation_type;
        $this->members_can_create_pages = $members_can_create_pages;
        $this->blog = $blog;
    }
}
