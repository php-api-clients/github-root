<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema\AnnouncementBanner;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class AnnouncementBanners
{
    public function __construct(private Internal\Operators $operators)
    {
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
