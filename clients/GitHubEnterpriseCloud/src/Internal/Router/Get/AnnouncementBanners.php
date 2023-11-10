<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Get;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\AnnouncementBanner;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class AnnouncementBanners
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function getAnnouncementBannerForEnterprise(array $params): AnnouncementBanner
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Internal\Operator\AnnouncementBanners\GetAnnouncementBannerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Announcement());

        return $operator->call($arguments['enterprise']);
    }

    /** @return */
    public function getAnnouncementBannerForOrg(array $params): AnnouncementBanner
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\AnnouncementBanners\GetAnnouncementBannerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Announcement());

        return $operator->call($arguments['org']);
    }
}
