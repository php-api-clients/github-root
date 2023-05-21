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

final readonly class SetAnnouncementBannerForEnterprise
{
    public const OPERATION_ID    = 'announcement-banners/set-announcement-banner-for-enterprise';
    public const OPERATION_MATCH = 'PATCH /enterprises/{enterprise}/announcement';
    private const METHOD         = 'PATCH';
    private const PATH           = '/enterprises/{enterprise}/announcement';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Enterprises\Enterprise\Announcement $hydrator)
    {
    }

    /**
     * @return PromiseInterface<AnnouncementBanner>
     **/
    public function call(string $enterprise, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Operation\AnnouncementBanners\SetAnnouncementBannerForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $enterprise);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): AnnouncementBanner {
            return $operation->createResponse($response);
        });
    }
}
