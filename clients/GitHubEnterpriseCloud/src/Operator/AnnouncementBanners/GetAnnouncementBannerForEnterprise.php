<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operator\AnnouncementBanners;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\AnnouncementBanner;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetAnnouncementBannerForEnterprise
{
    public const OPERATION_ID    = 'announcement-banners/get-announcement-banner-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/announcement';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprises/{enterprise}/announcement';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Enterprises\Enterprise\Announcement $hydrator)
    {
    }

    /**
     * @return PromiseInterface<AnnouncementBanner>
     **/
    public function call(string $enterprise): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Operation\AnnouncementBanners\GetAnnouncementBannerForEnterprise($this->responseSchemaValidator, $this->hydrator, $enterprise);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): AnnouncementBanner {
            return $operation->createResponse($response);
        });
    }
}
