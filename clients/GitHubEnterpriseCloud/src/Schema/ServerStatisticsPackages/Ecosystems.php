<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatisticsPackages;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ecosystems
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"name":{"enum":["npm","maven","docker","nuget","rubygems","containers"],"type":"string","description":"The name of the package ecosystem"},"enabled":{"enum":["TRUE","FALSE","READONLY"],"type":"string","description":"Shows if a package system is enabled, disabled, or read-only in a GHES installation"},"published_packages_count":{"type":"integer","description":"The total number of published packages in a package ecosystem in a GHES installation"},"private_packages_count":{"type":"integer","description":"The total number of private packages in a package ecosystem in a GHES installation"},"public_packages_count":{"type":"integer","description":"The total number of public packages in a package ecosystem in a GHES installation"},"internal_packages_count":{"type":"integer","description":"The total number of internal packages in a package ecosystem in a GHES installation"},"user_packages_count":{"type":"integer","description":"The total number of user packages in a package ecosystem in a GHES installation"},"organization_packages_count":{"type":"integer","description":"The total number of organization packages in a package ecosystem in a GHES installation"},"daily_download_count":{"type":"integer","description":"The total number of packages in an ecosystem that have been downloaded in the 24 hours prior to `collection_date` for a GHES installation"},"daily_update_count":{"type":"integer","description":"The total number of packages in an ecosystem that have been updated in the 24 hours prior to `collection_date` for a GHES installation"},"daily_delete_count":{"type":"integer","description":"The total number of packages in an ecosystem that have been deleted in the 24 hours prior to `collection_date` for a GHES installation"},"daily_create_count":{"type":"integer","description":"The total number of packages in an ecosystem that have been created in the 24 hours prior to `collection_date` for a GHES installation"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"containers","enabled":"TRUE","published_packages_count":24,"private_packages_count":22,"public_packages_count":21,"internal_packages_count":23,"user_packages_count":19,"organization_packages_count":27,"daily_download_count":20,"daily_update_count":18,"daily_delete_count":18,"daily_create_count":18}';

    /**
     * name: The name of the package ecosystem
     * enabled: Shows if a package system is enabled, disabled, or read-only in a GHES installation
     * publishedPackagesCount: The total number of published packages in a package ecosystem in a GHES installation
     * privatePackagesCount: The total number of private packages in a package ecosystem in a GHES installation
     * publicPackagesCount: The total number of public packages in a package ecosystem in a GHES installation
     * internalPackagesCount: The total number of internal packages in a package ecosystem in a GHES installation
     * userPackagesCount: The total number of user packages in a package ecosystem in a GHES installation
     * organizationPackagesCount: The total number of organization packages in a package ecosystem in a GHES installation
     * dailyDownloadCount: The total number of packages in an ecosystem that have been downloaded in the 24 hours prior to `collection_date` for a GHES installation
     * dailyUpdateCount: The total number of packages in an ecosystem that have been updated in the 24 hours prior to `collection_date` for a GHES installation
     * dailyDeleteCount: The total number of packages in an ecosystem that have been deleted in the 24 hours prior to `collection_date` for a GHES installation
     * dailyCreateCount: The total number of packages in an ecosystem that have been created in the 24 hours prior to `collection_date` for a GHES installation
     */
    public function __construct(public string|null $name, public string|null $enabled, #[MapFrom('published_packages_count')]
    public int|null $publishedPackagesCount, #[MapFrom('private_packages_count')]
    public int|null $privatePackagesCount, #[MapFrom('public_packages_count')]
    public int|null $publicPackagesCount, #[MapFrom('internal_packages_count')]
    public int|null $internalPackagesCount, #[MapFrom('user_packages_count')]
    public int|null $userPackagesCount, #[MapFrom('organization_packages_count')]
    public int|null $organizationPackagesCount, #[MapFrom('daily_download_count')]
    public int|null $dailyDownloadCount, #[MapFrom('daily_update_count')]
    public int|null $dailyUpdateCount, #[MapFrom('daily_delete_count')]
    public int|null $dailyDeleteCount, #[MapFrom('daily_create_count')]
    public int|null $dailyCreateCount,)
    {
    }
}
