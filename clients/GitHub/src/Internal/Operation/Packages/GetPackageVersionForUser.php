<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Packages;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId;
use ApiClients\Client\GitHub\Schema\PackageVersion;
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

final class GetPackageVersionForUser
{
    public const OPERATION_ID    = 'packages/get-package-version-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}';
    /**The type of supported package. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry. **/
    private string $packageType;
    /**The name of the package. **/
    private string $packageName;
    /**Unique identifier of the package version. **/
    private int $packageVersionId;
    /**The handle for the GitHub user account. **/
    private string $username;

    public function __construct(private SchemaValidator $responseSchemaValidator, private PackageVersionId $hydrator, string $packageType, string $packageName, int $packageVersionId, string $username)
    {
        $this->packageType             = $packageType;
        $this->packageName             = $packageName;
        $this->packageVersionId        = $packageVersionId;
        $this->username                = $username;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}'))->expand(['package_name' => $this->packageName, 'package_type' => $this->packageType, 'package_version_id' => $this->packageVersionId, 'username' => $this->username]));
    }

    public function createResponse(ResponseInterface $response): PackageVersion
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(PackageVersion::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(PackageVersion::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
