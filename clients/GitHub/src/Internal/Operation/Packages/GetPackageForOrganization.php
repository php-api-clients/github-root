<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Packages;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName;
use ApiClients\Client\GitHub\Schema\Package;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

use function explode;
use function json_decode;

final class GetPackageForOrganization
{
    public const OPERATION_ID    = 'packages/get-package-for-organization';
    public const OPERATION_MATCH = 'GET /orgs/{org}/packages/{package_type}/{package_name}';
    /**The type of supported package. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry. **/
    private string $packageType;
    /**The name of the package. **/
    private string $packageName;
    /**The organization name. The name is not case sensitive. **/
    private string $org;

    public function __construct(private SchemaValidator $responseSchemaValidator, private PackageName $hydrator, string $packageType, string $packageName, string $org)
    {
        $this->packageType             = $packageType;
        $this->packageName             = $packageName;
        $this->org                     = $org;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/orgs/{org}/packages/{package_type}/{package_name}'))->expand(['org' => $this->org, 'package_name' => $this->packageName, 'package_type' => $this->packageType]));
    }

    public function createResponse(ResponseInterface $response): Package
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Package::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(Package::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
