<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Actions;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class AddSelectedRepoToOrgSecret
{
    public const OPERATION_ID    = 'actions/add-selected-repo-to-org-secret';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}';
    /**secret_name parameter **/
    private string $secretName;

    public function __construct(private string $org, string $secretName, private int $repositoryId)
    {
        $this->secretName = $secretName;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('PUT', str_replace(['{org}', '{secret_name}', '{repository_id}'], [$this->org, $this->secretName, $this->repositoryId], '/orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}'));
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
