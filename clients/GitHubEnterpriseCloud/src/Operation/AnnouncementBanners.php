<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\AnnouncementBanner;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class AnnouncementBanners
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function getAnnouncementBannerForEnterprise(string $enterprise): AnnouncementBanner
    {
        return $this->operators->announcementBanners👷GetAnnouncementBannerForEnterprise()->call($enterprise);
    }

    public function removeAnnouncementBannerForEnterprise(string $enterprise): WithoutBody
    {
        return $this->operators->announcementBanners👷RemoveAnnouncementBannerForEnterprise()->call($enterprise);
    }

    public function setAnnouncementBannerForEnterprise(string $enterprise, array $params): AnnouncementBanner
    {
        return $this->operators->announcementBanners👷SetAnnouncementBannerForEnterprise()->call($enterprise, $params);
    }

    public function getAnnouncementBannerForOrg(string $org): AnnouncementBanner
    {
        return $this->operators->announcementBanners👷GetAnnouncementBannerForOrg()->call($org);
    }

    public function removeAnnouncementBannerForOrg(string $org): WithoutBody
    {
        return $this->operators->announcementBanners👷RemoveAnnouncementBannerForOrg()->call($org);
    }

    public function setAnnouncementBannerForOrg(string $org, array $params): AnnouncementBanner
    {
        return $this->operators->announcementBanners👷SetAnnouncementBannerForOrg()->call($org, $params);
    }
}
