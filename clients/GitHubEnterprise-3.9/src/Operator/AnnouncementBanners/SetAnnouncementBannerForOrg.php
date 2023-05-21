<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\AnnouncementBanners;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\AnnouncementBanner;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class SetAnnouncementBannerForOrg
{
    public const OPERATION_ID    = 'announcement-banners/set-announcement-banner-for-org';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/announcement';
    private const METHOD         = 'PATCH';
    private const PATH           = '/orgs/{org}/announcement';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Announcement $hydrator)
    {
    }

    /**
     * @return PromiseInterface<AnnouncementBanner>
     **/
    public function call(string $org, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\AnnouncementBanners\SetAnnouncementBannerForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): AnnouncementBanner {
            return $operation->createResponse($response);
        });
    }
}
