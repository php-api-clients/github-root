<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Dependabot;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

final class AddSelectedRepoToOrgSecret
{
    public const OPERATION_ID    = 'dependabot/add-selected-repo-to-org-secret';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/dependabot/secrets/{secret_name}/repositories/{repository_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The name of the secret. **/
    private string $secretName;

    public function __construct(string $org, string $secretName, private int $repositoryId)
    {
        $this->org        = $org;
        $this->secretName = $secretName;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('PUT', (string) (new UriTemplate('/orgs/{org}/dependabot/secrets/{secret_name}/repositories/{repository_id}'))->expand(['org' => $this->org, 'repository_id' => $this->repositoryId, 'secret_name' => $this->secretName]));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * No Content when repository was added to the selected list
             **/
            case 204:
                return new WithoutBody(204, []);
            /**
             * Conflict when visibility type is not set to selected
             **/

            case 409:
                return new WithoutBody(409, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
