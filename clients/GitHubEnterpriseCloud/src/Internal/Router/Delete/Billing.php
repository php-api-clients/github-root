<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Delete;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Billing\RemoveResourceFromCostCenter\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Billing
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function removeResourceFromCostCenter(array $params): Json
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('cost_center_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: cost_center_id');
        }

        $arguments['cost_center_id'] = $params['cost_center_id'];
        unset($params['cost_center_id']);
        $operator = new Internal\Operator\Billing\RemoveResourceFromCostCenter($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Settings🌀Billing🌀CostCenters🌀CostCenterId🌀Resource());

        return $operator->call($arguments['enterprise'], $arguments['cost_center_id'], $params);
    }
}
