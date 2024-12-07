<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Get;

use ApiClients\Client\GitHub\Internal\Hydrators;
use ApiClients\Client\GitHub\Internal\Operator\ApiInsights\GetRouteStatsByActor;
use ApiClients\Client\GitHub\Internal\Operator\ApiInsights\GetSubjectStats;
use ApiClients\Client\GitHub\Internal\Operator\ApiInsights\GetSummaryStats;
use ApiClients\Client\GitHub\Internal\Operator\ApiInsights\GetSummaryStatsByActor;
use ApiClients\Client\GitHub\Internal\Operator\ApiInsights\GetSummaryStatsByUser;
use ApiClients\Client\GitHub\Internal\Operator\ApiInsights\GetTimeStats;
use ApiClients\Client\GitHub\Internal\Operator\ApiInsights\GetTimeStatsByActor;
use ApiClients\Client\GitHub\Internal\Operator\ApiInsights\GetTimeStatsByUser;
use ApiClients\Client\GitHub\Internal\Operator\ApiInsights\GetUserStats;
use ApiClients\Client\GitHub\Schema\ApiInsightsSummaryStats;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class ApiInsights
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<ApiInsightsSubjectStats> */
    public function getSubjectStats(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('min_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: min_timestamp');
        }

        $arguments['min_timestamp'] = $params['min_timestamp'];
        unset($params['min_timestamp']);
        if (array_key_exists('max_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: max_timestamp');
        }

        $arguments['max_timestamp'] = $params['max_timestamp'];
        unset($params['max_timestamp']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        $operator = new GetSubjectStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀SubjectStats());

        return $operator->call($arguments['org'], $arguments['min_timestamp'], $arguments['max_timestamp'], $arguments['sort'], $arguments['page'], $arguments['per_page'], $arguments['direction']);
    }

    /** @return */
    public function getSummaryStats(array $params): ApiInsightsSummaryStats
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('min_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: min_timestamp');
        }

        $arguments['min_timestamp'] = $params['min_timestamp'];
        unset($params['min_timestamp']);
        if (array_key_exists('max_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: max_timestamp');
        }

        $arguments['max_timestamp'] = $params['max_timestamp'];
        unset($params['max_timestamp']);
        $operator = new GetSummaryStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats());

        return $operator->call($arguments['org'], $arguments['min_timestamp'], $arguments['max_timestamp']);
    }

    /** @return Observable<ApiInsightsTimeStats> */
    public function getTimeStats(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('min_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: min_timestamp');
        }

        $arguments['min_timestamp'] = $params['min_timestamp'];
        unset($params['min_timestamp']);
        if (array_key_exists('max_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: max_timestamp');
        }

        $arguments['max_timestamp'] = $params['max_timestamp'];
        unset($params['max_timestamp']);
        if (array_key_exists('timestamp_increment', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: timestamp_increment');
        }

        $arguments['timestamp_increment'] = $params['timestamp_increment'];
        unset($params['timestamp_increment']);
        $operator = new GetTimeStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats());

        return $operator->call($arguments['org'], $arguments['min_timestamp'], $arguments['max_timestamp'], $arguments['timestamp_increment']);
    }

    /** @return Observable<ApiInsightsUserStats> */
    public function getUserStats(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('user_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: user_id');
        }

        $arguments['user_id'] = $params['user_id'];
        unset($params['user_id']);
        if (array_key_exists('min_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: min_timestamp');
        }

        $arguments['min_timestamp'] = $params['min_timestamp'];
        unset($params['min_timestamp']);
        if (array_key_exists('max_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: max_timestamp');
        }

        $arguments['max_timestamp'] = $params['max_timestamp'];
        unset($params['max_timestamp']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        $operator = new GetUserStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀UserStats🌀UserId());

        return $operator->call($arguments['org'], $arguments['user_id'], $arguments['min_timestamp'], $arguments['max_timestamp'], $arguments['sort'], $arguments['page'], $arguments['per_page'], $arguments['direction']);
    }

    /** @return Observable<ApiInsightsRouteStats> */
    public function getRouteStatsByActor(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('actor_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: actor_type');
        }

        $arguments['actor_type'] = $params['actor_type'];
        unset($params['actor_type']);
        if (array_key_exists('actor_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: actor_id');
        }

        $arguments['actor_id'] = $params['actor_id'];
        unset($params['actor_id']);
        if (array_key_exists('min_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: min_timestamp');
        }

        $arguments['min_timestamp'] = $params['min_timestamp'];
        unset($params['min_timestamp']);
        if (array_key_exists('max_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: max_timestamp');
        }

        $arguments['max_timestamp'] = $params['max_timestamp'];
        unset($params['max_timestamp']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        $operator = new GetRouteStatsByActor($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀RouteStats🌀ActorType🌀ActorId());

        return $operator->call($arguments['org'], $arguments['actor_type'], $arguments['actor_id'], $arguments['min_timestamp'], $arguments['max_timestamp'], $arguments['sort'], $arguments['page'], $arguments['per_page'], $arguments['direction']);
    }

    /** @return */
    public function getSummaryStatsByUser(array $params): ApiInsightsSummaryStats
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('user_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: user_id');
        }

        $arguments['user_id'] = $params['user_id'];
        unset($params['user_id']);
        if (array_key_exists('min_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: min_timestamp');
        }

        $arguments['min_timestamp'] = $params['min_timestamp'];
        unset($params['min_timestamp']);
        if (array_key_exists('max_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: max_timestamp');
        }

        $arguments['max_timestamp'] = $params['max_timestamp'];
        unset($params['max_timestamp']);
        $operator = new GetSummaryStatsByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats🌀Users🌀UserId());

        return $operator->call($arguments['org'], $arguments['user_id'], $arguments['min_timestamp'], $arguments['max_timestamp']);
    }

    /** @return */
    public function getSummaryStatsByActor(array $params): ApiInsightsSummaryStats
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('min_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: min_timestamp');
        }

        $arguments['min_timestamp'] = $params['min_timestamp'];
        unset($params['min_timestamp']);
        if (array_key_exists('max_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: max_timestamp');
        }

        $arguments['max_timestamp'] = $params['max_timestamp'];
        unset($params['max_timestamp']);
        if (array_key_exists('actor_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: actor_type');
        }

        $arguments['actor_type'] = $params['actor_type'];
        unset($params['actor_type']);
        if (array_key_exists('actor_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: actor_id');
        }

        $arguments['actor_id'] = $params['actor_id'];
        unset($params['actor_id']);
        $operator = new GetSummaryStatsByActor($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀SummaryStats🌀ActorType🌀ActorId());

        return $operator->call($arguments['org'], $arguments['min_timestamp'], $arguments['max_timestamp'], $arguments['actor_type'], $arguments['actor_id']);
    }

    /** @return Observable<ApiInsightsTimeStats> */
    public function getTimeStatsByUser(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('user_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: user_id');
        }

        $arguments['user_id'] = $params['user_id'];
        unset($params['user_id']);
        if (array_key_exists('min_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: min_timestamp');
        }

        $arguments['min_timestamp'] = $params['min_timestamp'];
        unset($params['min_timestamp']);
        if (array_key_exists('max_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: max_timestamp');
        }

        $arguments['max_timestamp'] = $params['max_timestamp'];
        unset($params['max_timestamp']);
        if (array_key_exists('timestamp_increment', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: timestamp_increment');
        }

        $arguments['timestamp_increment'] = $params['timestamp_increment'];
        unset($params['timestamp_increment']);
        $operator = new GetTimeStatsByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats🌀Users🌀UserId());

        return $operator->call($arguments['org'], $arguments['user_id'], $arguments['min_timestamp'], $arguments['max_timestamp'], $arguments['timestamp_increment']);
    }

    /** @return Observable<ApiInsightsTimeStats> */
    public function getTimeStatsByActor(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('actor_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: actor_type');
        }

        $arguments['actor_type'] = $params['actor_type'];
        unset($params['actor_type']);
        if (array_key_exists('actor_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: actor_id');
        }

        $arguments['actor_id'] = $params['actor_id'];
        unset($params['actor_id']);
        if (array_key_exists('min_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: min_timestamp');
        }

        $arguments['min_timestamp'] = $params['min_timestamp'];
        unset($params['min_timestamp']);
        if (array_key_exists('max_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: max_timestamp');
        }

        $arguments['max_timestamp'] = $params['max_timestamp'];
        unset($params['max_timestamp']);
        if (array_key_exists('timestamp_increment', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: timestamp_increment');
        }

        $arguments['timestamp_increment'] = $params['timestamp_increment'];
        unset($params['timestamp_increment']);
        $operator = new GetTimeStatsByActor($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀TimeStats🌀ActorType🌀ActorId());

        return $operator->call($arguments['org'], $arguments['actor_type'], $arguments['actor_id'], $arguments['min_timestamp'], $arguments['max_timestamp'], $arguments['timestamp_increment']);
    }
}
