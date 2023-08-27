<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Get;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\GitignoreTemplate;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Gitignore
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<string>|array{code:int} */
    public function getAllTemplates(array $params): iterable
    {
        $operator = new Operator\Gitignore\GetAllTemplates($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gitignore🌀Templates());

        return $operator->call();
    }

    /** @return Schema\GitignoreTemplate|array{code:int} */
    public function getTemplate(array $params): GitignoreTemplate|array
    {
        $arguments = [];
        if (array_key_exists('name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: name');
        }

        $arguments['name'] = $params['name'];
        unset($params['name']);
        $operator = new Operator\Gitignore\GetTemplate($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gitignore🌀Templates🌀Name());

        return $operator->call($arguments['name']);
    }
}
