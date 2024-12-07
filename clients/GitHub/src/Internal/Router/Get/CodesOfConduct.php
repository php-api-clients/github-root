<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Get;

use ApiClients\Client\GitHub\Internal\Hydrators;
use ApiClients\Client\GitHub\Internal\Operator\CodesOfConduct\GetAllCodesOfConduct;
use ApiClients\Client\GitHub\Internal\Operator\CodesOfConduct\GetConductCode;
use ApiClients\Client\GitHub\Schema\CodeOfConduct;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class CodesOfConduct
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<CodeOfConduct>|WithoutBody */
    public function getAllCodesOfConduct(array $params): iterable|WithoutBody
    {
        $operator = new GetAllCodesOfConduct($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀CodesOfConduct());

        return $operator->call();
    }

    /** @return */
    public function getConductCode(array $params): CodeOfConduct|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('key', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: key');
        }

        $arguments['key'] = $params['key'];
        unset($params['key']);
        $operator = new GetConductCode($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀CodesOfConduct🌀Key());

        return $operator->call($arguments['key']);
    }
}
