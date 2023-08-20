<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrators;
use ApiClients\Client\GitHubEnterpriseCloud\Operator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
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

    public function getAnnouncementBannerForEnterprise(string $enterprise): Schema\AnnouncementBanner
    {
        if (array_key_exists(Operator\AnnouncementBanners\GetAnnouncementBannerForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\AnnouncementBanners\GetAnnouncementBannerForEnterprise::class] = new Operator\AnnouncementBanners\GetAnnouncementBannerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Announcement());
        }

        return $this->operator[Operator\AnnouncementBanners\GetAnnouncementBannerForEnterprise::class]->call($enterprise);
    }

    public function removeAnnouncementBannerForEnterprise(string $enterprise): ResponseInterface
    {
        if (array_key_exists(Operator\AnnouncementBanners\RemoveAnnouncementBannerForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\AnnouncementBanners\RemoveAnnouncementBannerForEnterprise::class] = new Operator\AnnouncementBanners\RemoveAnnouncementBannerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Announcement());
        }

        return $this->operator[Operator\AnnouncementBanners\RemoveAnnouncementBannerForEnterprise::class]->call($enterprise);
    }

    public function setAnnouncementBannerForEnterprise(string $enterprise, array $params): Schema\AnnouncementBanner
    {
        if (array_key_exists(Operator\AnnouncementBanners\SetAnnouncementBannerForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\AnnouncementBanners\SetAnnouncementBannerForEnterprise::class] = new Operator\AnnouncementBanners\SetAnnouncementBannerForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Announcement());
        }

        return $this->operator[Operator\AnnouncementBanners\SetAnnouncementBannerForEnterprise::class]->call($enterprise, $params);
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
