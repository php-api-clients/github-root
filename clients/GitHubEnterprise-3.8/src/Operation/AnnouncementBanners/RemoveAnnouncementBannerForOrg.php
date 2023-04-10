<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\AnnouncementBanners;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class RemoveAnnouncementBannerForOrg
{
    public const OPERATION_ID = 'announcement-banners/remove-announcement-banner-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/announcement';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/announcement';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    public function __construct(string $org)
    {
        $this->org = $org;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}'), array($this->org), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
