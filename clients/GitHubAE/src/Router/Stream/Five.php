<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Stream;

use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironmentDownloadStatus;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Five
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    public function call(string $call, array $params, array $pathChunks): PreReceiveEnvironmentDownloadStatus|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'pre-receive-environments') {
                    if ($pathChunks[3] === '{pre_receive_environment_id}') {
                        if ($pathChunks[4] === 'downloads') {
                            if ($call === 'STREAM /admin/pre-receive-environments/{pre_receive_environment_id}/downloads') {
                                $matched = true;
                                if (array_key_exists(Router\Stream\EnterpriseAdmin::class, $this->router) === false) {
                                    $this->router[Router\Stream\EnterpriseAdmin::class] = new Router\Stream\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Stream\EnterpriseAdmin::class]->StartPreReceiveEnvironmentDownloadStreaming($params);
                            }
                        }
                    }
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
