<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\AnnouncementBanner;

final class AnnouncementBanners
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Schema\AnnouncementBanner */
    public function getAnnouncementBannerForEnterprise(string $enterprise): AnnouncementBanner|array
    {
        return $this->operators->announcementBanners👷GetAnnouncementBannerForEnterprise()->call($enterprise);
    }

    /** @return array{code:int} */
    public function removeAnnouncementBannerForEnterprise(string $enterprise): array
    {
        return $this->operators->announcementBanners👷RemoveAnnouncementBannerForEnterprise()->call($enterprise);
    }

    /** @return Schema\AnnouncementBanner */
    public function setAnnouncementBannerForEnterprise(string $enterprise, array $params): AnnouncementBanner|array
    {
        return $this->operators->announcementBanners👷SetAnnouncementBannerForEnterprise()->call($enterprise, $params);
    }

    /** @return Schema\AnnouncementBanner */
    public function getAnnouncementBannerForOrg(string $org): AnnouncementBanner|array
    {
        return $this->operators->announcementBanners👷GetAnnouncementBannerForOrg()->call($org);
    }

    /** @return array{code:int} */
    public function removeAnnouncementBannerForOrg(string $org): array
    {
        return $this->operators->announcementBanners👷RemoveAnnouncementBannerForOrg()->call($org);
    }

    /** @return Schema\AnnouncementBanner */
    public function setAnnouncementBannerForOrg(string $org, array $params): AnnouncementBanner|array
    {
        return $this->operators->announcementBanners👷SetAnnouncementBannerForOrg()->call($org, $params);
    }
}
