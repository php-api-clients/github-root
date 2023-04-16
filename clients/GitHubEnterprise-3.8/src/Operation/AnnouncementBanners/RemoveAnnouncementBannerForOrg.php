<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\AnnouncementBanners;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveAnnouncementBannerForOrg
{
    public const OPERATION_ID    = 'announcement-banners/remove-announcement-banner-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/announcement';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/announcement';
    /**The organization name. The name is not case sensitive.**/
    private string $org;

    public function __construct(string $org)
    {
        $this->org = $org;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}'], [$this->org], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
