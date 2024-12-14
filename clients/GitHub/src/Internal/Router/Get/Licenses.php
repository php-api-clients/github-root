<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Get;

use ApiClients\Client\GitHub\Internal\Hydrators;
use ApiClients\Client\GitHub\Internal\Operator\Licenses\Get;
use ApiClients\Client\GitHub\Internal\Operator\Licenses\GetAllCommonlyUsed;
use ApiClients\Client\GitHub\Internal\Operator\Licenses\GetForRepo;
use ApiClients\Client\GitHub\Schema\License;
use ApiClients\Client\GitHub\Schema\LicenseContent;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Licenses
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<LicenseSimple>|WithoutBody */
    public function getAllCommonlyUsed(array $params): iterable|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('featured', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: featured');
        }

        $arguments['featured'] = $params['featured'];
        unset($params['featured']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new GetAllCommonlyUsed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Licenses());

        return $operator->call($arguments['featured'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function get(array $params): License|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('license', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: license');
        }

        $arguments['license'] = $params['license'];
        unset($params['license']);
        $operator = new Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Licenses🌀License());

        return $operator->call($arguments['license']);
    }

    /** @return */
    public function getForRepo(array $params): LicenseContent
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('ref', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ref');
        }

        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        $operator = new GetForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀License());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['ref']);
    }
}
