<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ServerStatisticsPackages
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"registry_enabled":{"type":"boolean","description":"Whether GitHub Packages is enabled globally in a GHES installation"},"registry_v2_enabled":{"type":"boolean","description":"Whether a beta registry is enabled in a GHES installation"},"ecosystems":{"type":"array","items":{"type":"object","properties":{"name":{"enum":["npm","maven","docker","nuget","rubygems","containers"],"type":"string","description":"The name of the package ecosystem"},"enabled":{"enum":["TRUE","FALSE","READONLY"],"type":"string","description":"Shows if a package system is enabled, disabled, or read-only in a GHES installation"},"published_packages_count":{"type":"integer","description":"The total number of published packages in a package ecosystem in a GHES installation"},"private_packages_count":{"type":"integer","description":"The total number of private packages in a package ecosystem in a GHES installation"},"public_packages_count":{"type":"integer","description":"The total number of public packages in a package ecosystem in a GHES installation"},"internal_packages_count":{"type":"integer","description":"The total number of internal packages in a package ecosystem in a GHES installation"},"user_packages_count":{"type":"integer","description":"The total number of user packages in a package ecosystem in a GHES installation"},"organization_packages_count":{"type":"integer","description":"The total number of organization packages in a package ecosystem in a GHES installation"},"daily_download_count":{"type":"integer","description":"The total number of packages in an ecosystem that have been downloaded in the 24 hours prior to `collection_date` for a GHES installation"},"daily_update_count":{"type":"integer","description":"The total number of packages in an ecosystem that have been updated in the 24 hours prior to `collection_date` for a GHES installation"},"daily_delete_count":{"type":"integer","description":"The total number of packages in an ecosystem that have been deleted in the 24 hours prior to `collection_date` for a GHES installation"},"daily_create_count":{"type":"integer","description":"The total number of packages in an ecosystem that have been created in the 24 hours prior to `collection_date` for a GHES installation"}}},"description":"The details of the package ecosystems that are enabled in a GHES installation"}},"description":"Packages metrics that are included in the Server Statistics payload\\/export from GHES"}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Packages metrics that are included in the Server Statistics payload/export from GHES';
    public const SCHEMA_EXAMPLE_DATA = '{"registry_enabled":false,"registry_v2_enabled":false,"ecosystems":[{"name":"containers","enabled":"TRUE","published_packages_count":24,"private_packages_count":22,"public_packages_count":21,"internal_packages_count":23,"user_packages_count":19,"organization_packages_count":27,"daily_download_count":20,"daily_update_count":18,"daily_delete_count":18,"daily_create_count":18},{"name":"containers","enabled":"TRUE","published_packages_count":24,"private_packages_count":22,"public_packages_count":21,"internal_packages_count":23,"user_packages_count":19,"organization_packages_count":27,"daily_download_count":20,"daily_update_count":18,"daily_delete_count":18,"daily_create_count":18}]}';

    /**
     * registryEnabled: Whether GitHub Packages is enabled globally in a GHES installation
     * registryVTwoEnabled: Whether a beta registry is enabled in a GHES installation
     * ecosystems: The details of the package ecosystems that are enabled in a GHES installation
     */
    public function __construct(#[MapFrom('registry_enabled')]
    public bool|null $registryEnabled, #[MapFrom('registry_v2_enabled')]
    public bool|null $registryVTwoEnabled, public array|null $ecosystems,)
    {
    }
}
