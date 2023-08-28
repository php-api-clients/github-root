<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\AnnouncementBanner;

final class AnnouncementBanners
{
    public function __construct(private Internal\Operators $operators)
    {
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
