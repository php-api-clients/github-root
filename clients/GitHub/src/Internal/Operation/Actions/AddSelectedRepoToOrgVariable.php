<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Actions;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

final class AddSelectedRepoToOrgVariable
{
    public const OPERATION_ID    = 'actions/add-selected-repo-to-org-variable';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/variables/{name}/repositories/{repository_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The name of the variable. **/
    private string $name;

    public function __construct(string $org, string $name, private int $repositoryId)
    {
        $this->org  = $org;
        $this->name = $name;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('PUT', (string) (new UriTemplate('/orgs/{org}/actions/variables/{name}/repositories/{repository_id}'))->expand(['name' => $this->name, 'org' => $this->org, 'repository_id' => $this->repositoryId]));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
            /**
             * Response when the visibility of the variable is not set to `selected`
             **/

            case 409:
                return new WithoutBody(409, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
