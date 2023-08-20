<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class AnnouncementBanners
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function getAnnouncementBannerForOrg(string $org): Schema\AnnouncementBanner
    {
        if (array_key_exists(Operator\AnnouncementBanners\GetAnnouncementBannerForOrg::class, $this->operator) === false) {
            $this->operator[Operator\AnnouncementBanners\GetAnnouncementBannerForOrg::class] = new Operator\AnnouncementBanners\GetAnnouncementBannerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Announcement());
        }

        return $this->operator[Operator\AnnouncementBanners\GetAnnouncementBannerForOrg::class]->call($org);
    }

    public function removeAnnouncementBannerForOrg(string $org): ResponseInterface
    {
        if (array_key_exists(Operator\AnnouncementBanners\RemoveAnnouncementBannerForOrg::class, $this->operator) === false) {
            $this->operator[Operator\AnnouncementBanners\RemoveAnnouncementBannerForOrg::class] = new Operator\AnnouncementBanners\RemoveAnnouncementBannerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Announcement());
        }

        return $this->operator[Operator\AnnouncementBanners\RemoveAnnouncementBannerForOrg::class]->call($org);
    }

    public function setAnnouncementBannerForOrg(string $org, array $params): Schema\AnnouncementBanner
    {
        if (array_key_exists(Operator\AnnouncementBanners\SetAnnouncementBannerForOrg::class, $this->operator) === false) {
            $this->operator[Operator\AnnouncementBanners\SetAnnouncementBannerForOrg::class] = new Operator\AnnouncementBanners\SetAnnouncementBannerForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Announcement());
        }

        return $this->operator[Operator\AnnouncementBanners\SetAnnouncementBannerForOrg::class]->call($org, $params);
    }
}
